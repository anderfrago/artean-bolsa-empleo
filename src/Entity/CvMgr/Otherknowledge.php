<?php
/**
 * @title Other knowledge
 * @author AnderEño (ander_frago@cuatrovientos.org)
 * @see CV can have multiple Other knowledge
 */

namespace App\Entity\CvMgr;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="otherknowledge")
 * @ORM\Entity(repositoryClass="App\Repository\CvMgr\OtherknowledgeRepository")
 */
class Otherknowledge {

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="vName", type="string", length=255)
   */
  private $vName;

  /**
   * @ORM\Column(name="ltextDescription", type="text", nullable=true)
   */
  private $ltextDescription;

  /**
   * @ORM\Column(name="vTitle", type="string", length=255)
   */
  private $vTitle;

  /**
   * @see Autogenerated Getters & Setters
   */
  public function setId($id) {
    return $this->id =$id;
  }
  public function getId() {
    return $this->id;
  }

  public function setVName($vName) {
    $this->vName = $vName;
  }

  public function getVName() {
    return $this->vName;
  }

  public function setLtextDescription($ltextDescription) {
    $this->ltextDescription = $ltextDescription;
  }

  public function getLtextDescription() {
    return $this->ltextDescription;
  }

  public function setVTitle($vTitle) {
    $this->vTitle = $vTitle;
  }

  public function getVTitle() {
    return $this->vTitle;
  }

  /**
   * @ORM\ManyToOne(targetEntity="CV", inversedBy="otherknowledges", cascade={"persist"})
   * @ORM\JoinColumn(name="cv_id", referencedColumnName="id")
   */
  private $cv;

  public function getCv() {
    return $this->cv;
  }

  public function setCv($cv) {
    $this->cv = $cv;
  }


}

