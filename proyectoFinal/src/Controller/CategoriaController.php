<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Form\CategoriaType;
use App\Repository\CategoriaRepository;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/categoria")
 */
class CategoriaController extends AbstractController
{
    /**
     * @Route("/", name="categoria_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator, CategoriaRepository $categoriaRepository): Response
    {
        $exception=$request->query->get('exception');
        return $this->render('categoria/index.html.twig', [
            'categorias' => $paginator->paginate($categoriaRepository->createQueryBuilder('t')
                ->getQuery()
            , $request->query->getInt('page',1),5),
            'exception'=>$exception
        ]);
    }

    /**
     * @Route("/datos", name="categoria_datos", methods={"GET","POST"})
     */
    public function datos(CategoriaRepository $categoriaRepository)  :JsonResponse
    {
        $categorias=$categoriaRepository->createQueryBuilder('c')->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        return new JsonResponse($categorias);
    }
    
    /**
     * @Route("/new", name="categoria_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categorium = new Categoria();
        $form = $this->createForm(CategoriaType::class, $categorium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $img=$request->files->get('categoria')['icono'];
            $categorium->setIcono("data:image/jpeg;base64, ".base64_encode(stream_get_contents(fopen($img->getRealPath(),"rb"))));
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorium);
            $entityManager->flush();

            return $this->redirectToRoute('categoria_index');
        }

        return $this->render('categoria/new.html.twig', [
            'categorium' => $categorium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoria_show", methods={"GET"})
     */
    public function show(Categoria $categorium): Response
    {
        return $this->render('categoria/show.html.twig', [
            'categorium' => $categorium,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categoria_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categoria $categorium): Response
    {
        $form = $this->createForm(CategoriaType::class, $categorium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $img=$request->files->get('categoria')['icono'];
            $categorium->setIcono("data:image/jpeg;base64, ".base64_encode(stream_get_contents(fopen($img->getRealPath(),"rb"))));
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoria_index');
        }

        return $this->render('categoria/edit.html.twig', [
            'categorium' => $categorium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoria_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Categoria $categorium): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorium->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            try {
                $entityManager->remove($categorium);
                $entityManager->flush();
            } catch (ForeignKeyConstraintViolationException $e) {
                return $this->redirectToRoute('categoria_index', [
                    "exception"=>"No es posible eliminar esta categorÍa, hay productos asociados a la misma."
                ]);
            }
        }

        return $this->redirectToRoute('categoria_index');
    }
}
