<?php

namespace Tobacco\PatentsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PatentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('patent_number');
        $builder->add('title');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Tobacco\PatentsBundle\Model\Patent',
        );
    }

    public function getName()
    {
        return 'patent';
    }
}
