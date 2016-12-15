<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:20
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Evenement;
use EPSI\EventBundle\IRepository\IEvenementRepository;

class EvenementRepository extends EntityRepository implements IEvenementRepository
{

    public function GetAllEvent() : array
    {
        // TODO: Implement GetAllEvent() method.
    }

    public function GetEventById(int $eventId) : Evenement
    {
        // TODO: Implement GetEventById() method.
    }

    public function GetEventByName(string $nomEvent) : Evenement
    {
        // TODO: Implement GetEventByName() method.
    }
}