<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Evenement
 *
 * @ORM\Table(name="EVENEMENT", indexes={@ORM\Index(name="FK_EVENEMENT_id_lieu", columns={"id_lieu"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_evenement", type="string", length=200, nullable=true)
     */
    private $nomEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="datetime", nullable=true)
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="datetime", nullable=true)
     */
    private $heureFin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_evenement", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixEvenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_visite_evenement", type="integer", nullable=true)
     */
    private $nbVisiteEvenement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="est_annule", type="boolean", nullable=true)
     */
    private $estAnnule;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_image", type="string", length=250, nullable=true)
     */
    private $lienImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EPSI\EventBundle\Entity\Genre", mappedBy="idEvenement")
     */
    private $idGenre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EPSI\EventBundle\Entity\Organisateur", mappedBy="idEvenement")
     */
    private $idOrganisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EPSI\EventBundle\Entity\Artiste", inversedBy="idEvenement")
     * @ORM\JoinTable(name="participer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_artiste", referencedColumnName="id_artiste")
     *   }
     * )
     */
    private $idArtiste;

    /**
     * @var datetime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idGenre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idOrganisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idArtiste = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomEvenement
     *
     * @param string $nomEvenement
     *
     * @return Evenement
     */
    public function setNomEvenement($nomEvenement)
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    /**
     * Get nomEvenement
     *
     * @return string
     */
    public function getNomEvenement()
    {
        return $this->nomEvenement;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Evenement
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
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Evenement
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Evenement
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set prixEvenement
     *
     * @param float $prixEvenement
     *
     * @return Evenement
     */
    public function setPrixEvenement($prixEvenement)
    {
        $this->prixEvenement = $prixEvenement;

        return $this;
    }

    /**
     * Get prixEvenement
     *
     * @return float
     */
    public function getPrixEvenement()
    {
        return $this->prixEvenement;
    }

    /**
     * Set nbVisiteEvenement
     *
     * @param integer $nbVisiteEvenement
     *
     * @return Evenement
     */
    public function setNbVisiteEvenement($nbVisiteEvenement)
    {
        $this->nbVisiteEvenement = $nbVisiteEvenement;

        return $this;
    }

    /**
     * Get nbVisiteEvenement
     *
     * @return integer
     */
    public function getNbVisiteEvenement()
    {
        return $this->nbVisiteEvenement;
    }

    /**
     * Set estAnnule
     *
     * @param boolean $estAnnule
     *
     * @return Evenement
     */
    public function setEstAnnule($estAnnule)
    {
        $this->estAnnule = $estAnnule;

        return $this;
    }

    /**
     * Get estAnnule
     *
     * @return boolean
     */
    public function getEstAnnule()
    {
        return $this->estAnnule;
    }

    /**
     * Set lienImage
     *
     * @param string $lienImage
     *
     * @return Evenement
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
     * Get idEvenement
     *
     * @return integer
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set idLieu
     *
     * @param \EPSI\EventBundle\Entity\Lieu $idLieu
     *
     * @return Evenement
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
     * Add idGenre
     *
     * @param \EPSI\EventBundle\Entity\Genre $idGenre
     *
     * @return Evenement
     */
    public function addIdGenre(\EPSI\EventBundle\Entity\Genre $idGenre)
    {
        $this->idGenre[] = $idGenre;

        return $this;
    }

    /**
     * Remove idGenre
     *
     * @param \EPSI\EventBundle\Entity\Genre $idGenre
     */
    public function removeIdGenre(\EPSI\EventBundle\Entity\Genre $idGenre)
    {
        $this->idGenre->removeElement($idGenre);
    }

    /**
     * Get idGenre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Add idOrganisateur
     *
     * @param \EPSI\EventBundle\Entity\Organisateur $idOrganisateur
     *
     * @return Evenement
     */
    public function addIdOrganisateur(\EPSI\EventBundle\Entity\Organisateur $idOrganisateur)
    {
        $this->idOrganisateur[] = $idOrganisateur;

        return $this;
    }

    /**
     * Remove idOrganisateur
     *
     * @param \EPSI\EventBundle\Entity\Organisateur $idOrganisateur
     */
    public function removeIdOrganisateur(\EPSI\EventBundle\Entity\Organisateur $idOrganisateur)
    {
        $this->idOrganisateur->removeElement($idOrganisateur);
    }

    /**
     * Get idOrganisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdOrganisateur()
    {
        return $this->idOrganisateur;
    }

    /**
     * Add idArtiste
     *
     * @param \EPSI\EventBundle\Entity\Artiste $idArtiste
     *
     * @return Evenement
     */
    public function addIdArtiste(\EPSI\EventBundle\Entity\Artiste $idArtiste)
    {
        $this->idArtiste[] = $idArtiste;

        return $this;
    }

    /**
     * Remove idArtiste
     *
     * @param \EPSI\EventBundle\Entity\Artiste $idArtiste
     */
    public function removeIdArtiste(\EPSI\EventBundle\Entity\Artiste $idArtiste)
    {
        $this->idArtiste->removeElement($idArtiste);
    }

    /**
     * Get idArtiste
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdArtiste()
    {
        return $this->idArtiste;
    }

    /**
     * @return datetime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param datetime $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }
}
