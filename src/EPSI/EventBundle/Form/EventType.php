<?php

namespace EPSI\EventBundle\Form;

use EPSI\EventBundle\Entity\Evenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('nomEvenement', TextType::class)
            ->add('description', TextareaType::class)
//            ->add('idLieu', EntityType::class, array(
//                'class' => 'EPSIEventBundle:Lieu',
//                'label' => 'Lieu'
//            ))
            ->add('heureDebut', DateTimeType::class)
            ->add('heureFin', DateTimeType::class)
            ->add('prixEvenement', IntegerType::class)
            ->add('Sauvegarder', SubmitType::class, array(
                'label' => 'Ajout événement'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Evenement::class,
        ));
    }
}