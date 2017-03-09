<?php

namespace EPSI\EventBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin", name="epsi_event_admin")
     */
    public function indexAction()
    {
        return $this->render('EPSIEventBundle:Admin:index.html.twig');
    }

}