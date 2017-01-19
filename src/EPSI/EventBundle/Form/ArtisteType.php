<?php

namespace EPSI\EventBundle\Form;

use EPSI\EventBundle\Entity\Artiste;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ArtisteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('nomArtiste', TextType::class)
            ->add('descriptionArtiste', TextType::class)
            ->add('Sauvegarder', SubmitType::class, array('label' => 'Ajout artiste'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Artiste::class,
        ));
    }

}