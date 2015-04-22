<?php
namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="OutGoing")
 */

class OutGoing {

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
     /**
     * @ORM\Column(type="decimal", scale=2)
     */
      protected $OutBalance;
          /**
     * @ORM\Column(type="decimal", scale=2)
     */
      protected $OutPayment;
                /**
     * @ORM\Column(type="string")
     */

      protected $OutFrequency;
                /**
     * @ORM\Column(type="string")
     */

      protected $OutProvider;
          /**
     * @ORM\Column(type="decimal", scale=2)
     */

/**
* @ORM\ManyToOne(targetEntity="CreditApplicationSubmission", inversedBy="OutGoings")
* @ORM\JoinColumn(name="creditapplicationsubmission_id", referencedColumnName="id")
*/
	protected $CreditApplicationSubmission;
    /**
     * Set OutBalance
     *
     * @param string $outBalance
     * @return OutGoing
     */
    public function setOutBalance($outBalance)
    {
        $this->OutBalance = $outBalance;

        return $this;
    }

    /**
     * Get OutBalance
     *
     * @return string 
     */
    public function getOutBalance()
    {
        return $this->OutBalance;
    }

    /**
     * Set OutPayment
     *
     * @param string $outPayment
     * @return OutGoing
     */
    public function setOutPayment($outPayment)
    {
        $this->OutPayment = $outPayment;

        return $this;
    }

    /**
     * Get OutPayment
     *
     * @return string 
     */
    public function getOutPayment()
    {
        return $this->OutPayment;
    }

    /**
     * Set OutFrequency
     *
     * @param string $outFrequency
     * @return OutGoing
     */
    public function setOutFrequency($outFrequency)
    {
        $this->OutFrequency = $outFrequency;

        return $this;
    }

    /**
     * Get OutFrequency
     *
     * @return string 
     */
    public function getOutFrequency()
    {
        return $this->OutFrequency;
    }

    /**
     * Set OutProvider
     *
     * @param string $outProvider
     * @return OutGoing
     */
    public function setOutProvider($outProvider)
    {
        $this->OutProvider = $outProvider;

        return $this;
    }

    /**
     * Get OutProvider
     *
     * @return string 
     */
    public function getOutProvider()
    {
        return $this->OutProvider;
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
     * Set CreditApplicationSubmission
     *
     * @param \Acme\DemoBundle\Entity\CreditApplicationSubmission $creditApplicationSubmission
     * @return OutGoing
     */
    public function setCreditApplicationSubmission(\Acme\DemoBundle\Entity\CreditApplicationSubmission $creditApplicationSubmission = null)
    {
        $this->CreditApplicationSubmission = $creditApplicationSubmission;

        return $this;
    }

    /**
     * Get CreditApplicationSubmission
     *
     * @return \Acme\DemoBundle\Entity\CreditApplicationSubmission 
     */
    public function getCreditApplicationSubmission()
    {
        return $this->CreditApplicationSubmission;
    }
}
