<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:19
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Administrateur;
use EPSI\EventBundle\IRepository\IAdministrateurRepository;

class AdministrateurRepository extends EntityRepository implements IAdministrateurRepository
{

    public function GetById(int $adminId) : Administrateur
    {
        // TODO: Implement GetById() method.
    }

    public function GetByName(string $username) : Administrateur
    {
        // TODO: Implement GetByName() method.
    }

    public function Update(int $adminId)
    {
        // TODO: Implement Update() method.
    }

    public function GetAllAdministrateur() : array
    {
        // TODO: Implement GetAllAdministrateur() method.
    }
}