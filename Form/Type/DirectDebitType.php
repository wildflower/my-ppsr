<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Acme\DemoBundle\Entity\DirectDebit ;
use Acme\DemoBundle\Entity\Address;


class DirectDebitType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
	
	$builder->add('title')
		->add('firstname')
		->add('lastname')
		->add('dob')
		->add('companyname')
		
		->add('address1')
		->add('address2')
		->add('address3')
		->add('suburb')
		->add('city')
		->add('postcode')
		
		->add('phonehome')
		->add('phonework')
		->add('phonemobile')
		
		->add('fax')
		->add('email')
		->add('initialPaymentDate')
		->add('initialPaymentAmount')
		->add('startdate')
		->add('frequencyMode')
		->add('amount')
		->add('totalamount')
		->add('failedpaymentoption')
		->add('particular')
		->add('reference')
		->add('branchname')
		->add('branchaddress')
		->add('branchaddress2')
		->add('accountname')
		->add('bankcode')
		->add('accountcode')
		->add('suffixcode')
		
		->add('save','submit',array('label' =>'Add Direct Credit Authorisation'));			
		
	}
	
		public function getName()
	{
		return 'DirectDebit';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\DemoBundle\Entity\DirectDebit',
		));
	}
}
?>
