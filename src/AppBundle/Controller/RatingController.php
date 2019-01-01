<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Rating controller.
 *
 * @Route("admin/ratings")
 */
class RatingController extends Controller
{
    /**
     * Lists all rating entities.
     *
     * @Route("/", name="admin_ratings_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ratings = $em->getRepository('AppBundle:Rating')->findAll();

        return $this->render('rating/index.html.twig', array(
            'ratings' => $ratings,
        ));
    }

    /**
     * Creates a new rating entity.
     *
     * @Route("/new", name="admin_ratings_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rating = new Rating();
        $form = $this->createForm('AppBundle\Form\RatingType', $rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rating);
            $em->flush();

            return $this->redirectToRoute('admin_ratings_show', array('id' => $rating->getId()));
        }

        return $this->render('rating/new.html.twig', array(
            'rating' => $rating,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rating entity.
     *
     * @Route("/{id}", name="admin_ratings_show")
     * @Method("GET")
     */
    public function showAction(Rating $rating)
    {
        $deleteForm = $this->createDeleteForm($rating);

        return $this->render('rating/show.html.twig', array(
            'rating' => $rating,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rating entity.
     *
     * @Route("/{id}/edit", name="admin_ratings_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Rating $rating)
    {
        $deleteForm = $this->createDeleteForm($rating);
        $editForm = $this->createForm('AppBundle\Form\RatingType', $rating);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_ratings_edit', array('id' => $rating->getId()));
        }

        return $this->render('rating/edit.html.twig', array(
            'rating' => $rating,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rating entity.
     *
     * @Route("/{id}", name="admin_ratings_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Rating $rating)
    {
        $form = $this->createDeleteForm($rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rating);
            $em->flush();
        }

        return $this->redirectToRoute('admin_ratings_index');
    }

    /**
     * Creates a form to delete a rating entity.
     *
     * @param Rating $rating The rating entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rating $rating)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_ratings_delete', array('id' => $rating->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
