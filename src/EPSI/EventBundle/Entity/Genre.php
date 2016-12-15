<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="GENRE")
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_genre", type="string", length=200, nullable=true)
     */
    private $nomGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_genre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EPSI\EventBundle\Entity\Evenement", inversedBy="idGenre")
     * @ORM\JoinTable(name="posseder",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_genre", referencedColumnName="id_genre")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     *   }
     * )
     */
    private $idEvenement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEvenement = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomGenre
     *
     * @param string $nomGenre
     *
     * @return Genre
     */
    public function setNomGenre($nomGenre)
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    /**
     * Get nomGenre
     *
     * @return string
     */
    public function getNomGenre()
    {
        return $this->nomGenre;
    }

    /**
     * Get idGenre
     *
     * @return integer
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Add idEvenement
     *
     * @param \EPSI\EventBundle\Entity\Evenement $idEvenement
     *
     * @return Genre
     */
    public function addIdEvenement(\EPSI\EventBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement[] = $idEvenement;

        return $this;
    }

    /**
     * Remove idEvenement
     *
     * @param \EPSI\EventBundle\Entity\Evenement $idEvenement
     */
    public function removeIdEvenement(\EPSI\EventBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement->removeElement($idEvenement);
    }

    /**
     * Get idEvenement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }
}
