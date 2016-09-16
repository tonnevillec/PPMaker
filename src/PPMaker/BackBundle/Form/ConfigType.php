<?php

namespace PPMaker\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ->add('bundleName')
            ->add('bundleIcon')
            ->add('bundleFront')
            ->add('bundleBack')
            ->add('bundleActif', CheckboxType::class, array('required' => false))
            ->add('bundleNavOrder')
            ->add('save', SubmitType::class);
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
