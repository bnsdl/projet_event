<?php

namespace EPSI\EventBundle\Controller;


use DateTime;
use EPSI\EventBundle\Form\ArtisteType;
use EPSI\EventBundle\Entity\Artiste;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtisteController extends Controller
{

    public function newArtisteAction(Request $request)
    {
        $artisteSrv = $this->get('artisteService');

        $artiste = new Artiste();
        $artiste->setNbVisiteArtiste(0);
        $artiste->setDateCreation(new DateTime());
        $form = $this->createForm(ArtisteType::class, $artiste);

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