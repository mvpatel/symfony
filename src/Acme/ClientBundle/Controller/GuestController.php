<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\ClientBundle\Entity\Guest;
use Acme\ClientBundle\Form\GuestType;

/**
 * Guest controller.
 *
 */
class GuestController extends Controller
{

    /**
     * Lists all Guest entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeClientBundle:Guest')->findAll();

        return $this->render('AcmeClientBundle:Guest:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Guest entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Guest();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('guest_show', array('id' => $entity->getId())));
        }

        return $this->render('AcmeClientBundle:Guest:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Guest entity.
     *
     * @param Guest $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Guest $entity)
    {
        $form = $this->createForm(new GuestType(), $entity, array(
            'action' => $this->generateUrl('guest_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Guest entity.
     *
     */
    public function newAction()
    {
        $entity = new Guest();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcmeClientBundle:Guest:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Guest entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeClientBundle:Guest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guest entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeClientBundle:Guest:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Guest entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeClientBundle:Guest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guest entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeClientBundle:Guest:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Guest entity.
    *
    * @param Guest $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Guest $entity)
    {
        $form = $this->createForm(new GuestType(), $entity, array(
            'action' => $this->generateUrl('guest_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Guest entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeClientBundle:Guest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guest entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('guest_edit', array('id' => $id)));
        }

        return $this->render('AcmeClientBundle:Guest:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Guest entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeClientBundle:Guest')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Guest entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('guest'));
    }

    /**
     * Creates a form to delete a Guest entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('guest_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
