<?php

namespace HatueySoft\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('nombreCorto')
            ->add('direccion')
            ->add('clientePrincipal')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HatueySoft\TicketBundle\Entity\Empresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hatueysoft_ticketbundle_empresa';
    }
}
