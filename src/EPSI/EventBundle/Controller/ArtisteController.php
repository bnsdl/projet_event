<?php

namespace EPSI\EventBundle\Controller;


use DateTime;
use EPSI\EventBundle\Form\ArtisteType;
use EPSI\EventBundle\Entity\Artiste;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtisteController extends Controller
{

    /**
     * @Route("/artiste/new", name="epsi_event_addArtiste")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newArtisteAction(Request $request)
    {
        $artisteSrv = $this->get('artisteService');

        $artiste = new Artiste();

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

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/artiste", name="epsi_event_listArtiste")
     */
    public function listArtisteAction()
    {
        $artService = $this->get('artisteService');
        $allArtiste = $artService->getArtistes();

        return $this->render('EPSIEventBundle:Artiste:listArtiste.html.twig', array(
                'artistes' => $allArtiste
            )
        );
    }

    /**
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/artiste/{id}")
     */
    public function artisteAction(int $id)
    {
        $artService = $this->get('artisteService');
        $artiste = $artService->getArtisteById($id);

        $artiste->increaseNbVisite();
        $artService->saveArtiste($artiste);

        return $this->render('EPSIEventBundle:Artiste:artiste.html.twig', array(
                'artiste' => $artiste
            )
        );
    }

}