<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PPSRVehicleSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reg_no')
	    ->add('chassis')
	    ->add('vin')            
            ->add('Search', 'submit');
    }

    public function getName()
    {
        return 'PPSRVehicleSearch';
    }
    
    

public function setDefaultOptions(OptionsResolverInterface $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\PPSRVehicleSearch',
    ));
}
}
?>
