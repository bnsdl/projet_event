<?php
/**
 * Created by IntelliJ IDEA.
 * User: benoitdelboe
 * Date: 12/01/2017
 * Time: 10:59
 */

namespace EPSI\EventBundle\Manager;


use Doctrine\ORM\EntityManager;

class GenreManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Genre');
    }
}