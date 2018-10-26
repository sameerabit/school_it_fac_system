<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolRecord
 *
 * @ORM\Table(name="school_record")
 * @ORM\Entity
 */
class SchoolRecord
{
    /**
     * @var string
     *
     * @ORM\Column(name="school_name", type="string", length=500, nullable=false)
     */
    private $schoolName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=15, nullable=false)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=50, nullable=false)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="grama_niladhari", type="string", length=500, nullable=false)
     */
    private $gramaNiladhari;

    /**
     * @var string
     *
     * @ORM\Column(name="divisional_secretariat", type="string", length=500, nullable=false)
     */
    private $divisionalSecretariat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_electricity", type="boolean", nullable=false)
     */
    private $haveElectricity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_lab", type="boolean", nullable=false)
     */
    private $haveLab;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_teacher", type="integer", nullable=false)
     */
    private $numberOfTeacher;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_computer", type="integer", nullable=false)
     */
    private $numberOfComputer;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_working", type="integer", nullable=false)
     */
    private $numberOfWorking;

    /**
     * @var string
     *
     * @ORM\Column(name="lack_computer_parts", type="text", length=65535, nullable=false)
     */
    private $lackComputerParts;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_of_students", type="integer", nullable=false)
     */
    private $noOfStudents;

    /**
     * @var float
     *
     * @ORM\Column(name="langitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $langitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="proposals", type="text", length=65535, nullable=false)
     */
    private $proposals;

    /**
     * @var string
     *
     * @ORM\Column(name="provided_by", type="string", length=500, nullable=false)
     */
    private $providedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * @param string $schoolName
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param string $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return string
     */
    public function getGramaNiladhari()
    {
        return $this->gramaNiladhari;
    }

    /**
     * @param string $gramaNiladhari
     */
    public function setGramaNiladhari($gramaNiladhari)
    {
        $this->gramaNiladhari = $gramaNiladhari;
    }

    /**
     * @return string
     */
    public function getDivisionalSecretariat()
    {
        return $this->divisionalSecretariat;
    }

    /**
     * @param string $divisionalSecretariat
     */
    public function setDivisionalSecretariat($divisionalSecretariat)
    {
        $this->divisionalSecretariat = $divisionalSecretariat;
    }

    /**
     * @return bool
     */
    public function isHaveElectricity()
    {
        return $this->haveElectricity;
    }

    /**
     * @param bool $haveElectricity
     */
    public function setHaveElectricity($haveElectricity)
    {
        $this->haveElectricity = $haveElectricity;
    }

    /**
     * @return bool
     */
    public function isHaveLab()
    {
        return $this->haveLab;
    }

    /**
     * @param bool $haveLab
     */
    public function setHaveLab($haveLab)
    {
        $this->haveLab = $haveLab;
    }

    /**
     * @return int
     */
    public function getNumberOfTeacher()
    {
        return $this->numberOfTeacher;
    }

    /**
     * @param int $numberOfTeacher
     */
    public function setNumberOfTeacher($numberOfTeacher)
    {
        $this->numberOfTeacher = $numberOfTeacher;
    }

    /**
     * @return int
     */
    public function getNumberOfComputer()
    {
        return $this->numberOfComputer;
    }

    /**
     * @param int $numberOfComputer
     */
    public function setNumberOfComputer($numberOfComputer)
    {
        $this->numberOfComputer = $numberOfComputer;
    }

    /**
     * @return int
     */
    public function getNumberOfWorking()
    {
        return $this->numberOfWorking;
    }

    /**
     * @param int $numberOfWorking
     */
    public function setNumberOfWorking($numberOfWorking)
    {
        $this->numberOfWorking = $numberOfWorking;
    }

    /**
     * @return string
     */
    public function getLackComputerParts()
    {
        return $this->lackComputerParts;
    }

    /**
     * @param string $lackComputerParts
     */
    public function setLackComputerParts($lackComputerParts)
    {
        $this->lackComputerParts = $lackComputerParts;
    }

    /**
     * @return int
     */
    public function getNoOfStudents()
    {
        return $this->noOfStudents;
    }

    /**
     * @param int $noOfStudents
     */
    public function setNoOfStudents($noOfStudents)
    {
        $this->noOfStudents = $noOfStudents;
    }

    /**
     * @return float
     */
    public function getLangitude()
    {
        return $this->langitude;
    }

    /**
     * @param float $langitude
     */
    public function setLangitude($langitude)
    {
        $this->langitude = $langitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getProposals()
    {
        return $this->proposals;
    }

    /**
     * @param string $proposals
     */
    public function setProposals($proposals)
    {
        $this->proposals = $proposals;
    }

    /**
     * @return string
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * @param string $providedBy
     */
    public function setProvidedBy($providedBy)
    {
        $this->providedBy = $providedBy;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }




}

