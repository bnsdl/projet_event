<?php

namespace EPSI\EventBundle\Controller;


use EPSI\EventBundle\Entity\Artiste;
use EPSI\EventBundle\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{

    public function newEventAction(Request $request)
    {

        $artiste = new Artiste();
        $form= $this->createFormBuilder($artiste)
            ->add('nomArtiste', TextType::class)
            ->add('descriptionArtiste', TextType::class)
            ->add('Sauvegarder', SubmitType::class, array('label' => 'Ajout artiste'))
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $artiste = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($artiste);
            $em->flush();

            return $this->redirectToRoute('epsi_event_homepage');
        }

        return $this->render('EPSIEventBundle:Event:newEvent.html.twig', array(
            'form' => $form->createView(),
        ));

    }

}