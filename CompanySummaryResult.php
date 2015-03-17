<?php

namespace Acme\DemoBundle\Controller;


class SoapSummaryApi
{
	
	private $wsdl = 'http://ws.business.govt.nz/data/app/ws/services/CompanySummaryService.svc?wsdl';
	
	//$wsdl = "http://ws.eat.business.govt.nz/med-services/services/FinancialStatements.svc?wsdl";
	//$wsdl = "http://ws.business.govt.nz/med-services/services/FinancialStatementSearch.svc?wsdl";
	//$wsdl = "http://ws.business.govt.nz/data/app/ws/services/CompanyDetailsService.svc?wsdl";
	
	private $options = array(
				'trace' => 1,
				'exceptions' => FALSE				
				); 
	private $client;			

	function __construct(){
		$this->client = new \SoapClient($this->wsdl,$this->options);
		$this->client->__setSoapHeaders(NULL);		
	}
	
	function __getFunctions(){
		return $this->client->__getFunctions();
	}
	
	
	function retrieveCompanySummaryDetails($CompanyID){
		return $this->client->retrieveCompanySummaryDetails($CompanyID);
	}
	
}

class coDetails
{	
	public $companyNumber;
	public $clientBillingReference;
}



class FinancialStatementSearch{
	public $companyNumber;
	public $resultsPerPage;
	public $clientBillingReference;
}


function soapSummaryTest() {
	$myclient = new SoapSummaryApi();
	//var_dump($myclient->__getFunctions());
	
	$searchDetails = new coDetails();
	$searchDetails->companyNumber = '200';
	$searchDetails->clientBillingReference =  'test';

	var_dump($myclient->retrieveCompanySummaryDetails('1830488S'));

	$searchResult = $myclient->retrieveCompanySummaryDetails('200');
echo "after soapSummaryTest serch Result \n";
	
	//$xml  = simplexml_load_string($searchResult);
	//var_dump($xml);
//$resultSet = new CompanySummaryResult($searchResult);

echo $searchResult ->status ,"\n";
echo $searchResult ->registeredOffice->address2;

}


//soapSummaryTest() ;




?>
