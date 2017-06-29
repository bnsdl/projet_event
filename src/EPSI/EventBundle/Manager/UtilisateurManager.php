<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 29/06/2017
 * Time: 15:02
 */

namespace EPSI\EventBundle\Manager;


use Doctrine\ORM\EntityManager;
use EPSI\EventBundle\Entity\Utilisateur;

class UtilisateurManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getUsers()
    {
        return $this
            ->getRepository()
            ->GetAllUsers();
    }

    public function getUserById(int $id){
        return $this
            ->getRepository()
            ->GetById($id);
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Utilisateur');
    }

    public function saveUser(Utilisateur $user)
    {
        $this->persistAndFlush($user);
    }
}