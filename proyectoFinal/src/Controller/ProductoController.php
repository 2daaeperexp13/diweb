<?php

namespace App\Controller;
use App\Entity\Producto;
use App\Entity\imgProducto;
use App\Form\ProductoType;
use App\Repository\ImgProductoRepository;
use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
/**
 * @Route("/producto")
 */
class ProductoController extends AbstractController
{
    /**
     * @Route("/", name="producto_index", methods={"GET"})
     */
    public function index(Request $request ,PaginatorInterface $paginator, ProductoRepository $productoRepository): Response
    {
        return $this->render('producto/index.html.twig', [
            'productos' => $paginator->paginate($productoRepository->createQueryBuilder('p')
                ->getQuery()
            , $request->query->getInt('page',1),5),
            'prodjson'=>json_encode($productoRepository->findAll())
        ]);
    }

    /**
     * @Route("/prodindex", name="prodIndex", methods={"GET","POST"})
     */
    public function prodindex(ProductoRepository $productoRepository): JsonResponse
    {
        $productos=$productoRepository->createQueryBuilder('p')->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        $objProducto=$productoRepository->findAll();
        for ($i=0; $i < count($productos); $i++) {
            $productos[$i]['tipoProducto']=$objProducto[$i]->getTipoProducto()->getTipo();
            $productos[$i]['categoria']=$objProducto[$i]->getCategoria()->getId();
            $productos[$i]['imagenes']=[];
            foreach ($objProducto[$i]->getImgProductos() as $img ) {
                array_push($productos[$i]['imagenes'],$img->getImg());
            }
        }
      
        return new JsonResponse($productos);
    }

    /**
     * @Route("/new", name="producto_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $producto = new Producto();
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($producto);
            $entityManager->flush();
            
            foreach($request->files->get('producto')['imgProductos'] as $img){
              
                $imgProducto=new imgProducto();
                $imgProducto->setImg("data:image/jpeg;base64, ".base64_encode(stream_get_contents(fopen($img->getRealPath(),"rb"))));
                $producto->addImgProducto($imgProducto);
                $entityManager->flush();
            }
            
            return $this->redirectToRoute('producto_index');
        }

        return $this->render('producto/new.html.twig', [
            'producto' => $producto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="producto_show", methods={"GET"})
     */
    public function show(Producto $producto): Response
    {
    
        return $this->render('producto/show.html.twig', [
            'producto' => $producto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="producto_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Producto $producto): Response
    {
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('producto_index');
        }

        return $this->render('producto/edit.html.twig', [
            'producto' => $producto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="producto_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Producto $producto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$producto->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($producto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('producto_index');
    }
}
