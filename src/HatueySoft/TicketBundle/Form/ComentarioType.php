<?php

namespace HatueySoft\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComentarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Comentario')
            ->add('fecha')
            ->add('ticket')
            ->add('usuario')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HatueySoft\TicketBundle\Entity\Comentario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hatueysoft_ticketbundle_comentario';
    }
}
