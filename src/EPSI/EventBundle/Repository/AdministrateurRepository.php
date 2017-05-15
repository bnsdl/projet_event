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

class AdministrateurRepository extends EntityRepository
{

    public function GetById(int $adminId) : Administrateur
    {
        $qb = $this->createQueryBuilder('administrateur')
            ->where('administrateur.idAdministrateur = :id')
            ->setParameter('id', $adminId)
        ;
        $admin = $qb->getQuery()->getOneOrNullResult();

        return (null === $admin) ? new Administrateur() : $admin;
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