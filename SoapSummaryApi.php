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


class CompanySummaryResult
{
	public $companyNumber ;
	public $companyName;
	public $incorporationDate;
	public $status;
	public $annualReturnFilingMonth;
	public $removalCommenced;
	public $directors;
	public $registeredOffice;
	
	function __construct($searchResult){
	
	$this->companyNmber = $searchResult->companyNumber;
	$this->companyName = $searchResult->companyName;
	$this->incorporationDate = $searchResult->incorporationDate;
	$this->status = $searchResult->status->description;
	$this->annualReturnFilingMonth = $searchResult->annualReturnFilingMonth;
	$this->registeredOffice = $searchResult->registeredOffice;
	
	}

}

	$myclient = new SoapSummaryApi();
	//var_dump($myclient->__getFunctions());
	
	$searchDetails = new coDetails();
	$searchDetails->companyNumber = '200';
	$searchDetails->clientBillingReference =  'test';

	var_dump($myclient->retrieveCompanySummaryDetails('200'));

	$searchResult = $myclient->retrieveCompanySummaryDetails('200');
echo "after  serch Result \n";
	
	//$xml  = simplexml_load_string($searchResult);
	//var_dump($xml);
$resultSet = new CompanySummaryResult($searchResult);

echo $resultSet->status ,"\n";
echo $resultSet->registeredOffice->address2;









?>
