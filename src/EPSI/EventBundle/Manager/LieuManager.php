<?php

namespace EPSI\EventBundle\Manager;

use Doctrine\ORM\EntityManager;
use EPSI\EventBundle\Entity\Lieu;

class LieuManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getLieux()
    {
        return $this
            ->getRepository()
            ->GetAllLieux();
    }

    public function getLieuById(int $id){
        return $this
            ->getRepository()
            ->GetLieuById($id);
    }

    public function saveLieu(Lieu $lieu)
    {
        $this->persistAndFlush($lieu);
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Lieu');
    }
}