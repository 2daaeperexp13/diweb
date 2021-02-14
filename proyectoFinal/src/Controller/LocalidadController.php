<?php

namespace App\Controller;

use App\Entity\Localidad;
use App\Form\LocalidadType;
use App\Repository\LocalidadRepository;
use App\Repository\ProvinciaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
/**
 * @Route("/localidad")
 */
class LocalidadController extends AbstractController
{
    /**
     * @Route("/", name="localidad_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator, LocalidadRepository $localidadRepository): Response
    {
        return $this->render('localidad/index.html.twig', [
            'localidades' => $paginator->paginate($localidadRepository->createQueryBuilder('t')
                ->getQuery()
            , $request->query->getInt('page',1),5)
        ]);
    }

    /**
     * @Route("/new", name="localidad_new", methods={"GET","POST"})
     */
    public function new(Request $request , ProvinciaRepository $provinciarep): Response
    {
        $localidad = new Localidad();
        $form = $this->createForm(LocalidadType::class, $localidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($localidad);
            $entityManager->flush();

            return $this->redirectToRoute('localidad_index');
        }
        $provincias=$provinciarep->findAll();
      
        return $this->render('localidad/new.html.twig', [
            'localidad' => $localidad,
            'form' => $form->createView(),
            'provincias'=>$provincias
        ]);
    }

    /**
     * @Route("/{id}", name="localidad_show", methods={"GET"})
     */
    public function show(Localidad $localidad): Response
    {
        return $this->render('localidad/show.html.twig', [
            'localidad' => $localidad
        ]);
    }

    /**
     * @Route("/{id}/edit", name="localidad_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Localidad $localidad): Response
    {
        $form = $this->createForm(LocalidadType::class, $localidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('localidad_index');
        }

        return $this->render('localidad/edit.html.twig', [
            'localidad' => $localidad,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="localidad_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Localidad $localidad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$localidad->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($localidad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('localidad_index');
    }
}
