<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:32
 */

namespace EPSI\EventBundle\IRepository;

use EPSI\EventBundle\Entity\Administrateur;

interface IAdministrateurRepository
{
    public function GetAll() : array ;

    public function GetById(int $adminId) : Administrateur ;

    public function GetByName(string $username) : Administrateur;

    public function Update(int $adminId);



}