<?php

namespace EPSI\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EPSIEventBundle:Default:index.html.twig');
    }
}
