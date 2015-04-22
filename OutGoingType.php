<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class OutGoingType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('OutBalance')
			->add('OutPayment')			
			->add('OutFrequency','choice', array(
			'choices'=> array('weekly' =>'Weekly','fortnightly'=> 'Fortnightly','monthly'=>'Monthly'),
			'required' => true)
			)
			->add('OutProvider');
			//->add('save','submit',array('label' =>'Add Out Going'));			
	}
	
	public function getName()
	{
		return 'OutGoing';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\DemoBundle\Entity\OutGoing',
		));
	}
}


?>
