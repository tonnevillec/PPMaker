<?php

namespace PPMaker\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bundleName',     'text')
            ->add('bundleIcon',     'text')
            ->add('bundleFront',    'text')
            ->add('bundleBack',     'text')
            ->add('bundleActif',    'checkbox', array('required' => false))
            ->add('bundleNavOrder', 'text')
            ->add('save',           'submit');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'PPMaker\BackBundle\Entity\Config'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppmaker_backbundle_config';
    }
}
