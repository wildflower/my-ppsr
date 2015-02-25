<?php

namespace Acme\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CompanyController extends Controller
{
	public function indexAction($nzbn)
	{
		//$number = rand(1,$l);
		$details = $this->getCompanyDetails($nzbn);
		
		return $this->render(
		'AcmeDemoBundle:Random:index.html.twig',
		array('number' => $details)
		);
	}
	
	
	public function getCompanyDetails($nzbn){
	$auth_key="c5vGQitBKdNLPb3Y";
	$secret_auth_key="6K4sKwc22mPdkpz9Dx3PgsJwNbEAxD0GYo0Tmn1K";
	$url='http://www.eat.business.govt.nz/data/app/ws/rest/companies/entity/v2.0';

	$test = new CompanySearchApi($url,$auth_key,$secret_auth_key);
	
	return $test->search_company($nzbn);
	
	}
	
}

?>
