<?php
/**
 * @title Former student
 * @author AnderEño (ander_frago@cuatrovientos.org)
 * @see A type of user that applies to job offers and has a CV
 */

namespace App\Entity\UserMgr;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="former_students")
 * @ORM\Entity(repositoryClass="App\Repository\UserMgr\FormerStudentsRepository")
 */
class FormerStudents extends User {

  public function __construct() {
    parent::__construct();
    $this->cvs = new ArrayCollection();
    $this->bVehicle = 0;
    parent::setIsActive(1);
  }

  /**
   * @see Inherited methods
   */
  public function getUsername() {
    return parent::getUsername();
  }
  public function setUsername($username) {
    parent::setUsername($username);
  }
  public function setPassword($password) {
    parent::setPassword($password);
  }

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="v_NIF", type="string", length=45)
   */
  private $vNIF;

  /**
   * @ORM\Column(name="v_Name", type="string", length=45)
   */
  private $vName;

  /**
   * @ORM\Column(name="v_Surnames", type="string", length=45)
   */
  private $vSurnames;

  /**
   * @ORM\Column(name="v_Address", type="string", length=45)
   */
  private $vAddress;

  /**
   * @ORM\Column(name="d_Birth_Date", type="date")
   */
  private $dBirthDate;

  /**
   * @ORM\Column(name="b_Vehicle", type="boolean")
   */
  private $bVehicle= false;

  /**
   * @ORM\Column(name="creation_user", type="string", length=45)
   */
  private $creationUser;

  /**
   * @ORM\Column(name="modification_user", type="string", length=45)
   */
  private $modificationUser;

  /**
   * @ORM\Column(name="creation_date", type="date")
   */
  private $creationDate;

  /**
   * @ORM\Column(name="modification_date", type="datetime")
   */
  private $modificationDate;

  /**
   * @see Autogenerated Getters & Setters
   */
  public function setVNIF($vNIF) {
    $this->vNIF = $vNIF;
  }
  public function getVNIF() {
    return $this->vNIF;
  }

  public function setVName($vName) {
    $this->vName = $vName;
  }
  public function getVName() {
    return $this->vName;
  }

  public function setVSurnames($vSurnames) {
    $this->vSurnames = $vSurnames;
  }
  public function getVSurnames() {
    return $this->vSurnames;
  }

  public function setVAddress($vAddress) {
    $this->vAddress = $vAddress;
  }
  public function getVAddress() {
    return $this->vAddress;
  }

  public function setDBirthDate($dBirthDate) {
    $this->dBirthDate = $dBirthDate;
  }
  public function getDBirthDate() {
    return $this->dBirthDate;
  }

  public function setBVehicle(bool $bVehicle) {
    $this->bVehicle = $bVehicle;
  }
  public function getBVehicle() : ?bool{
    return $this->bVehicle;
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
   * @see Method to establish the Role to this type of user
   */
  public function getRoles() {
    return ['ROLE_USER_FORMER_STUDENTS'];
  }

  /**
   * @ORM\OneToMany(targetEntity="App\Entity\CvMgr\CV", mappedBy="formerstudent")
   */
  private $cvs;

  /**
   *  Add a CV
   */
  public function addCV($cv) {
    $this->cvs->add($cv);
  }
  /**
   *  Get CVs
   */
  public function getCVs() {
    return $this->cvs;
  }
  /**
   *  Set CVs
   */
  public function setCVs($cvs) {
    $this->cvs = $cvs;
  }
}
