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
use EPSI\EventBundle\IRepository\IArtisteRepository;

class ArtisteRepository extends EntityRepository implements IArtisteRepository
{

    public function GetAll() : array
    {
        // TODO: Implement GetAll() method.
    }

    public function GetById(int $artisteId) : Artiste
    {
        // TODO: Implement GetById() method.
    }

    public function GetByName(string $nomArtiste) : Artiste
    {
        // TODO: Implement GetByName() method.
    }

    public function GetAllEvent(int $artisteId) : array
    {
        // TODO: Implement GetAllEvent() method.
    }

    public function GetEventById(int $artisteId, $eventId) : Evenement
    {
        // TODO: Implement GetEventById() method.
    }
}