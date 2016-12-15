<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:20
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Genre;
use EPSI\EventBundle\IRepository\IGenreRepository;

class GenreRepository extends EntityRepository implements IGenreRepository
{

    public function GetGenreById(int $genreId) : Genre
    {
        // TODO: Implement GetGenreById() method.
    }

    public function GetGenreByName(string $name) : Genre
    {
        // TODO: Implement GetGenreByName() method.
    }

    public function GetAll() : array
    {
        // TODO: Implement GetAll() method.
    }
}