<?php
namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PPSRController extends Controller
{

public function indexAction()
{
	//$number = rand(1,$l);
	
	return $this->render(
		'AcmeDemoBundle:PPSR:index.html.twig'	
	);
}

public function referenceAction(){
	$reference_query = 'http://www.g2b.govt.nz/dtd/ppsr/ppsr_reference_query.dtd';
	$implementation = new \DOMImplementation();
	$dtd = $implementation->createDocumentType('transaction','',$reference_query);
	$ppsr_xml = new \DOMDocument('1.0',"UTF-8");
	$ppsr_functions = new PPSRFunctions();
	$ppsr_xml = $ppsr_functions->build_reference_query($ppsr_xml);	
	
	$ch = curl_init();
		$url = 'https://xml.eat.g2b.govt.nz/ppsr-xml/gateway.svt';	
	curl_setopt($ch, CURLOPT_SSLCERT, '/home/haydn/ppsr/milford.pem');	
    curl_setopt($ch, CURLOPT_SSLCERTPASSWD, 'Secure1');
	  curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSLVERSION,3);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_SSLKEYTYPE, 'PEM');
	
	$response = $ppsr_functions->send_it($ppsr_xml, $ch);
	
	
	return $this->render(
	'AcmeDemoBundle:PPSR:response.html.twig',
		array('response' => $response)	
	);
}

public function soapAction($nzbn)
{
	$soap = new SoapSummaryApi();
	$searchResult = $soap->retrieveCompanySummaryDetails($nzbn);
	//var_dump($searchResult);
	$details = new CompanySummaryResult($searchResult);
	
	return $this->render(
		'AcmeDemoBundle:Default:SoapCompanyDetails.html.twig',
		array('entity' => $details)
	);
	
}
}
?>
