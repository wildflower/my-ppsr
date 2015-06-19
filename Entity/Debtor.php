<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Debtor")
 */
class Debtor
{	
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
       protected $id;

        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $type;

        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;
    
            /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $fax;
    
            /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone;
    
     /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $reference;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $firstname;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $middlenames;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastname;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $date_of_birth;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $orgtype;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $orgname;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $orgnumber;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $actingfirstname;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $actingmiddlename;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $actinglastname;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $actingemail;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $actingfax;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $actingphone;
    
   /**
* @ORM\OneToMany(targetEntity="Address", cascade={"persist","remove","merge"}, mappedBy="user")
*@ORM\JoinColumn(name="actingaddress", referencedColumnName="id")
* @Assert\Type(type="Acme\DemoBundle\Entity\Address")
* @Assert\Valid()
*/
    private $actingaddress;

   /**
* @ORM\OneToMany(targetEntity="Address", cascade={"persist","remove","merge"}, mappedBy="user")
*@ORM\JoinColumn(name="Address", referencedColumnName="id")
* @Assert\Type(type="Acme\DemoBundle\Entity\Address")
* @Assert\Valid()
*/
     protected	$Address;


  public function __construct()
       {
		$this->Address = new ArrayCollection();
       }
       



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
     * Set type
     *
     * @param string $type
     * @return Debtor
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Debtor
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
     * Set fax
     *
     * @param string $fax
     * @return Debtor
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
     * Set phone
     *
     * @param string $phone
     * @return Debtor
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Debtor
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
     * Set firstname
     *
     * @param string $firstname
     * @return Debtor
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
     * Set middlenames
     *
     * @param string $middlenames
     * @return Debtor
     */
    public function setMiddlenames($middlenames)
    {
        $this->middlenames = $middlenames;

        return $this;
    }

    /**
     * Get middlenames
     *
     * @return string 
     */
    public function getMiddlenames()
    {
        return $this->middlenames;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Debtor
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
     * Set date_of_birth
     *
     * @param string $dateOfBirth
     * @return Debtor
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->date_of_birth = $dateOfBirth;

        return $this;
    }

    /**
     * Get date_of_birth
     *
     * @return string 
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set orgtype
     *
     * @param string $orgtype
     * @return Debtor
     */
    public function setOrgtype($orgtype)
    {
        $this->orgtype = $orgtype;

        return $this;
    }

    /**
     * Get orgtype
     *
     * @return string 
     */
    public function getOrgtype()
    {
        return $this->orgtype;
    }

    /**
     * Set orgname
     *
     * @param string $orgname
     * @return Debtor
     */
    public function setOrgname($orgname)
    {
        $this->orgname = $orgname;

        return $this;
    }

    /**
     * Get orgname
     *
     * @return string 
     */
    public function getOrgname()
    {
        return $this->orgname;
    }

    /**
     * Set orgnumber
     *
     * @param string $orgnumber
     * @return Debtor
     */
    public function setOrgnumber($orgnumber)
    {
        $this->orgnumber = $orgnumber;

        return $this;
    }

    /**
     * Get orgnumber
     *
     * @return string 
     */
    public function getOrgnumber()
    {
        return $this->orgnumber;
    }

    /**
     * Set actingfirstname
     *
     * @param string $actingfirstname
     * @return Debtor
     */
    public function setActingfirstname($actingfirstname)
    {
        $this->actingfirstname = $actingfirstname;

        return $this;
    }

    /**
     * Get actingfirstname
     *
     * @return string 
     */
    public function getActingfirstname()
    {
        return $this->actingfirstname;
    }

    /**
     * Set actingmiddlename
     *
     * @param string $actingmiddlename
     * @return Debtor
     */
    public function setActingmiddlename($actingmiddlename)
    {
        $this->actingmiddlename = $actingmiddlename;

        return $this;
    }

    /**
     * Get actingmiddlename
     *
     * @return string 
     */
    public function getActingmiddlename()
    {
        return $this->actingmiddlename;
    }

    /**
     * Set actinglastname
     *
     * @param string $actinglastname
     * @return Debtor
     */
    public function setActinglastname($actinglastname)
    {
        $this->actinglastname = $actinglastname;

        return $this;
    }

    /**
     * Get actinglastname
     *
     * @return string 
     */
    public function getActinglastname()
    {
        return $this->actinglastname;
    }

    /**
     * Set actingemail
     *
     * @param string $actingemail
     * @return Debtor
     */
    public function setActingemail($actingemail)
    {
        $this->actingemail = $actingemail;

        return $this;
    }

    /**
     * Get actingemail
     *
     * @return string 
     */
    public function getActingemail()
    {
        return $this->actingemail;
    }

    /**
     * Set actingfax
     *
     * @param string $actingfax
     * @return Debtor
     */
    public function setActingfax($actingfax)
    {
        $this->actingfax = $actingfax;

        return $this;
    }

    /**
     * Get actingfax
     *
     * @return string 
     */
    public function getActingfax()
    {
        return $this->actingfax;
    }

    /**
     * Set actingphone
     *
     * @param string $actingphone
     * @return Debtor
     */
    public function setActingphone($actingphone)
    {
        $this->actingphone = $actingphone;

        return $this;
    }

    /**
     * Get actingphone
     *
     * @return string 
     */
    public function getActingphone()
    {
        return $this->actingphone;
    }

    /**
     * Add actingaddress
     *
     * @param \Acme\DemoBundle\Entity\Address $actingaddress
     * @return Debtor
     */
    public function addActingaddress(\Acme\DemoBundle\Entity\Address $actingaddress)
    {
        $this->actingaddress[] = $actingaddress;

        return $this;
    }

    /**
     * Remove actingaddress
     *
     * @param \Acme\DemoBundle\Entity\Address $actingaddress
     */
    public function removeActingaddress(\Acme\DemoBundle\Entity\Address $actingaddress)
    {
        $this->actingaddress->removeElement($actingaddress);
    }

    /**
     * Get actingaddress
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActingaddress()
    {
        return $this->actingaddress;
    }

    /**
     * Add Address
     *
     * @param \Acme\DemoBundle\Entity\Address $address
     * @return Debtor
     */
    public function addAddress(\Acme\DemoBundle\Entity\Address $address)
    {
        $this->Address[] = $address;

        return $this;
    }

    /**
     * Remove Address
     *
     * @param \Acme\DemoBundle\Entity\Address $address
     */
    public function removeAddress(\Acme\DemoBundle\Entity\Address $address)
    {
        $this->Address->removeElement($address);
    }

    /**
     * Get Address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->Address;
    }
}
