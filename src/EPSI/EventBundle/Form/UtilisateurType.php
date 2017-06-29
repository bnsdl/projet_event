<?php

namespace EPSI\EventBundle\Form;

use EPSI\EventBundle\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
//            ->add('sexe', ChoiceType::class, array(
//                "choices" => array(
//                    "M" => "M",
//                    "F" => "F"
//                ),
//                "expanded" => true,
//                "multiple" => false
//            ))
//            ->add('date_naissance', DateType::class, array(
//                'format' => 'dd-MM-yyyy'
//            ))
            ->add('email', TextType::class)
            ->add('password', TextType::class)
            ->add('Inscription', SubmitType::class, array(
                'label' => 'Inscription'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Utilisateur::class,
        ));
    }
}