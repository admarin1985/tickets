<?php

namespace HatueySoft\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClasificadorEstadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HatueySoft\TicketBundle\Entity\ClasificadorEstado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hatueysoft_ticketbundle_clasificadorestado';
    }
}
