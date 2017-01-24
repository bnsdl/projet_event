<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Lieu
 *
 * @ORM\Table(name="LIEU")
 * @ORM\Entity(repositoryClass="EPSI\EventBundle\Repository\LieuRepository")
 */
class Lieu
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_lieu", type="string", length=200, nullable=true)
     */
    private $nomLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=252, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=255, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=252, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_image", type="string", length=250, nullable=true)
     */
    private $lienImage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lieu", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_visite_lieu", type="integer", nullable=false)
     */
    private $nbVisite;

    /**
     * Set nomLieu
     *
     * @param string $nomLieu
     *
     * @return Lieu
     */
    public function setNomLieu($nomLieu)
    {
        $this->nomLieu = $nomLieu;

        return $this;
    }

    /**
     * Get nomLieu
     *
     * @return string
     */
    public function getNomLieu()
    {
        return $this->nomLieu;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Lieu
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Lieu
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Lieu
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Lieu
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set lienImage
     *
     * @param string $lienImage
     *
     * @return Lieu
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
     * Get idLieu
     *
     * @return integer
     */
    public function getIdLieu()
    {
        return $this->idLieu;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreation(): \DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime $dateCreation
     */
    public function setDateCreation(\DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return int
     */
    public function getNbVisite(): int
    {
        return $this->nbVisite;
    }

    /**
     * @param int $nbVisite
     */
    public function setNbVisite(int $nbVisite)
    {
        $this->nbVisite = $nbVisite;
    }
}
