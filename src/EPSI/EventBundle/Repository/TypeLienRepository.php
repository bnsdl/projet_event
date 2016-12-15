<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:21
 */

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\TypeLien;
use EPSI\EventBundle\IRepository\ITypeLienRepository;


class TypeLienRepository extends EntityRepository implements ITypeLienRepository
{

    public function GetAllTypeLien() : array
    {
        // TODO: Implement GetAllTypeLien() method.
    }

    public function GetTypeLienById(int $typeLienId) : TypeLien
    {
        // TODO: Implement GetTypeLienById() method.
    }
}