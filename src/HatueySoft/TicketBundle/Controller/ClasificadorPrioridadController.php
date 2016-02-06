<?php

namespace HatueySoft\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use HatueySoft\TicketBundle\Entity\ClasificadorPrioridad;
use HatueySoft\TicketBundle\Form\ClasificadorPrioridadType;

/**
 * ClasificadorPrioridad controller.
 *
 * @Route("/clasificadorprioridad")
 */
class ClasificadorPrioridadController extends Controller
{

    /**
     * Lists all ClasificadorPrioridad entities.
     *
     * @Route("/", name="clasificadorprioridad")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HatueySoftTicketBundle:ClasificadorPrioridad')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ClasificadorPrioridad entity.
     *
     * @Route("/", name="clasificadorprioridad_create")
     * @Method("POST")
     * @Template("HatueySoftTicketBundle:ClasificadorPrioridad:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ClasificadorPrioridad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorprioridad_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ClasificadorPrioridad entity.
     *
     * @param ClasificadorPrioridad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClasificadorPrioridad $entity)
    {
        $form = $this->createForm(new ClasificadorPrioridadType(), $entity, array(
            'action' => $this->generateUrl('clasificadorprioridad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClasificadorPrioridad entity.
     *
     * @Route("/new", name="clasificadorprioridad_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ClasificadorPrioridad();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ClasificadorPrioridad entity.
     *
     * @Route("/{id}", name="clasificadorprioridad_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorPrioridad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorPrioridad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ClasificadorPrioridad entity.
     *
     * @Route("/{id}/edit", name="clasificadorprioridad_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorPrioridad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorPrioridad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ClasificadorPrioridad entity.
    *
    * @param ClasificadorPrioridad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ClasificadorPrioridad $entity)
    {
        $form = $this->createForm(new ClasificadorPrioridadType(), $entity, array(
            'action' => $this->generateUrl('clasificadorprioridad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ClasificadorPrioridad entity.
     *
     * @Route("/{id}", name="clasificadorprioridad_update")
     * @Method("PUT")
     * @Template("HatueySoftTicketBundle:ClasificadorPrioridad:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorPrioridad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorPrioridad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorprioridad_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ClasificadorPrioridad entity.
     *
     * @Route("/{id}", name="clasificadorprioridad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorPrioridad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClasificadorPrioridad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasificadorprioridad'));
    }

    /**
     * Creates a form to delete a ClasificadorPrioridad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasificadorprioridad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
