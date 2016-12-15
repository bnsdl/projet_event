<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:36
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\SousGenre;

interface ISousGenreRepository
{

    public function GetAllSousGenre() : array;

    public function GetSousGenreById(int $sousGenreId) : SousGenre;


}