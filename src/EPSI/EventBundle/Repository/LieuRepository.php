<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:20
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Lieu;
use EPSI\EventBundle\IRepository\ILieuRepository;

class LieuRepository extends EntityRepository implements ILieuRepository
{

    public function GetAllLieu() : array
    {
        // TODO: Implement GetAllLieu() method.
    }

    public function GetLieuById(int $lieuId) : Lieu
    {
        // TODO: Implement GetLieuById() method.
    }

    public function GetAllLieuByVille(string $ville) : array
    {
        // TODO: Implement GetAllLieuByVille() method.
    }

    public function GetLieuByName(string $nomLieu) : Lieu
    {
        // TODO: Implement GetLieuByName() method.
    }
}