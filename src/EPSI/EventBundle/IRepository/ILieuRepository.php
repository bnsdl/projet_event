<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:36
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\Lieu;

interface ILieuRepository
{

    public function GetAllLieu() : array;

    public function GetLieuById(int $lieuId) : Lieu;

    public function GetAllLieuByVille(string $ville) : array;

    public function GetLieuByName(string $nomLieu) : Lieu;

}