<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeLien
 *
 * @ORM\Table(name="TYPE_LIEN")
 * @ORM\Entity
 */
class TypeLien
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_lien", type="string", length=100, nullable=true)
     */
    private $nomTypeLien;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_lien", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeLien;



    /**
     * Set nomTypeLien
     *
     * @param string $nomTypeLien
     *
     * @return TypeLien
     */
    public function setNomTypeLien($nomTypeLien)
    {
        $this->nomTypeLien = $nomTypeLien;

        return $this;
    }

    /**
     * Get nomTypeLien
     *
     * @return string
     */
    public function getNomTypeLien()
    {
        return $this->nomTypeLien;
    }

    /**
     * Get idTypeLien
     *
     * @return integer
     */
    public function getIdTypeLien()
    {
        return $this->idTypeLien;
    }
}
