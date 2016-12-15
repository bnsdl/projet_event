<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:35
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\Lien;

interface ILienRepository
{

    public function GetAllLien() : array;

    public function GetLienById(int $lienId) : Lien;

    public function GetAllLienByArtisteId(int $artisteId) : array;

    public function GetAllLienByEventId(int $eventId) : array;
}