<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Acme\DemoBundle\Entity\CreditApplicationSubmission ;
use Acme\DemoBundle\Entity\Address;


class CreditApplicationSubmissionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('Goods')			
			->add('AmountSought')		
			->add('Terms','choice', array(
			'choices' => CreditApplicationSubmission::$terms ,
			'required' => true)
			)
			->add('Deposit')
			->add('Salutation')
			->add('FirstName')
			->add('MiddleName')
			->add('LastName')
			->add('Sex','choice',array(
			'choices' => array( 'M' => 'Male', 'F' => 'Female'),
			'required' => true,
			'expanded' => true))
			
			->add('MarritalStatus','choice', array(
			'choices' => CreditApplicationSubmission::$marritalstatus,
			'required' => true)
			)
			
			->add('dob','date')
			->add('Dependents')
			
			->add('StreetNumber', 'address')
			
			->add('ResidenceLength')
			
			->add('PrevStreetNumber')
			->add('PrevStreetName')
			->add('PrevStreetType','choice', array(
			'choices' => Address::$streettypes ,
			'required' => true)			
			)
			->add('PrevSuburb')
			->add('PrevCity')
			
			->add('AreaCode')
			->add('Phone')
			->add('Email')
			
			->add('ReferenceName')
			->add('ReferenceRelationship')
			->add('ReferencePhone')
			
			->add('Employment','choice', array(
			'choices' => CreditApplicationSubmission::$employmenttype ,
			'required' => true)	
			)
			->add('Employer')
			->add('TimeAtJob' ,'choice',array(
			'choices' => CreditApplicationSubmission::$timeatjobtype ,
			'required' => true)	
			)
			->add('Occupation' ,'choice',array(
			'choices' => CreditApplicationSubmission::$occupation,
			'required' => true)	
			)
			->add('NetPay')
			->add('NetPayFrequency','choice',array(
			'choices' => CreditApplicationSubmission::$netpayfrequencytype ,
			'required' => true)
			)
			
			->add('OwnProperty','choice',array(
			'choices' => CreditApplicationSubmission::$ownpropertytype ,
			'required' => true))
			
			->add('TotalAssets')
			->add('LivingExpenses')		
			
			
			
			->add('outgoings','collection', array('type' => new OutGoingType(),'allow_add' => true , 'by_reference' => false, 'allow_delete' => true,)  )
			->add('save','submit',array('label' =>'Submit Credit Application'));			
	}
	
	public function getName()
	{
		return 'CreditApplication';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\DemoBundle\Entity\CreditApplicationSubmission',
		));
	}
}


?>
