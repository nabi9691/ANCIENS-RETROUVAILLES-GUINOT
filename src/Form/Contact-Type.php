<?php

namespace App\Form;

use App\Entity\Contacts;
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
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('nom', TextType::class, [
            'label' => 'Le nom du contact !',
            'required' => false
        ])
        ->add('prenom', TextType::class, [
            'label' => 'Le Le prénom du contact :',
            'required' => false
        ])
        
        ->add('date', BirthdayType::class, [
            'label' => 'Date de naissance :',
            'required' => false,
            'widget' => 'single_text'
        ])
        ->add('civilite', TextType::class, [
            'label' => 'La civilité du contact :',
            'required' => true
        ])
        ->add('telephone', TextType::class, [
            'label' => 'Le numéro du téléphone du contact :',
            'required' => true
        ])
        ->add('email', TextType::class, [
            'label' => 'Le Email du contact :',
            'required' => true
        ])
        ->add('fax', TextType::class, [
            'label' => 'Fax du contact :',
            'required' => true
        ])
        ->add('adresse', TextType::class, [
            'label' => 'Adresse du contact :',
            'required' => true
        ])
        ->add('codePostal', TextType::class, [
            'label' => 'Le Code-Postal du contact :',
            'required' => true
        ])
        ->add('villes', TextType::class, [
            'label' => 'La ville du contact :',
            'required' => true
        ])
        ->add('departements', TextType::class, [
            'label' => 'Le département du contact :',
            'required' => true
        ])
        ->add('pays', TextType::class, [
            'label' => 'Le pays du contact :',
            'required' => true
        ])
        ->add('status', TextType::class, [
            'label' => 'Le status du contact :',
            'required' => true
        ])
        
        ;
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}
