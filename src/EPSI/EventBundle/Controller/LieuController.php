<?php
/**
 * Created by IntelliJ IDEA.
 * User: benoitdelboe
 * Date: 24/01/2017
 * Time: 14:46
 */

namespace EPSI\EventBundle\Controller;

use DateTime;
use EPSI\EventBundle\Entity\Lieu;
use EPSI\EventBundle\Form\LieuType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LieuController extends Controller
{
    public function newLieuAction(Request $request)
    {
        $lieuService = $this->get('lieuService');

        $lieu = new Lieu();
        $lieu->setNbVisite(0);
        $lieu->setDateCreation(new DateTime());
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

    public function listLieuAction()
    {
        $lieuService = $this->get('lieuService');
        $allLieux = $lieuService->getLieux();

        return $this->render('EPSIEventBundle:Lieu:listLieu.html.twig', array(
                'lieux' => $allLieux
            )
        );
    }

    public function lieuAction(int $id)
    {
        $lieuService = $this->get('lieuService');
        $lieu = $lieuService->getLieuById($id);

        $lieu->setNbVisite($lieu->getNbVisite()+1);
        $lieuService->saveLieu($lieu);

        return $this->render('EPSIEventBundle:Lieu:lieu.html.twig', array(
                'lieu' => $lieu
            )
        );
    }
}