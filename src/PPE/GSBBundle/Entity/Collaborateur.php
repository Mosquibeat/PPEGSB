<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collaborateur
 *
 * @ORM\Table(name="COLLABORATEUR")
 * @ORM\Entity(repositoryClass="PPE\GSBBundle\Repository\CollaborateurRepository")
 */
class Collaborateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matricule_col", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matriculeCol;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_col", type="string", length=25, nullable=false)
     */
    private $nomCol;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_col", type="string", length=25, nullable=false)
     */
    private $prenomCol;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_col", type="string", length=50, nullable=false)
     */
    private $adresseCol;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_col", type="string", length=5, nullable=false)
     */
    private $cpCol;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_col", type="string", length=25, nullable=false)
     */
    private $villeCol;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_col", type="string", length=350, nullable=false)
     */
    private $mdpCol;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_embauche", type="datetime", nullable=false)
     */
    private $dateEmbauche;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Medicament", mappedBy="matriculeColAvo")
     */
    private $depotLegalAvoir;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\ActiviteComplementaire", inversedBy="matriculeColOrg")
     * @ORM\JoinTable(name="organise",
     *   joinColumns={
     *     @ORM\JoinColumn(name="matricule_col_org", referencedColumnName="matricule_col")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="num_act", referencedColumnName="num_act")
     *   }
     * )
     */
    private $numAct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depotLegalAvoir = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numAct = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get matriculeCol
     *
     * @return integer 
     */
    public function getMatriculeCol()
    {
        return $this->matriculeCol;
    }

    /**
     * Set nomCol
     *
     * @param string $nomCol
     * @return Collaborateur
     */
    public function setNomCol($nomCol)
    {
        $this->nomCol = $nomCol;

        return $this;
    }

    /**
     * Get nomCol
     *
     * @return string 
     */
    public function getNomCol()
    {
        return $this->nomCol;
    }

    /**
     * Set prenomCol
     *
     * @param string $prenomCol
     * @return Collaborateur
     */
    public function setPrenomCol($prenomCol)
    {
        $this->prenomCol = $prenomCol;

        return $this;
    }

    /**
     * Get prenomCol
     *
     * @return string 
     */
    public function getPrenomCol()
    {
        return $this->prenomCol;
    }

    /**
     * Set adresseCol
     *
     * @param string $adresseCol
     * @return Collaborateur
     */
    public function setAdresseCol($adresseCol)
    {
        $this->adresseCol = $adresseCol;

        return $this;
    }

    /**
     * Get adresseCol
     *
     * @return string 
     */
    public function getAdresseCol()
    {
        return $this->adresseCol;
    }

    /**
     * Set cpCol
     *
     * @param string $cpCol
     * @return Collaborateur
     */
    public function setCpCol($cpCol)
    {
        $this->cpCol = $cpCol;

        return $this;
    }

    /**
     * Get cpCol
     *
     * @return string 
     */
    public function getCpCol()
    {
        return $this->cpCol;
    }

    /**
     * Set villeCol
     *
     * @param string $villeCol
     * @return Collaborateur
     */
    public function setVilleCol($villeCol)
    {
        $this->villeCol = $villeCol;

        return $this;
    }

    /**
     * Get villeCol
     *
     * @return string 
     */
    public function getVilleCol()
    {
        return $this->villeCol;
    }

    /**
     * Set mdpCol
     *
     * @param string $mdpCol
     * @return Collaborateur
     */
    public function setMdpCol($mdpCol)
    {
        $this->mdpCol = $mdpCol;

        return $this;
    }

    /**
     * Get mdpCol
     *
     * @return string 
     */
    public function getMdpCol()
    {
        return $this->mdpCol;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     * @return Collaborateur
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime 
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Add depotLegalAvoir
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalAvoir
     * @return Collaborateur
     */
    public function addDepotLegalAvoir(\PPE\GSBBundle\Entity\Medicament $depotLegalAvoir)
    {
        $this->depotLegalAvoir[] = $depotLegalAvoir;

        return $this;
    }

    /**
     * Remove depotLegalAvoir
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalAvoir
     */
    public function removeDepotLegalAvoir(\PPE\GSBBundle\Entity\Medicament $depotLegalAvoir)
    {
        $this->depotLegalAvoir->removeElement($depotLegalAvoir);
    }

    /**
     * Get depotLegalAvoir
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepotLegalAvoir()
    {
        return $this->depotLegalAvoir;
    }

    /**
     * Add numAct
     *
     * @param \PPE\GSBBundle\Entity\ActiviteComplementaire $numAct
     * @return Collaborateur
     */
    public function addNumAct(\PPE\GSBBundle\Entity\ActiviteComplementaire $numAct)
    {
        $this->numAct[] = $numAct;

        return $this;
    }

    /**
     * Remove numAct
     *
     * @param \PPE\GSBBundle\Entity\ActiviteComplementaire $numAct
     */
    public function removeNumAct(\PPE\GSBBundle\Entity\ActiviteComplementaire $numAct)
    {
        $this->numAct->removeElement($numAct);
    }

    /**
     * Get numAct
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumAct()
    {
        return $this->numAct;
    }
}
