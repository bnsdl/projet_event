<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/05/2017
 * Time: 09:19
 */

namespace EPSI\EventBundle\Controller;


use EPSI\EventBundle\Entity\Utilisateur;
use EPSI\EventBundle\Form\UtilisateurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
//        $authenticationUtils = $this->get('security.authentication_utils');
//
//        $error = $authenticationUtils->getLastAuthenticationError();
//
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render('EPSIEventBundle:Security:login.html.twig', array(
//            'last_username' => $lastUsername,
//            'error'         => $error,
//        ));
        $userService = $this->get('userService');
        $user = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
//
            $userService->saveUser($user);
            return $this->render('EPSIEventBundle:Home:index.html.twig');
        }


        return $this->render('EPSIEventBundle:Security:login.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}