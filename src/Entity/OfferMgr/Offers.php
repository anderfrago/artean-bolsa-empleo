<?php
/**
 * @title Offers
 * @author AnderEño (ander_frago@cuatrovientos.org)
 * @see Employeers can publish multiple Job offers
 */
namespace App\Entity\OfferMgr;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table(name="offers")
 * @ORM\Entity(repositoryClass="App\Repository\OfferMgr\OffersRepository")
 */
class Offers {

  public function __construct() {
    $this->offers_has_cvs = new ArrayCollection();
  }

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="v_Offer_Code", type="string", length=255)
   */
  private $vOfferCode;

  /**
   * @ORM\Column(name="v_Offer_Type", type="string", length=255)
   */
  private $vOfferType;

  /**
   * @ORM\Column(name="d_Activation_date", type="date")
   */
  private $dActivationDate;

  /**
   * @ORM\Column(name="d_Due_date", type="date")
   */
  private $dDueDate;

  /**
   * @ORM\Column(name="v_Position", type="string", length=255)
   */
  private $vPosition;

  /**
   * @ORM\Column(name="ltext_Description", type="text")
   */
  private $ltextDescription;

  /**
   * @ORM\Column(name="ltext_Duties", type="text")
   */
  private $ltextDuties;

  /**
   * @ORM\Column(name="ltext_Experience_Requirements", type="text")
   */
  private $ltextExperienceRequirements;

  /**
   * @ORM\Column(name="v_Salaray", type="string", length=255)
   */
  private $vSalaray;

  /**
   * @ORM\Column(name="v_Location", type="string", length=255)
   */
  private $vLocation;

  /**
   * @ORM\Column(name="creation_user", type="string", length=45, nullable=true)
   */
  private $creationUser;

  /**
   * @ORM\Column(name="modification_user", type="string", length=45,
   *   nullable=true)
   */
  private $modificationUser;

  /**
   * @ORM\Column(name="creation_date", type="datetime", nullable=true)
   */
  private $creationDate;

  /**
   * @ORM\Column(name="modification_date", type="datetime", nullable=true)
   */
  private $modificationDate;

  /**
   * @see Autogenerated Getters & Setters
   */
  public function getId() {
    return $this->id;
  }

  public function setVOfferCode($vOfferCode) {
    $this->vOfferCode = $vOfferCode;
  }
  public function getVOfferCode() {
    return $this->vOfferCode;
  }

  public function setVOfferType($vOfferType) {
    $this->vOfferType = $vOfferType;
  }
  public function getVOfferType() {
    return $this->vOfferType;
  }

  public function setDActivationDate($dActivationDate) {
    $this->dActivationDate = $dActivationDate;
  }
  public function getDActivationDate() {
    return $this->dActivationDate;
  }

  public function setDDueDate($dDueDate) {
    $this->dDueDate = $dDueDate;
  }
  public function getDDueDate() {
    return $this->dDueDate;
  }

  public function setVPosition($vPosition) {
    $this->vPosition = $vPosition;
  }
  public function getVPosition() {
    return $this->vPosition;
  }

  public function setLtextDescription($ltextDescription) {
    $this->ltextDescription = $ltextDescription;
  }
  public function getLtextDescription() {
    return $this->ltextDescription;
  }

  public function setLtextDuties($ltextDuties) {
    $this->ltextDuties = $ltextDuties;
  }
  public function getLtextDuties() {
    return $this->ltextDuties;
  }

  public function setLtextExperienceRequirements($ltextExperienceRequirements) {
    $this->ltextExperienceRequirements = $ltextExperienceRequirements;
  }
  public function getLtextExperienceRequirements() {
    return $this->ltextExperienceRequirements;
  }

  public function setVSalaray($vSalaray) {
    $this->vSalaray = $vSalaray;
  }
  public function getVSalaray() {
    return $this->vSalaray;
  }

  public function setVLocation($vLocation) {
    $this->vLocation = $vLocation;
  }
  public function getVLocation() {
    return $this->vLocation;
  }

  public function setCreationUser($creationUser) {
    $this->creationUser = $creationUser;
  }
  public function getCreationUser() {
    return $this->creationUser;
  }

  public function setModificationUser($modificationUser) {
    $this->modificationUser = $modificationUser;
  }
  public function getModificationUser() {
    return $this->modificationUser;
  }

  public function setCreationDate($creationDate) {
    $this->creationDate = $creationDate;
  }
  public function getCreationDate() {
    return $this->creationDate;
  }

  public function setModificationDate($modificationDate) {
    $this->modificationDate = $modificationDate;
  }
  public function getModificationDate() {
    return $this->modificationDate;
  }

  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\UserMgr\Employeers", inversedBy="offers",cascade={"persist"})
   * @ORM\JoinColumn(name="employeer_id", referencedColumnName="id")
   */
  private $employeer;

  public function getEmployeer() {
    return $this->employeer;
  }

  public function setEmployeer($employeer) {
    $this->employeer = $employeer;
  }

  /**
   * @ORM\OneToMany(targetEntity="App\Entity\OfferMgr\Offers_has_CVs", mappedBy="offer")
   */
  private $offers_has_cvs;
}

