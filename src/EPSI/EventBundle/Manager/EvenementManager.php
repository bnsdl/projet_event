<?php

namespace EPSI\EventBundle\Manager;

use Doctrine\ORM\EntityManager;
use EPSI\EventBundle\Entity\Evenement;

class EvenementManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEvents()
    {
        return $this
            ->getRepository()
            ->GetAllEvents();
    }

    public function getEventById(int $id){
        return $this
            ->getRepository()
            ->GetEventById($id);
    }

    public function saveEvent(Evenement $event)
    {
        $this->persistAndFlush($event);
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Evenement');
    }
}