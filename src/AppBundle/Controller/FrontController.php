<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Category;
use AppBundle\Entity\Book;
use AppBundle\Entity\Orders;
use AppBundle\Entity\Rating;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class FrontController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    { $books=array();
     $session=$request->getSession();
        $panier=$session->get('cart');
        $em = $this->getDoctrine()->getManager();
        if($panier!=0){
            $books=$em->getRepository(Book::class)->findById(array_keys($panier));

        }
      
        
        return $this->render('base.html.twig',['books'=>$books,'panier'=>$panier]);
        
    }
     /**
     * @Route("/contact/", name="contact")
     */
    public function contactAction(Request $request)
   {$books=array();
    $panier=$request->getSession()->get('cart');
        $em = $this->getDoctrine()->getManager();
        if($panier!=0){
            $books=$em->getRepository(Book::class)->findById(array_keys($panier));

        }

      return $this->render('front/contact.html.twig',['panier'=>$panier,'books'=>$books]);

   }





    /**
     * @Route("/categories", name="categories")
     */
    public function categoryAction(Request $request)
    {$books=array();
        // replace this example code with whatever you need
         $categories = $this->getDoctrine()->getManager()->getRepository(Category::class)->findAll();
         $panier=$request->getSession()->get('cart');
        $em = $this->getDoctrine()->getManager();
        if($panier!=0){
            $books=$em->getRepository(Book::class)->findById(array_keys($panier));

        }

         return $this->render('front/categories.html.twig', array('categories'=>$categories,'panier'=>$panier,'books'=>$books
        
        ));
    }




    /**
     * @Route("/{category}", name="books")
     */
    public function bookAction(Request $request,Category $category)
    {
        $books=array();

    $query = $this->getDoctrine()->getManager()
        ->createQuery(
        'SELECT b FROM AppBundle:Book b
        JOIN b.categories c
        WHERE c.id = :id'
    )->setParameter('id', $category);

    $books=$query->getResult();
     
     
      
        $categories=$this->getDoctrine()->getManager()->getRepository(Category::class)->findAll();
        $panier=$request->getSession()->get('cart');
        $em = $this->getDoctrine()->getManager();
        if($panier!=0){
            $books=$em->getRepository(Book::class)->findById(array_keys($panier));

        }

         return $this->render('front/books.html.twig', array(                       'books'=>$books,'category'=>$category,'categories'=>$categories,'panier'=>$panier,'books'=>$books
        ));
    }


    /**
     * @Route("/details/{book}", name="details")
     */
    public function detailsAction(Request $request,Book $book)
    {
       
       $books=array();
      $book = $this->getDoctrine()->getManager()->getRepository(Book::class)->find($book);
        /*$query = $this->getDoctrine()->getManager()
        ->createQuery(
        'SELECT b.categories.category FROM AppBundle:Book b
        JOIN b.categories c
        WHERE b.id = :id'
    )->setParameter('id', $book);
    
    $categories=$query->getResult();*/
    $categories= $book->getCategories();
      
      $ratings=$this->getDoctrine()->getManager()->getRepository(Rating::class)->findByBook($book);
      $panier=$request->getSession()->get('cart');
        $em = $this->getDoctrine()->getManager();
        if($panier!=0){
            $books=$em->getRepository(Book::class)->findById(array_keys($panier));

        }

    
         return $this->render('front/details.html.twig', array('book'=>$book,         'categories'=>$categories,'ratings'=>$ratings,'panier'=>$panier,'books'=>$books
        ));
       }

 /**
     * @Route("/thankyou/", name="thankyou")
     */
    public function thankAction(Request $request)
    {
        $session=$request->getSession();
        @$panier=$session->remove('cart');
     
        
        $books=$this->getDoctrine()->getManager()->getRepository('AppBundle:Book')->findAll();
        return $this->render('front/thankyou.html.twig',['books'=>$books]);
   }
   /**
     * @Route("/rate/{book}", name="rate_book")
     */
    public function rateAction(Request $request, $book)
    { 
        $b=$this->getDoctrine()->getManager()->getRepository(Book::class)
        ->find($book);
          $rate=new Rating();
           $rate->setBook($b);
           if($request->get('star')==null && $request->get('review')==null)
            return  $this->redirectToRoute('details',['book'=>$book]);
        if($request->get('star')!=null)
         $rate->setStars(floatval($request->get('star')));
     else $rate->setStars(0);

         if($request->get('review')!=null) $rate->setReview($request->get('review'));
         else $rate->setReview("");
         $em=$this->getDoctrine()->getManager();
         $em->persist($rate);
         $em->flush();
        return  $this->redirectToRoute('details',['book'=>$book]);
    }
    

    /**
     * @Route("/admin/", name="admin")
     */
    public function adminAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('AppBundle:Category')->findAll();
        $books=$em->getRepository("AppBundle:Book")->findAll();
        $orders=$em->getRepository("AppBundle:Orders")->findAll();
        $ratings=$em->getRepository("AppBundle:Rating")->findAll();
        $total=0;
        foreach ($orders as  $value) {
            $total+=$value->getTotal();
        }
        return $this->render('admin/index.html.twig',['categories'=>$categories,'books'=>$books,'orders'=>$orders,'ratings'=>$ratings,'total'=>$total]);

    }


}
