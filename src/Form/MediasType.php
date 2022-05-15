<?php

namespace App\Form;

use App\Entity\Medias;
//use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;



class MediasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('imageFile', FileType::class, [
            'label' => 'Uploader votre image :',
            'required' => true
        ])
        ->add('date', BirthdayType::class, [
            'label' => 'Date cr"ation du message :',
            'required' => false,
            'widget' => 'single_text'
        ])
        ->add('status', TextType::class, [
            'label' => 'Le status de votre message :',
            'required' => false
        ])
        ->add('categories', TextType::class, [
            'label' => 'La catégorie de votre message :',
            'required' => false
        ])


        ->add('contenu', TextareaType::class, [
        'label' => 'Le contenu de votre message :',
            'required' => false
        ])
        ->add('auteurs', TextType::class, [
            'label' => 'Le auteur de votre message :',
            'required' => false
        ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medias::class,
        ]);
    }
}
