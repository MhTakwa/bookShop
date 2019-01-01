<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Category;
use AppBundle\Entity\Book;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class CartController extends Controller
{

    /**
     * @Route("/cart", name="cart")
     */

    public function indexAction(Request $request)
    {
        $session=$request->getSession();
        $panier=$session->get('cart');
        if($panier==null)
         return $this->render('front/clearCart.html.twig');
   
        $em = $this->getDoctrine()->getManager();
        $books=$em->getRepository(Book::class)->findById(array_keys($panier));
        
        return $this->render('front/cart.html.twig',['books'=>$books,'panier'=>$panier]);
    }


    /**
     * @Route("/add/{book}", name="add_book")
     */

    public function addAction(Request $request,int $book)
    { 
        $qte=$request->get('qte');
        if($request->getSession()->get('cart')==null){
            $session=new Session();
            $session->set('cart',array());
         }
         else $session=$request->getSession();
         $panier=$session->get('cart');
        @$panier[$book]+=$qte;
        @$session->set('cart',$panier);
       
        return $this->redirectToRoute('cart');
       
        
    }
     /** 
     * @Route("/cart/update/", name="update_cart")
     */

    public function updateAction(Request $request)
    {     $book=$request->get('book');
          $qte=$request->get('new_qte');
         
          $session=$request->getSession();
          $panier=$session->get('cart');
           foreach ($book as  $value) {
            
               @$panier[$value]=$qte[$value];
            }
         
          @$session->set('cart',$panier);
       
      return $this->redirectToRoute('cart');
        
   }

    /**
     * @Route("/cart/delete/{book}", name="delete_cart")
     */

    public function deleteAction(Request $request,int $book)

    {
        $session=$request->getSession();
        $panier=$session->get('cart');
        unset($panier[$book]);
      @$session->set('cart',$panier);
      return $this->redirectToRoute('cart');
        

     }


     /**
     * @Route("/cart/clear", name="clear_cart")
     */
    public function ViderAction(Request $request)
    {
        $session=$request->getSession();
        @$panier=$session->remove('cart');
     
        
       
    return $this->render('front/clearCart.html.twig');
}
  /**
     * @Route("/checkout", name="Checkout")
     */

    public function checkoutAction(Request $request)
    { 
        $total=$request->get('total');
         

    return $this->render('front/checkout.html.twig',['total'=>$total]);

   }
}