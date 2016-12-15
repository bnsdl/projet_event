<?php

/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 15/12/2016
 * Time: 14:19
 */

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Commentaire;
use EPSI\EventBundle\IRepository\ICommentaireRepository;

class CommentaireRepository extends EntityRepository implements ICommentaireRepository
{

    public function GetCommentaireById(int $commentaireId) : Commentaire
    {
        // TODO: Implement GetCommentaireById() method.
    }

    public function GetAllCommentaireByEventId(int $eventId) : array
    {
        // TODO: Implement GetAllCommentaireByEventId() method.
    }

    public function AddCommentaire(Commentaire $commentaire)
    {
        // TODO: Implement AddCommentaire() method.
    }
}