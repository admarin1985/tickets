<?php

namespace HatueySoft\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use HatueySoft\TicketBundle\Entity\ClasificadorEtapa;
use HatueySoft\TicketBundle\Form\ClasificadorEtapaType;

/**
 * ClasificadorEtapa controller.
 *
 * @Route("/clasificadoretapa")
 */
class ClasificadorEtapaController extends Controller
{

    /**
     * Lists all ClasificadorEtapa entities.
     *
     * @Route("/", name="clasificadoretapa")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HatueySoftTicketBundle:ClasificadorEtapa')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ClasificadorEtapa entity.
     *
     * @Route("/", name="clasificadoretapa_create")
     * @Method("POST")
     * @Template("HatueySoftTicketBundle:ClasificadorEtapa:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ClasificadorEtapa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadoretapa_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ClasificadorEtapa entity.
     *
     * @param ClasificadorEtapa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClasificadorEtapa $entity)
    {
        $form = $this->createForm(new ClasificadorEtapaType(), $entity, array(
            'action' => $this->generateUrl('clasificadoretapa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClasificadorEtapa entity.
     *
     * @Route("/new", name="clasificadoretapa_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ClasificadorEtapa();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ClasificadorEtapa entity.
     *
     * @Route("/{id}", name="clasificadoretapa_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEtapa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEtapa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ClasificadorEtapa entity.
     *
     * @Route("/{id}/edit", name="clasificadoretapa_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEtapa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEtapa entity.');
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
    * Creates a form to edit a ClasificadorEtapa entity.
    *
    * @param ClasificadorEtapa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ClasificadorEtapa $entity)
    {
        $form = $this->createForm(new ClasificadorEtapaType(), $entity, array(
            'action' => $this->generateUrl('clasificadoretapa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ClasificadorEtapa entity.
     *
     * @Route("/{id}", name="clasificadoretapa_update")
     * @Method("PUT")
     * @Template("HatueySoftTicketBundle:ClasificadorEtapa:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEtapa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClasificadorEtapa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasificadoretapa_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ClasificadorEtapa entity.
     *
     * @Route("/{id}", name="clasificadoretapa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HatueySoftTicketBundle:ClasificadorEtapa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClasificadorEtapa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasificadoretapa'));
    }

    /**
     * Creates a form to delete a ClasificadorEtapa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasificadoretapa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
