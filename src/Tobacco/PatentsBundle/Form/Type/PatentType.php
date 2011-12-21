<?php

namespace Tobacco\PatentsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PatentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $dateOptions = array(
            'years' => range(1900, date('Y')),
            'empty_value' => array('year' => 'Year', 'month' => 'Month', 'day' => 'Day')
        );
        $builder->add('manufacturer');
        $builder->add('patent_number');
        $builder->add('patent_office_url', 'url');
        $builder->add('patent_date', 'date', $dateOptions);
        $builder->add('date_filed', 'date', $dateOptions);
        $builder->add('brand');
        $builder->add('title');
        $builder->add('application_number');
        $builder->add('inventor');
        $builder->add('assignee');
        $builder->add('title');
        $builder->add('google_url', 'url');
        $builder->add('terms');
        $builder->add('european_url', 'url');
        $builder->add('date_updated', 'date', $dateOptions);
        $builder->add('tags');
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
