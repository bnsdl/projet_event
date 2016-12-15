<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lien
 *
 * @ORM\Table(name="LIEN", indexes={@ORM\Index(name="FK_LIEN_id_lieu", columns={"id_lieu"}), @ORM\Index(name="FK_LIEN_id_evenement", columns={"id_evenement"}), @ORM\Index(name="FK_LIEN_id_artiste", columns={"id_artiste"}), @ORM\Index(name="FK_LIEN_id_type_lien", columns={"id_type_lien"})})
 * @ORM\Entity
 */
class Lien
{
    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=true)
     */
    private $lien;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_visite_lien", type="integer", nullable=true)
     */
    private $nbVisiteLien;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lien", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLien;

    /**
     * @var \EPSI\EventBundle\Entity\TypeLien
     *
     * @ORM\ManyToOne(targetEntity="EPSI\EventBundle\Entity\TypeLien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_lien", referencedColumnName="id_type_lien")
     * })
     */
    private $idTypeLien;

    /**
     * @var \EPSI\EventBundle\Entity\Lieu
     *
     * @ORM\ManyToOne(targetEntity="EPSI\EventBundle\Entity\Lieu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lieu", referencedColumnName="id_lieu")
     * })
     */
    private $idLieu;

    /**
     * @var \EPSI\EventBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="EPSI\EventBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     * })
     */
    private $idEvenement;

    /**
     * @var \EPSI\EventBundle\Entity\Artiste
     *
     * @ORM\ManyToOne(targetEntity="EPSI\EventBundle\Entity\Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_artiste", referencedColumnName="id_artiste")
     * })
     */
    private $idArtiste;



    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set nbVisiteLien
     *
     * @param integer $nbVisiteLien
     *
     * @return Lien
     */
    public function setNbVisiteLien($nbVisiteLien)
    {
        $this->nbVisiteLien = $nbVisiteLien;

        return $this;
    }

    /**
     * Get nbVisiteLien
     *
     * @return integer
     */
    public function getNbVisiteLien()
    {
        return $this->nbVisiteLien;
    }

    /**
     * Get idLien
     *
     * @return integer
     */
    public function getIdLien()
    {
        return $this->idLien;
    }

    /**
     * Set idTypeLien
     *
     * @param \EPSI\EventBundle\Entity\TypeLien $idTypeLien
     *
     * @return Lien
     */
    public function setIdTypeLien(\EPSI\EventBundle\Entity\TypeLien $idTypeLien = null)
    {
        $this->idTypeLien = $idTypeLien;

        return $this;
    }

    /**
     * Get idTypeLien
     *
     * @return \EPSI\EventBundle\Entity\TypeLien
     */
    public function getIdTypeLien()
    {
        return $this->idTypeLien;
    }

    /**
     * Set idLieu
     *
     * @param \EPSI\EventBundle\Entity\Lieu $idLieu
     *
     * @return Lien
     */
    public function setIdLieu(\EPSI\EventBundle\Entity\Lieu $idLieu = null)
    {
        $this->idLieu = $idLieu;

        return $this;
    }

    /**
     * Get idLieu
     *
     * @return \EPSI\EventBundle\Entity\Lieu
     */
    public function getIdLieu()
    {
        return $this->idLieu;
    }

    /**
     * Set idEvenement
     *
     * @param \EPSI\EventBundle\Entity\Evenement $idEvenement
     *
     * @return Lien
     */
    public function setIdEvenement(\EPSI\EventBundle\Entity\Evenement $idEvenement = null)
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }

    /**
     * Get idEvenement
     *
     * @return \EPSI\EventBundle\Entity\Evenement
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set idArtiste
     *
     * @param \EPSI\EventBundle\Entity\Artiste $idArtiste
     *
     * @return Lien
     */
    public function setIdArtiste(\EPSI\EventBundle\Entity\Artiste $idArtiste = null)
    {
        $this->idArtiste = $idArtiste;

        return $this;
    }

    /**
     * Get idArtiste
     *
     * @return \EPSI\EventBundle\Entity\Artiste
     */
    public function getIdArtiste()
    {
        return $this->idArtiste;
    }
}
