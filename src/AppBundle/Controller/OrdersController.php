<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Orders;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Order controller.
 *
 * @Route("admin/orders")
 */
class OrdersController extends Controller
{
    /**
     * Lists all order entities.
     *
     * @Route("/", name="admin_orders_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orders = $em->getRepository('AppBundle:Orders')->findAll();

        return $this->render('orders/index.html.twig', array(
            'orders' => $orders,
        ));
    }

    /**
     * Finds and displays a order entity.
     *
     * @Route("/{id}", name="admin_orders_show")
     * @Method("GET")
     */
    public function showAction(Orders $order)
    {

        return $this->render('orders/show.html.twig', array(
            'order' => $order,
        ));
    }

    
     /**
     * @Route("/confirm/", name="new_order")
     */

    public function newAction(Request $request)
    {
        $order=new Orders();
        $order->setTotal(floatval($request->get('montant')));
        $order->setFullname($request->get('name'));
        $order->setPostale($request->get('postale'));
        $order->setMail($request->get('mail'));
        $em=$this->getDoctrine()->getManager();
        $em->persist($order);
        $em->flush();

       return $this->redirectToRoute('thankyou');

    }


}
