<?php

namespace EPSI\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EPSI\EventBundle\Entity\Lieu;

class LieuRepository extends EntityRepository
{

    public function GetAllLieux() : array
    {
        return $this
            ->createQueryBuilder('lieu')
            ->getQuery()
            ->getResult();
    }

    public function GetLieuById(int $lieuId) : Lieu
    {
        $qb = $this->createQueryBuilder('lieu')
            ->where('lieu.idLieu = :id')
            ->setParameter('id', $lieuId)
        ;
        $lieu = $qb->getQuery()->getOneOrNullResult();

        return (null === $lieu) ? new Lieu() : $lieu;    }

    public function GetAllLieuxByVille(string $ville) : array
    {
        // TODO: Implement GetAllLieuByVille() method.
    }

    public function GetLieuByName(string $nomLieu) : Lieu
    {
        // TODO: Implement GetLieuByName() method.
    }
}