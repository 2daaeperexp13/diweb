<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/", name="principal")
     */
    public function index(?Array $log): Response
    {
        if($this->getUser()){
            foreach ($this->getUser()->getRoles() as $rol ) {
                if($rol=='ROLE_ADMIN') return $this->redirectToRoute('producto_index');
            }
        }
        
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }
}
