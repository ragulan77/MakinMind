<?php

namespace MakinMind\ResourceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ResourceType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('file', 'file')
        ;
    }

    public function getName()
    {
        return 'makinmind_resourcebundle_resourcetype';
    }
}
