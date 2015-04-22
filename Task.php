<?php

namespace Acme\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{	


    protected $id;

	protected $task;
	
	protected $dueDate;
	
	protected $outgoings;
	
	public function __construct()
       {
		$this->outgoings = new ArrayCollection();
       }
       
       public function addOutgoing(Outgoing $outgoing)
    {
        $this->outgoings->add($outgoing);
	$outgoings->setCreditApplicationSubmission($this->id);
    }

    public function removeOutgoing(Outgoing $outgoing)
    {
        // ...
    }
       
	public function getTask()	
	{
		return $this->task;
	}
	
	public function setTask($task)
	{
		$this->task= $task;
	}
	
	public function getDueDate()
	{
		return $this->dueDate;
	}
	
	public function setDueDate(\DateTime $dueDate = null)
	{
		$this->dueDate = $dueDate;
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
     * Set outgoings
     *
     * @param string $outgoings
     * @return Task
     */
    public function setOutgoings($outgoings)
    {
        $this->outgoings = $outgoings;

        return $this;
    }

    /**
     * Get outgoings
     *
     * @return string 
     */
    public function getOutgoings()
    {
        return $this->outgoings;
    }
}
