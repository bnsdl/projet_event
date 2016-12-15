<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:21
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\SousGenre;
use EPSI\EventBundle\IRepository\ISousGenreRepository;

class SousGenreRepository extends EntityRepository implements ISousGenreRepository
{

    public function GetAllSousGenre() : array
    {
        // TODO: Implement GetAllSousGenre() method.
    }

    public function GetSousGenreById(int $sousGenreId) : SousGenre
    {
        // TODO: Implement GetSousGenreById() method.
    }
}