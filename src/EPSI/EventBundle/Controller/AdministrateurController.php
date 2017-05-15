<?php

namespace EPSI\EventBundle\Controller;

use EPSI\EventBundle\Entity\Administrateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

//    /**
//     * @return \Symfony\Component\HttpFoundation\Response
//     * @Route("/mdp", name="epsi_event_admin_mdp")
//     */
//    public function newAdminAction(Request $request)
//    {
//        $adminSrv = $this->get('adminservice');
//
//        $admin = $adminSrv->getAdminById(1);
//
//        $plainPassword = 'admin';
//        $encoder = $this->container->get('security.password_encoder');
//        $encoded = $encoder->encodePassword($admin, $plainPassword);
//
//        $admin->setPassword($encoded);
//        $adminSrv->saveAdmin($admin);
//
//        return $this->render('EPSIEventBundle:Home:index.html.twig');
//    }

}