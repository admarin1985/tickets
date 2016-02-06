<?php

namespace HatueySoft\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use HatueySoft\TicketBundle\Entity\ClasificadorTicket;
use HatueySoft\TicketBundle\Form\ClasificadorTicketType;

/**
 * ClasificadorTicket controller.
 *
 * @Route("/clasificadorticket")
 */
class ClasificadorTicketController extends Controller
{

    /**
     * Lists all ClasificadorTicket entities.
     *
     * @Route("/", name="clasificadorticket")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HatueySoftTicketBundle:ClasificadorTicket')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ClasificadorTicket entity.
     *
     * @Route("/", name="clasificadorticket_create")
     * @Method("POST")
     * @Template("HatueySoftTicketBundle:ClasificadorTicket:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ClasificadorTicket();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorticket_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ClasificadorTicket entity.
     *
     * @param ClasificadorTicket $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClasificadorTicket $entity)
    {
        $form = $this->createForm(new ClasificadorTicketType(), $entity, array(
            'action' => $this->generateUrl('clasificadorticket_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClasificadorTicket entity.
     *
     * @Route("/new", name="clasificadorticket_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ClasificadorTicket();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ClasificadorTicket entity.
     *
     * @Route("/{id}", name="clasificadorticket_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorTicket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorTicket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ClasificadorTicket entity.
     *
     * @Route("/{id}/edit", name="clasificadorticket_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorTicket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorTicket entity.');
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
    * Creates a form to edit a ClasificadorTicket entity.
    *
    * @param ClasificadorTicket $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ClasificadorTicket $entity)
    {
        $form = $this->createForm(new ClasificadorTicketType(), $entity, array(
            'action' => $this->generateUrl('clasificadorticket_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ClasificadorTicket entity.
     *
     * @Route("/{id}", name="clasificadorticket_update")
     * @Method("PUT")
     * @Template("HatueySoftTicketBundle:ClasificadorTicket:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorTicket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorTicket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorticket_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ClasificadorTicket entity.
     *
     * @Route("/{id}", name="clasificadorticket_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorTicket')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClasificadorTicket entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasificadorticket'));
    }

    /**
     * Creates a form to delete a ClasificadorTicket entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasificadorticket_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
