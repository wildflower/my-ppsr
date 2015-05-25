<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="PPSRVehicleSearch")
 */
class PPSRVehicleSearch
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
	public $reg_no;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
	public $chassis;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
	public $vin;
	
	
	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reg_no
     *
     * @param string $regNo
     * @return PPSRVehicleSearch
     */
    public function setRegNo($regNo)
    {
        $this->reg_no = $regNo;

        return $this;
    }

    /**
     * Get reg_no
     *
     * @return string 
     */
    public function getRegNo()
    {
        return $this->reg_no;
    }

    /**
     * Set chassis
     *
     * @param string $chassis
     * @return PPSRVehicleSearch
     */
    public function setChassis($chassis)
    {
        $this->chassis = $chassis;

        return $this;
    }

    /**
     * Get chassis
     *
     * @return string 
     */
    public function getChassis()
    {
        return $this->chassis;
    }

    /**
     * Set vin
     *
     * @param string $vin
     * @return PPSRVehicleSearch
     */
    public function setVin($vin)
    {
        $this->vin = $vin;

        return $this;
    }

    /**
     * Get vin
     *
     * @return string 
     */
    public function getVin()
    {
        return $this->vin;
    }
}
