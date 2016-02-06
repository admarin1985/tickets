<?php

namespace HatueySoft\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tema')
            ->add('descripcion')
            ->add('fecha')
            ->add('clasificador')
            ->add('prioridad')
            ->add('estado')
            ->add('proyecto')
            ->add('usuario')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HatueySoft\TicketBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hatueysoft_ticketbundle_ticket';
    }
}
