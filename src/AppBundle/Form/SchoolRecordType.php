<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolRecordType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('schoolName')->add('phoneNumber')->add('district')->add('gramaNiladhari')->add('divisionalSecretariat')->add('haveElectricity')->add('haveLab')->add('numberOfTeacher')->add('numberOfComputer')->add('numberOfWorking')->add('lackComputerParts')->add('noOfStudents')->add('langitude')->add('latitude')->add('proposals')->add('providedBy');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SchoolRecord'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_schoolrecord';
    }


}
