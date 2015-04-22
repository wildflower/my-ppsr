<?php

namespace Acme\TaskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\DemoBundle\Form\Type\OutGoingType;


class TaskType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('task')
			->add('dueDate','date')
			->add('outgoings','collection', array(
			'type' => new OutGoingType(),
			'allow_add' =>true,
			'by_reference' =>false,
			) )
			->add('save','submit',array('label' =>'Create Task'));			
	}
	
	public function getName()
	{
		return 'Ttask';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\TaskBundle\Entity\Task',
		));
	}
}


?>
