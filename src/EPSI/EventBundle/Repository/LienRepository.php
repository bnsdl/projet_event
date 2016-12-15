<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:20
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Lien;
use EPSI\EventBundle\IRepository\ILienRepository;

class LienRepository extends EntityRepository implements ILienRepository
{

    public function GetAllLien() : array
    {
        // TODO: Implement GetAllLien() method.
    }

    public function GetLienById(int $lienId) : Lien
    {
        // TODO: Implement GetLienById() method.
    }

    public function GetAllLienByArtisteId(int $artisteId) : array
    {
        // TODO: Implement GetAllLienByArtisteId() method.
    }

    public function GetAllLienByEventId(int $eventId) : array
    {
        // TODO: Implement GetAllLienByEventId() method.
    }
}