<?php

namespace App\Controller;

use App\Entity\Mensaje;
use App\Form\MensajeType;
use App\Repository\MensajeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/mensaje")
 */
class MensajeController extends AbstractController
{
    /**
     * @Route("/", name="mensaje_index", methods={"GET"})
     */
    public function index(Request $request,MensajeRepository $mensajeRepository, PaginatorInterface $paginator): Response
    {
        return $this->render('mensaje/index.html.twig', [
            'mensajes' => $paginator->paginate($mensajeRepository->createQueryBuilder('t')->getQuery()
            , $request->query->getInt('page',1),5)
        ]);
    }

    /**
     * @Route("/new", name="mensaje_new", methods={"GET","POST"})
     */
    public function new(Request $request)
    {
        $mensaje = new Mensaje();
        $mensaje->setEmail($request->request->get('email'));
        $mensaje->setMensaje($request->request->get('mensaje'));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($mensaje);
        $entityManager->flush();

        return new Response(true);
    }

    /**
     * @Route("/{id}", name="mensaje_show", methods={"GET"})
     */
    public function show(Mensaje $mensaje): Response
    {
        return $this->render('mensaje/show.html.twig', [
            'mensaje' => $mensaje,
        ]);
    }

    

    /**
     * @Route("/{id}", name="mensaje_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Mensaje $mensaje): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mensaje->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mensaje);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mensaje_index');
    }
}
