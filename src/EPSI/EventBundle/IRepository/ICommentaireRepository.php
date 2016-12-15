<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 15:34
 */

namespace EPSI\EventBundle\IRepository;


use EPSI\EventBundle\Entity\Commentaire;

interface ICommentaireRepository
{

    public function GetCommentaireById(int $commentaireId) : Commentaire;

    public function GetAllCommentaireByEventId(int $eventId) : array;

    public function AddCommentaire(Commentaire $commentaire);

}