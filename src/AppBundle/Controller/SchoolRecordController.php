<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SchoolRecord;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Schoolrecord controller.
 *
 * @Route("schoolrecord")
 */
class SchoolRecordController extends Controller
{
    /**
     * Lists all schoolRecord entities.
     *
     * @Route("/", name="schoolrecord_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $schoolRecords = $em->getRepository('AppBundle:SchoolRecord')->findAll();

        return $this->render('schoolrecord/index.html.twig', array(
            'schoolRecords' => $schoolRecords,
        ));
    }

    /**
     * Creates a new schoolRecord entity.
     *
     * @Route("/new", name="schoolrecord_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $schoolRecord = new Schoolrecord();
        $form = $this->createForm('AppBundle\Form\SchoolRecordType', $schoolRecord);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($schoolRecord);
            $em->flush();

            return $this->redirectToRoute('schoolrecord_show', array('id' => $schoolRecord->getId()));
        }

        return $this->render('schoolrecord/new.html.twig', array(
            'schoolRecord' => $schoolRecord,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a schoolRecord entity.
     *
     * @Route("/{id}", name="schoolrecord_show")
     * @Method("GET")
     */
    public function showAction(SchoolRecord $schoolRecord)
    {
        $deleteForm = $this->createDeleteForm($schoolRecord);

        return $this->render('schoolrecord/show.html.twig', array(
            'schoolRecord' => $schoolRecord,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing schoolRecord entity.
     *
     * @Route("/{id}/edit", name="schoolrecord_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SchoolRecord $schoolRecord)
    {
        $deleteForm = $this->createDeleteForm($schoolRecord);
        $editForm = $this->createForm('AppBundle\Form\SchoolRecordType', $schoolRecord);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('schoolrecord_edit', array('id' => $schoolRecord->getId()));
        }

        return $this->render('schoolrecord/edit.html.twig', array(
            'schoolRecord' => $schoolRecord,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a schoolRecord entity.
     *
     * @Route("/{id}", name="schoolrecord_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SchoolRecord $schoolRecord)
    {
        $form = $this->createDeleteForm($schoolRecord);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($schoolRecord);
            $em->flush();
        }

        return $this->redirectToRoute('schoolrecord_index');
    }

    /**
     * Creates a form to delete a schoolRecord entity.
     *
     * @param SchoolRecord $schoolRecord The schoolRecord entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SchoolRecord $schoolRecord)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('schoolrecord_delete', array('id' => $schoolRecord->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
