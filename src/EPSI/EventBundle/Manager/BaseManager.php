<?php
/**
 * Created by PhpStorm.
 * User: benoitdelboe
 * Date: 17/12/2016
 * Time: 13:10
 */

namespace EPSI\EventBundle\Manager;


abstract class BaseManager
{
    protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

}