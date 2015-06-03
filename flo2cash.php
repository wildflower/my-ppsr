<?php

class RecurringPaymentCreationLineInput
{
	
	public $ClientAccountID;
	public $Title;
	public $FirstName;
	public $LastName;
	public $StartDate;
	public $FrequencyMode;
	public $Amount;
	public $AccountName;
	public $BankCode;
	public $BranchCode;
	public $AccountCode;
	public $SuffixCode;	
	public $IsPaperless;
	public $PaperlessApprovalType;
}

$wsdl = 'https://demo.flo2cash.co.nz/ddws/versionone/recurringpayments.asmx?WSDL';

$client     = new SoapClient($wsdl, array(
    'trace' => 1
  
));

$ddInput   = new RecurringPaymentCreationLineInput();
$ddInput->ClientAccountID  = "101403";
$ddInput->Title  = "Sir";
$ddInput->StartDate =  '2015-07-01';
$ddInput->FrequencyMode =  '2';
$ddInput->Amount = '300';
$ddInput->AccountName = "Mine";
$ddInput->BankCode = 6;
$ddInput->BranchCode = '4567';
$ddInput->AccountCode = '3456723';
$ddInput->SuffixCode = '001';
$ddInput->IsPaperless = TRUE;
$ddInput->PaperlessApprovalType = 1;

//var_dump($client->__getFunctions());
try {
  $result = $client->CreateRecurringPaymentPlan(array(
     'Username'          => "101403",
      'Password'       => "6fcgac4e",
  'RecurringPaymentCreationLineInput' =>$ddInput));
  } catch (SOAPFault $fault) {
	trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
  }


?>
