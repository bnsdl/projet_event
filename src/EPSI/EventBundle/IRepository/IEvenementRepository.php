<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:35
 */

namespace EPSI\EventBundle\IRepository;

use EPSI\EventBundle\Entity\Evenement;

interface IEvenementRepository
{

    public function GetAllEvent() : array;

    public function GetEventById(int $eventId) : Evenement;

    public function GetEventByName(string $nomEvent) : Evenement;
}