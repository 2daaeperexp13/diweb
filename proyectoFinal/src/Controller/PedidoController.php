<?php

namespace App\Controller;

use App\Entity\Pedido;
use App\Form\PedidoType;
use App\Repository\PedidoRepository;
use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pedido")
 */
class PedidoController extends AbstractController
{
    /**
     * @Route("/", name="pedido_index", methods={"GET"})
     */
    public function index(PedidoRepository $pedidoRepository): Response
    {
        return $this->render('pedido/index.html.twig', [
            'pedidos' => $pedidoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pedido_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pedido = new Pedido();
        $form = $this->createForm(PedidoType::class, $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pedido);
            $entityManager->flush();

            return $this->redirectToRoute('pedido_index');
        }

        return $this->render('pedido/new.html.twig', [
            'pedido' => $pedido,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/guardarCarrito", name="carrito", methods={"POST"})
     */
    public function guardarCarrito(Request $request, ProductoRepository $productoRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (($this->getUser())) {
            
            $this->getUser()->setCarrito($request->request->get('carrito'));
            $entityManager->persist($this->getUser());
            $entityManager->flush();
            return new JsonResponse($this->getUser()->getCarrito());
        }
        else return new Response(null);
    }

    /**
     * @Route("/getcarrito", name="getcarrito", methods={"GET","POST"})
     */
    public function getCarrito(Request $request, ProductoRepository $productoRepository): JsonResponse
    {
        if (($this->getUser()->getCarrito()!=null)) {
           
            return new JsonResponse($this->getUser()->getCarrito());
        }
        else return new JsonResponse(null);
    }

    /**
     * @Route("/compra", name="compra", methods={"GET","POST"})
     */
    public function comprar(Request $request, ProductoRepository $productoRepository, PedidoRepository $pedidoRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $pedido=new Pedido();

        //asigno los datos del request en variables
        $productos=$request->request->get('productos');
        $importe=$request->request->get('importe');
        $direccion=$request->request->get('direccion');
        $tarjeta=$request->request->get('tarjeta');
        $fechaVencimiento=$request->request->get('fecha');
        $fechaCompra= Date('Y-m-d H:i:s');

   
        // asigno los parametros al pedido
        $pedido->setFecha($fechaCompra)->setPrecio($importe)
                ->setDireccion($direccion)->setTarjeta($tarjeta)
                ->setFechaVencimiento($fechaVencimiento);



        $this->getUser()->addPedido($pedido);
        $entityManager->persist($this->getUser());
        $entityManager->flush();

        for ($i=0; $i < count($productos); $i++) { 
            $producto=$productos[$i];
            $objproducto=$productoRepository->find($producto['id']*1);
            $pedido->addProducto($objproducto);
            $objproducto->setStock($objproducto->getStock()-$producto['cantidad']);
        }
        $entityManager->persist($pedido);
        $entityManager->flush();

        $pedidoRepository->unidadesProducto($productos,$pedido->getId());

        return new Response(true);
    }


    /**
     * @Route("/{id}", name="pedido_show", methods={"GET"})
     */
    public function show(Pedido $pedido): Response
    {
        return $this->render('pedido/show.html.twig', [
            'pedido' => $pedido,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pedido_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pedido $pedido): Response
    {
        $form = $this->createForm(PedidoType::class, $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pedido_index');
        }

        return $this->render('pedido/edit.html.twig', [
            'pedido' => $pedido,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pedido_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pedido $pedido): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pedido->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pedido);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pedido_index');
    }
}
