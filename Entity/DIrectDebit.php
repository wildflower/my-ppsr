<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="DirectDebit")
 */
 
class DirectDebit
{	
	
 	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
       protected $id;

        /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $title;

      /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $firstname;
    
        /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $lastname;

        /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dob;    
       /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $companyname;
    
       /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $address1;
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $address2;
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $address3;
    
         /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $suburb;    
    
        /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $city;            
    
         /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postcode;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $phonehome;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $phonework;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $phonemobile;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fax;
    
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $email;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $initialPaymentDate;
    
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $initialPaymentAmount;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $startDate;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $frequencyMode;
    
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;
    
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totalamount;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $failedpaymentoption;
    
    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $particular;
    
    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $reference;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $branchname;
    
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $branchaddress;
    
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $branchaddress2;
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $accountname;
    
    /**
     * @ORM\Column(type="string", length=2, nullable=false)
     */
    private $bankcode;
    
    /**
     * @ORM\Column(type="string", length=4, nullable=false)
     */
    private $branchcode;
    
    /**
     * @ORM\Column(type="string", length=7, nullable=false)
     */
    private $accountcode;
    
    /**
     * @ORM\Column(type="string", length=3,nullable=false)
     */
    private $suffixcode;
    
      

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
     * Set title
     *
     * @param string $title
     * @return DirectDebit
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return DirectDebit
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return DirectDebit
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set dob
     *
     * @param string $dob
     * @return DirectDebit
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return DirectDebit
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return DirectDebit
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     * @return DirectDebit
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return string 
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set suburb
     *
     * @param string $suburb
     * @return DirectDebit
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;

        return $this;
    }

    /**
     * Get suburb
     *
     * @return string 
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return DirectDebit
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return DirectDebit
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set phonehome
     *
     * @param string $phonehome
     * @return DirectDebit
     */
    public function setPhonehome($phonehome)
    {
        $this->phonehome = $phonehome;

        return $this;
    }

    /**
     * Get phonehome
     *
     * @return string 
     */
    public function getPhonehome()
    {
        return $this->phonehome;
    }

    /**
     * Set phonework
     *
     * @param string $phonework
     * @return DirectDebit
     */
    public function setPhonework($phonework)
    {
        $this->phonework = $phonework;

        return $this;
    }

    /**
     * Get phonework
     *
     * @return string 
     */
    public function getPhonework()
    {
        return $this->phonework;
    }

    /**
     * Set phonemobile
     *
     * @param string $phonemobile
     * @return DirectDebit
     */
    public function setPhonemobile($phonemobile)
    {
        $this->phonemobile = $phonemobile;

        return $this;
    }

    /**
     * Get phonemobile
     *
     * @return string 
     */
    public function getPhonemobile()
    {
        return $this->phonemobile;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return DirectDebit
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return DirectDebit
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set initialPaymentDate
     *
     * @param \DateTime $initialPaymentDate
     * @return DirectDebit
     */
    public function setInitialPaymentDate($initialPaymentDate)
    {
        $this->initialPaymentDate = $initialPaymentDate;

        return $this;
    }

    /**
     * Get initialPaymentDate
     *
     * @return \DateTime 
     */
    public function getInitialPaymentDate()
    {
        return $this->initialPaymentDate;
    }

    /**
     * Set initialPaymentAmount
     *
     * @param float $initialPaymentAmount
     * @return DirectDebit
     */
    public function setInitialPaymentAmount($initialPaymentAmount)
    {
        $this->initialPaymentAmount = $initialPaymentAmount;

        return $this;
    }

    /**
     * Get initialPaymentAmount
     *
     * @return float 
     */
    public function getInitialPaymentAmount()
    {
        return $this->initialPaymentAmount;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return DirectDebit
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set companyname
     *
     * @param string $companyname
     * @return DirectDebit
     */
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get companyname
     *
     * @return string 
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set frequencyMode
     *
     * @param string $frequencyMode
     * @return DirectDebit
     */
    public function setFrequencyMode($frequencyMode)
    {
        $this->frequencyMode = $frequencyMode;

        return $this;
    }

    /**
     * Get frequencyMode
     *
     * @return string 
     */
    public function getFrequencyMode()
    {
        return $this->frequencyMode;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return DirectDebit
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set totalamount
     *
     * @param float $totalamount
     * @return DirectDebit
     */
    public function setTotalamount($totalamount)
    {
        $this->totalamount = $totalamount;

        return $this;
    }

    /**
     * Get totalamount
     *
     * @return float 
     */
    public function getTotalamount()
    {
        return $this->totalamount;
    }

    /**
     * Set failedpaymentoption
     *
     * @param string $failedpaymentoption
     * @return DirectDebit
     */
    public function setFailedpaymentoption($failedpaymentoption)
    {
        $this->failedpaymentoption = $failedpaymentoption;

        return $this;
    }

    /**
     * Get failedpaymentoption
     *
     * @return string 
     */
    public function getFailedpaymentoption()
    {
        return $this->failedpaymentoption;
    }

    /**
     * Set particular
     *
     * @param string $particular
     * @return DirectDebit
     */
    public function setParticular($particular)
    {
        $this->particular = $particular;

        return $this;
    }

    /**
     * Get particular
     *
     * @return string 
     */
    public function getParticular()
    {
        return $this->particular;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return DirectDebit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set branchname
     *
     * @param string $branchname
     * @return DirectDebit
     */
    public function setBranchname($branchname)
    {
        $this->branchname = $branchname;

        return $this;
    }

    /**
     * Get branchname
     *
     * @return string 
     */
    public function getBranchname()
    {
        return $this->branchname;
    }

    /**
     * Set branchaddress
     *
     * @param string $branchaddress
     * @return DirectDebit
     */
    public function setBranchaddress($branchaddress)
    {
        $this->branchaddress = $branchaddress;

        return $this;
    }

    /**
     * Get branchaddress
     *
     * @return string 
     */
    public function getBranchaddress()
    {
        return $this->branchaddress;
    }

    /**
     * Set branchaddress2
     *
     * @param string $branchaddress2
     * @return DirectDebit
     */
    public function setBranchaddress2($branchaddress2)
    {
        $this->branchaddress2 = $branchaddress2;

        return $this;
    }

    /**
     * Get branchaddress2
     *
     * @return string 
     */
    public function getBranchaddress2()
    {
        return $this->branchaddress2;
    }

    /**
     * Set accountname
     *
     * @param string $accountname
     * @return DirectDebit
     */
    public function setAccountname($accountname)
    {
        $this->accountname = $accountname;

        return $this;
    }

    /**
     * Get accountname
     *
     * @return string 
     */
    public function getAccountname()
    {
        return $this->accountname;
    }

    /**
     * Set bankcode
     *
     * @param string $bankcode
     * @return DirectDebit
     */
    public function setBankcode($bankcode)
    {
        $this->bankcode = $bankcode;

        return $this;
    }

    /**
     * Get bankcode
     *
     * @return string 
     */
    public function getBankcode()
    {
        return $this->bankcode;
    }

    /**
     * Set branchcode
     *
     * @param string $branchcode
     * @return DirectDebit
     */
    public function setBranchcode($branchcode)
    {
        $this->branchcode = $branchcode;

        return $this;
    }

    /**
     * Get branchcode
     *
     * @return string 
     */
    public function getBranchcode()
    {
        return $this->branchcode;
    }

    /**
     * Set accountcode
     *
     * @param string $accountcode
     * @return DirectDebit
     */
    public function setAccountcode($accountcode)
    {
        $this->accountcode = $accountcode;

        return $this;
    }

    /**
     * Get accountcode
     *
     * @return string 
     */
    public function getAccountcode()
    {
        return $this->accountcode;
    }

    /**
     * Set suffixcode
     *
     * @param string $suffixcode
     * @return DirectDebit
     */
    public function setSuffixcode($suffixcode)
    {
        $this->suffixcode = $suffixcode;

        return $this;
    }

    /**
     * Get suffixcode
     *
     * @return string 
     */
    public function getSuffixcode()
    {
        return $this->suffixcode;
    }
}
