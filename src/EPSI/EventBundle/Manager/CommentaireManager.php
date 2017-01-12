<?php

namespace EPSI\EventBundle\Manager;

use Doctrine\ORM\EntityManager;

class CommentaireManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getCommentaireByEventId(int $eventId){
        return $this
            ->getRepository()
            ->GetAllCommentaireByEventId($eventId);
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Commentaire');
    }
}