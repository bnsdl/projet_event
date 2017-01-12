<?php

namespace EPSI\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction()
    {

        $artService = $this->get('artisteService');
        $allArtiste = $artService->getArtistes();
        $artisteId = $artService->getArtisteById(2);

        return $this->render('EPSIEventBundle:Default:index.html.twig', array(
                'artistes' => $allArtiste,
                'artisteId' => $artisteId,
//                'artisteNom' => $artisteNom
            )
        );
    }
}
