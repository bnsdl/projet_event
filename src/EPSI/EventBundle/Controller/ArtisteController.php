<?php

namespace EPSI\EventBundle\Controller;


use EPSI\EventBundle\Entity\Artiste;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ArtisteController extends Controller
{

    public function newArtisteAction(Request $request)
    {
        $artisteSrv = $this->get('artisteService');

        $artiste = new Artiste();
        $artiste->setNbVisiteArtiste(0);
        $form= $this->createFormBuilder($artiste)
            ->add('nomArtiste', TextType::class)
            ->add('descriptionArtiste', TextType::class)
            ->add('Sauvegarder', SubmitType::class, array('label' => 'Ajout artiste'))
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $artiste = $form->getData();
            $artisteSrv->saveArtiste($artiste);

            return $this->redirectToRoute('epsi_event_homepage');
        }

        return $this->render('EPSIEventBundle:Artiste:newArtiste.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    public function listArtisteAction()
    {

        $artService = $this->get('artisteService');
        $allArtiste = $artService->getArtistes();

        return $this->render('EPSIEventBundle:Artiste:listArtiste.html.twig', array(
                'artistes' => $allArtiste
            )
        );
    }

    public function artisteAction(int $id)
    {
        $artService = $this->get('artisteService');
        $artiste = $artService->getArtisteById($id);

        $artiste->setNbVisiteArtiste($artiste->getNbVisiteArtiste()+1);
        $artService->saveArtiste($artiste);

        return $this->render('EPSIEventBundle:Artiste:artiste.html.twig', array(
                'artiste' => $artiste
            )
        );
    }

}