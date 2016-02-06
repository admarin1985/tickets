<?php

namespace HatueySoft\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use HatueySoft\TicketBundle\Entity\ClasificadorEstado;
use HatueySoft\TicketBundle\Form\ClasificadorEstadoType;

/**
 * ClasificadorEstado controller.
 *
 * @Route("/clasificadorestado")
 */
class ClasificadorEstadoController extends Controller
{

    /**
     * Lists all ClasificadorEstado entities.
     *
     * @Route("/", name="clasificadorestado")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstado')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ClasificadorEstado entity.
     *
     * @Route("/", name="clasificadorestado_create")
     * @Method("POST")
     * @Template("HatueySoftTicketBundle:ClasificadorEstado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ClasificadorEstado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorestado_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ClasificadorEstado entity.
     *
     * @param ClasificadorEstado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClasificadorEstado $entity)
    {
        $form = $this->createForm(new ClasificadorEstadoType(), $entity, array(
            'action' => $this->generateUrl('clasificadorestado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClasificadorEstado entity.
     *
     * @Route("/new", name="clasificadorestado_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ClasificadorEstado();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ClasificadorEstado entity.
     *
     * @Route("/{id}", name="clasificadorestado_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEstado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ClasificadorEstado entity.
     *
     * @Route("/{id}/edit", name="clasificadorestado_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEstado entity.');
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
    * Creates a form to edit a ClasificadorEstado entity.
    *
    * @param ClasificadorEstado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ClasificadorEstado $entity)
    {
        $form = $this->createForm(new ClasificadorEstadoType(), $entity, array(
            'action' => $this->generateUrl('clasificadorestado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ClasificadorEstado entity.
     *
     * @Route("/{id}", name="clasificadorestado_update")
     * @Method("PUT")
     * @Template("HatueySoftTicketBundle:ClasificadorEstado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEstado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorestado_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ClasificadorEstado entity.
     *
     * @Route("/{id}", name="clasificadorestado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClasificadorEstado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasificadorestado'));
    }

    /**
     * Creates a form to delete a ClasificadorEstado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasificadorestado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
