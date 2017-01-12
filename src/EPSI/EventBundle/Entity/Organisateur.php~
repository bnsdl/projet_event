<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisateur
 *
 * @ORM\Table(name="ORGANISATEUR")
 * @ORM\Entity
 */
class Organisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_organisateur", type="string", length=256, nullable=true)
     */
    private $nomOrganisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="description_organisateur", type="string", length=5000, nullable=true)
     */
    private $descriptionOrganisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=200, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_image", type="string", length=200, nullable=true)
     */
    private $lienImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_organisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrganisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EPSI\EventBundle\Entity\Evenement", inversedBy="idOrganisateur")
     * @ORM\JoinTable(name="organiser",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_organisateur", referencedColumnName="id_organisateur")
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
     * Set nomOrganisateur
     *
     * @param string $nomOrganisateur
     *
     * @return Organisateur
     */
    public function setNomOrganisateur($nomOrganisateur)
    {
        $this->nomOrganisateur = $nomOrganisateur;

        return $this;
    }

    /**
     * Get nomOrganisateur
     *
     * @return string
     */
    public function getNomOrganisateur()
    {
        return $this->nomOrganisateur;
    }

    /**
     * Set descriptionOrganisateur
     *
     * @param string $descriptionOrganisateur
     *
     * @return Organisateur
     */
    public function setDescriptionOrganisateur($descriptionOrganisateur)
    {
        $this->descriptionOrganisateur = $descriptionOrganisateur;

        return $this;
    }

    /**
     * Get descriptionOrganisateur
     *
     * @return string
     */
    public function getDescriptionOrganisateur()
    {
        return $this->descriptionOrganisateur;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Organisateur
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
     * @return Organisateur
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
     * Get idOrganisateur
     *
     * @return integer
     */
    public function getIdOrganisateur()
    {
        return $this->idOrganisateur;
    }

    /**
     * Add idEvenement
     *
     * @param \EPSI\EventBundle\Entity\Evenement $idEvenement
     *
     * @return Organisateur
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
