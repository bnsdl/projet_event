<?php


namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Evenement;

class EvenementRepository extends EntityRepository
{

    public function GetAllEvents() : array
    {
        return $this
            ->createQueryBuilder('evenement')
            ->getQuery()
            ->getResult();
    }

    public function GetEventById(int $eventId) : Evenement
    {
        $qb = $this->createQueryBuilder('evenement')
            ->where('evenement.idEvenement = :id')
            ->setParameter('id', $eventId)
        ;
        $event = $qb->getQuery()->getOneOrNullResult();

        return (null === $event) ? new Evenement() : $event;
    }

    public function GetEventByName(string $nomEvent) : Evenement
    {
        // TODO: Implement GetEventByName() method.
    }
}