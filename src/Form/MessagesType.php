<?php

namespace App\Form;

use App\Entity\Messages;
use App\Entity\Utilisateurs;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

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
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class MessagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('titre', TextType::class, [
            'label' => 'Le titre du message !',
            'required' => false
        ])
        ->add('pays', TextType::class, [
            'label' => 'Le pays de votre message :',
            'required' => false
        ])
        ->add('status', TextType::class, [
            'label' => 'Le status de votre message :',
            'required' => false
        ])
        
        ->add('createdAt', BirthdayType::class, [
            'label' => 'Date cr"ation du message :',
            'required' => false,
            'widget' => 'single_text'
        ])

        ;
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}
