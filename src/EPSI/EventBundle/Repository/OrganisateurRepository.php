<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:21
 */


namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Organisateur;
use EPSI\EventBundle\IRepository\IOrganisateurRepository;

class OrganisateurRepository extends EntityRepository implements IOrganisateurRepository
{

    public function GetAllOrganisateur() : array
    {
        // TODO: Implement GetAllOrganisateur() method.
    }

    public function GetOrganisateurById(int $organisateurId) : Organisateur
    {
        // TODO: Implement GetOrganisateurById() method.
    }

    public function GetOrganisateurByEventId(int $eventId)
    {
        // TODO: Implement GetOrganisateurByEventId() method.
    }
}