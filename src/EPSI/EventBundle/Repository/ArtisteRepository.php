<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:19
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Artiste;
use EPSI\EventBundle\Entity\Evenement;
//use EPSI\EventBundle\IRepository\IArtisteRepository;


class ArtisteRepository extends EntityRepository
{
    public function GetAllArtiste() : array
    {
        return $this
            ->createQueryBuilder('article')
            ->getQuery()
            ->getResult();
    }

    public function GetArtisteById(int $artisteId) : Artiste
    {
        $qb = $this->createQueryBuilder('artiste')
            ->where('artiste.idArtiste = :id')
            ->setParameter('id', $artisteId)
        ;
        $artiste = $qb->getQuery()->getOneOrNullResult();

        return (null === $artiste) ? new Artiste() : $artiste;
    }

    public function GetArtisteByName(string $nomArtiste) : Artiste
    {
        $qb = $this->createQueryBuilder('artiste')
            ->where('artiste.nomArtiste = :nom')
            ->setParameter('nom', $nomArtiste)
        ;
        $artiste = $qb->getQuery()->getOneOrNullResult();

        return (null === $artiste) ? new Artiste() : $artiste;
    }

    public function GetAllArtistesByEventId(int $eventId) : array
    {
        // TODO: Implement GetAllArtistesByEventId() method.
    }

    public function GetEventByArtisteId(int $artisteId, $eventId) : Evenement
    {
        // TODO: Implement GetEventByArtisteId() method.
    }
}