<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Artiste
 *
 * @ORM\Table(name="ARTISTE")
 * @ORM\Entity(repositoryClass="EPSI\EventBundle\Repository\ArtisteRepository")
 */
class Artiste
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_artiste", type="string", length=50, nullable=true)
     */
    private $nomArtiste;

    /**
     * @var string
     *
     * @ORM\Column(name="description_artiste", type="string", length=5000, nullable=true)
     */
    private $descriptionArtiste;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_visite_artiste", type="integer", nullable=true)
     */
    private $nbVisiteArtiste;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_image", type="string", length=250, nullable=true)
     */
    private $lienImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_artiste", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArtiste;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EPSI\EventBundle\Entity\Evenement", mappedBy="idArtiste")
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
     * Set nomArtiste
     *
     * @param string $nomArtiste
     *
     * @return Artiste
     */
    public function setNomArtiste($nomArtiste)
    {
        $this->nomArtiste = $nomArtiste;

        return $this;
    }

    /**
     * Get nomArtiste
     *
     * @return string
     */
    public function getNomArtiste()
    {
        return $this->nomArtiste;
    }

    /**
     * Set descriptionArtiste
     *
     * @param string $descriptionArtiste
     *
     * @return Artiste
     */
    public function setDescriptionArtiste($descriptionArtiste)
    {
        $this->descriptionArtiste = $descriptionArtiste;

        return $this;
    }

    /**
     * Get descriptionArtiste
     *
     * @return string
     */
    public function getDescriptionArtiste()
    {
        return $this->descriptionArtiste;
    }

    /**
     * Set nbVisiteArtiste
     *
     * @param integer $nbVisiteArtiste
     *
     * @return Artiste
     */
    public function setNbVisiteArtiste($nbVisiteArtiste)
    {
        $this->nbVisiteArtiste = $nbVisiteArtiste;

        return $this;
    }

    /**
     * Get nbVisiteArtiste
     *
     * @return integer
     */
    public function getNbVisiteArtiste()
    {
        return $this->nbVisiteArtiste;
    }

    /**
     * Set lienImage
     *
     * @param string $lienImage
     *
     * @return Artiste
     */
    public function setLienImage($lienImage)
    {
        $this->lienImage = $lienImage;

        return $this;
    }

    /**
     * Get lienImage
     *
     * @return string
     */
    public function getLienImage()
    {
        return $this->lienImage;
    }

    /**
     * Get idArtiste
     *
     * @return integer
     */
    public function getIdArtiste()
    {
        return $this->idArtiste;
    }

    /**
     * Add idEvenement
     *
     * @param \EPSI\EventBundle\Entity\Evenement $idEvenement
     *
     * @return Artiste
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
