<?php

namespace HatueySoft\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use HatueySoft\TicketBundle\Entity\ClasificadorEstadoProyecto;
use HatueySoft\TicketBundle\Form\ClasificadorEstadoProyectoType;

/**
 * ClasificadorEstadoProyecto controller.
 *
 * @Route("/clasificadorestadoproyecto")
 */
class ClasificadorEstadoProyectoController extends Controller
{

    /**
     * Lists all ClasificadorEstadoProyecto entities.
     *
     * @Route("/", name="clasificadorestadoproyecto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstadoProyecto')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ClasificadorEstadoProyecto entity.
     *
     * @Route("/", name="clasificadorestadoproyecto_create")
     * @Method("POST")
     * @Template("HatueySoftTicketBundle:ClasificadorEstadoProyecto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ClasificadorEstadoProyecto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorestadoproyecto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ClasificadorEstadoProyecto entity.
     *
     * @param ClasificadorEstadoProyecto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClasificadorEstadoProyecto $entity)
    {
        $form = $this->createForm(new ClasificadorEstadoProyectoType(), $entity, array(
            'action' => $this->generateUrl('clasificadorestadoproyecto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClasificadorEstadoProyecto entity.
     *
     * @Route("/new", name="clasificadorestadoproyecto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ClasificadorEstadoProyecto();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ClasificadorEstadoProyecto entity.
     *
     * @Route("/{id}", name="clasificadorestadoproyecto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstadoProyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEstadoProyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ClasificadorEstadoProyecto entity.
     *
     * @Route("/{id}/edit", name="clasificadorestadoproyecto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstadoProyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEstadoProyecto entity.');
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
    * Creates a form to edit a ClasificadorEstadoProyecto entity.
    *
    * @param ClasificadorEstadoProyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ClasificadorEstadoProyecto $entity)
    {
        $form = $this->createForm(new ClasificadorEstadoProyectoType(), $entity, array(
            'action' => $this->generateUrl('clasificadorestadoproyecto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ClasificadorEstadoProyecto entity.
     *
     * @Route("/{id}", name="clasificadorestadoproyecto_update")
     * @Method("PUT")
     * @Template("HatueySoftTicketBundle:ClasificadorEstadoProyecto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstadoProyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEstadoProyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadorestadoproyecto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ClasificadorEstadoProyecto entity.
     *
     * @Route("/{id}", name="clasificadorestadoproyecto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEstadoProyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClasificadorEstadoProyecto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasificadorestadoproyecto'));
    }

    /**
     * Creates a form to delete a ClasificadorEstadoProyecto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasificadorestadoproyecto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
