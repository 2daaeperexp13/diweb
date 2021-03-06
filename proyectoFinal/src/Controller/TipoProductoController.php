<?php

namespace App\Controller;

use App\Entity\TipoProducto;
use App\Form\TipoProductoType;
use App\Repository\TipoProductoRepository;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipo/producto")
 */
class TipoProductoController extends AbstractController
{
    /**
     * @Route("/", name="tipo_producto_index", methods={"GET"})
     */
    public function index(TipoProductoRepository $tipoProductoRepository, Request $request,PaginatorInterface $paginator ): Response
    {
        $exception=$request->query->get('exception');
        return $this->render('tipo_producto/index.html.twig', [
            'tipo_productos' => $paginator->paginate($tipoProductoRepository->createQueryBuilder('t')
                ->getQuery()
            , $request->query->getInt('page',1),5),
            'exception'=>$exception
        ]);
    }

    /**
     * @Route("/tipos", name="tipo_producto_tipos", methods={"GET"})
     */
    public function getTipos(TipoProductoRepository $tipoProductoRepository): Response
    {
        $tipos=$tipoProductoRepository->createQueryBuilder('p')->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return new JsonResponse($tipos);
    }
    /**
     * @Route("/new", name="tipo_producto_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tipoProducto = new TipoProducto();
        $form = $this->createForm(TipoProductoType::class, $tipoProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $img=$request->files->get('tipo_producto')['icono'];
            if($img!=null) $tipoProducto->setIcono("data:image/jpeg;base64, ".base64_encode(stream_get_contents(fopen($img->getRealPath(),"rb"))));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipoProducto);
            $entityManager->flush();

            return $this->redirectToRoute('tipo_producto_index');
        }

        return $this->render('tipo_producto/new.html.twig', [
            'tipo_producto' => $tipoProducto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_producto_show", methods={"GET"})
     */
    public function show(TipoProducto $tipoProducto): Response
    {
        return $this->render('tipo_producto/show.html.twig', [
            'tipo_producto' => $tipoProducto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tipo_producto_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TipoProducto $tipoProducto): Response
    {
        $form = $this->createForm(TipoProductoType::class, $tipoProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            $img=$request->files->get('tipo_producto')['icono'];
            if($img!=null) $tipoProducto->setIcono("data:image/jpeg;base64, ".base64_encode(stream_get_contents(fopen($img->getRealPath(),"rb"))));
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_producto_index');
        }

        return $this->render('tipo_producto/edit.html.twig', [
            'tipo_producto' => $tipoProducto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_producto_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TipoProducto $tipoProducto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoProducto->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            try {
                $entityManager->remove($tipoProducto);
                $entityManager->flush();
            } catch (ForeignKeyConstraintViolationException $e) {
                return $this->redirectToRoute('tipo_producto_index', [
                    "exception"=>"No es posible eliminar este tipo de producto, hay productos asociados al mismo."
                ]);
            }
        }

        return $this->redirectToRoute('tipo_producto_index');
    }
}
