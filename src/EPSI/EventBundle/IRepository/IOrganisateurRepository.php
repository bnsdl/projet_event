<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:36
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\Organisateur;

interface IOrganisateurRepository
{
    public function GetAllOrganisateur() : array;

    public function GetOrganisateurById(int $organisateurId) : Organisateur;

    public function GetOrganisateurByEventId(int $eventId);

}