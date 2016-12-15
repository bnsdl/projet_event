<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:34
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\Artiste;
use EPSI\EventBundle\Entity\Evenement;

interface IArtisteRepository
{

    public function GetAll() : array;

    public function GetById(int $artisteId) : Artiste;

    public function GetByName(string $nomArtiste) : Artiste;

    public function GetAllEvent(int $artisteId) : array;

    public function GetEventById(int $artisteId, $eventId) : Evenement;



}