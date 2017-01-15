<?php

namespace EPSI\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller
{

    public function indexAction()
    {
        return $this->render('EPSIEventBundle:Admin:index.html.twig');
    }

}