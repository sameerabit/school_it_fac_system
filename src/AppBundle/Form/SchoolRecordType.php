<?php

namespace AppBundle\Form;

use AppBundle\Entity\District;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolRecordType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('schoolName')
            ->add('phoneNumber',TextType::class)
            ->add('address',TextareaType::class, array(
                'attr' => array('class' => 'tinymce'),
            ))
            ->add('district', EntityType::class, array(
                'class' => District::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('d')
                        ->orderBy('d.name', 'ASC');
                },
                'choice_label' => 'name',
            ))
            ->add('gramaNiladhari',TextType::class,array('required' => false))
            ->add('divisionalSecretariat')
            ->add('haveElectricity')
            ->add('numberOfTeacher')
            ->add('numberOfComputer')
            ->add('numberOfWorking')
            ->add('lackComputerParts',TextareaType::class, array(
                'attr' => array('class' => 'tinymce'),
                'required' => false
            ))
            ->add('noOfStudents')
            ->add('proposals',TextareaType::class,array('required' => false))
            ->add('providedBy',TextType::class,array('required' => false));
    }

    /**
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
