<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:35
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\Genre;

interface IGenreRepository
{

    public function GetGenreById(int $genreId) : Genre;

    public function GetGenreByName(string $name) : Genre;

    public function GetAll() : array;
}