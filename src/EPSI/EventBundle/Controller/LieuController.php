<?php

namespace EPSI\EventBundle\Controller;

use DateTime;
use EPSI\EventBundle\Entity\Lieu;
use EPSI\EventBundle\Form\LieuType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LieuController extends Controller
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/lieu/new", name="epsi_event_addLieu")
     */
    public function newLieuAction(Request $request)
    {
        $lieuService = $this->get('lieuService');

        $lieu = new Lieu();
        $form = $this->createForm(LieuType::class, $lieu);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $lieu = $form->getData();
            $lieuService->saveLieu($lieu);

            return $this->redirectToRoute('epsi_event_homepage');
        }

        return $this->render('EPSIEventBundle:Lieu:newLieu.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/lieu", name="epsi_event_listLieu")
     */
    public function listLieuAction()
    {
        $lieuService = $this->get('lieuService');
        $allLieux = $lieuService->getLieux();

        return $this->render('EPSIEventBundle:Lieu:listLieu.html.twig', array(
                'lieux' => $allLieux
            )
        );
    }

    /**
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/lieu/{id}")
     */
    public function lieuAction(int $id)
    {
        $lieuService = $this->get('lieuService');
        $lieu = $lieuService->getLieuById($id);

        $lieu->increaseNbVisite();
        $lieuService->saveLieu($lieu);

        return $this->render('EPSIEventBundle:Lieu:lieu.html.twig', array(
                'lieu' => $lieu
            )
        );
    }
}