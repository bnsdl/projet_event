<?php

namespace EPSI\EventBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    /**
     * @Route("/", name="epsi_event_homepage")
     */
    public function indexAction()
    {
        return $this->render('EPSIEventBundle:Home:index.html.twig');
    }
}
