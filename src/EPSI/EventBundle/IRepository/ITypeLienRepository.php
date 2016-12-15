<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:36
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\TypeLien;

interface ITypeLienRepository
{

    public function GetAllTypeLien() : array;

    public function GetTypeLienById(int $typeLienId) : TypeLien;

}