<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddFilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType:: class)
            ->add('duration', TextType:: class)
            ->add('releaseDate', DateType:: class)
            ->add('description', TextareaType:: class)
            ->add('image', FileType::class, array('label' => 'Film Picture'))
            ->add('video', FileType::class, array('label' => 'Film video'))
            ->add('save', SubmitType:: class, ['label' => 'Enregistrer']);
    }
}