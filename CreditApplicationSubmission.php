<?php
namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="CreditApplication")
 */

class CreditApplicationSubmission {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
       protected $id;
       
       
       /**
	* @ORM\OneToMany(targetEntity="OutGoing", cascade={"persist","remove","merge"}, mappedBy="user")
	*/
       protected $outgoings;      
       
       public function __construct()
       {
		$this->OutGoings = new ArrayCollection();
       }
       
       
       /**
     * @ORM\Column(type="text")
     */    
      protected $Goods;
          /**
     * @ORM\Column(type="decimal", scale=2)
     */
      protected $AmountSought;
          /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $Deposit;
      /**
     * @ORM\Column(type="string", nullable=true)
     */
      protected $Terms;
	/**
     * @ORM\Column(type="string", nullable=true)
     */
      protected $Salutation;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $FirstName;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $MiddleName;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $LastName;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Sex;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $MarritalStatus;
          /**
     * @ORM\Column(type="date", nullable=true)
     */      
      protected $dob;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $DriversLicence;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $VersionNo;
      /**
     * @ORM\Column(type="string", nullable=true)
     */
      protected $Dependents;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $StreetNumber;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $StreetName;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $StreetType;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Suburb;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $City;
                /**
     * @ORM\Column(type="integer", nullable=true)
     */

      protected $ResidenceLength;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $PrevStreetNumber;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $PrevStreetName;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $PrevStreetType;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $PrevSuburb;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $PrevCity;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $AreaCode;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Phone;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Email;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $ReferenceName;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $ReferenceRelationship;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $ReferencePhone;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Employment;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Employer;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $Occupation;
          /**
     * @ORM\Column(type="string", nullable=true)
     */
      protected $TimeAtJob;
          /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $NetPay;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $NetPayFrequency;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $OwnProperty;
          /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $TotalAssets;
          /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $LivingExpenses;
                /**
     * @ORM\Column(type="boolean", nullable=true)
     */

      protected $consent;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $ConsInqLast6Months;
          /**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $ConsInqScore;
          /**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $AgeCreditFile;
          /**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $VedaScore;
                /**
     * @ORM\Column(type="string", nullable=true)
     */

      protected $AdverseScore;
     
      /**
     * @ORM\Column(type="string", nullable=true)
     */
      protected $VedaResponse;
      /**
     * @ORM\Column(type="string", nullable=true)
     */
      protected $DriverLicenceMatch;
          /**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $BankruptcyCount;
          /**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $JudgementCount;
        /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $DefaultsLoadedBalance;
        /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $RiskOdds;
        /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $RelativeRisk;
        /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $RelativeRiskIndex;
	/**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $FHLScore;
        /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $CreditLimit;
        /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
      protected $DebtToAsset;
          /**
     * @ORM\Column(type="integer", nullable=true)
     */
      protected $Age;
        /**
     * @ORM\Column(type="boolean", nullable=true)
     */
      protected $Approval;
      /**
     * @ORM\Column(type="boolean", nullable=true)
     */
      protected $Insurance;
   
   	function DefaultInterest(){
		$caseManager = DataObject::get_by_id('Member',$this->CaseManagerID);
		if($caseManager->InterestRate != NULL)
			return $caseManager->InterestRate * 1.05 * 100;
		else
			return 27.3;
		}
		
	function OpeningBalance(){
		return $this->EstablishmentFee() + 18 + $this->AmountSought - $this->Deposit;
	}	
	
	function NiceOpeningBalance(){
		return money_format('%!i',$this->OpeningBalance());
	}	
	
	function EstimatedPaymentAmount(){
		
		$term = $this->TermLength();
		
		if(strpos($this->Terms,"IF"))
			return money_format('%!#6i',round($this->OpeningBalance() / $term,2));
		else
			$rate = $this->AnnualInterest()/ 100 / 12;
				
		if(strpos($this->Terms,"3D"))
			return money_format('%!#6i',round(($rate * ($this->OpeningBalance()+ $this->Deferred()) /(1 - pow(1 + $rate, -$term))),2)) ;
		else
			return money_format('%!#6i',round(($rate * $this->OpeningBalance() /(1 - pow(1 + $rate, -$term))),2)) ;
	}
	
	function Deferred(){
		$rate = $this->AnnualInterest()/ 100;
		$month1 = $this->OpeningBalance() / 12 * $rate;
		$month2 = $month1 * (1+$rate/12);
		$month3 = $month2 * (1+$rate/12);
		return round($month1 + $month2 + $month3,2);
	}
	
	function BalancePayable(){
		return $this->TermLength() * $this->EstimatedPaymentAmount();	
	}
	
	function MonthlyPayment(){
		return 	$this->EstimatedPaymentAmount() + 5;
	}
	
	function TotalInterest(){
		if(strpos($this->Terms,"IF"))
			return "0.00";
		else
			return $this->TotalAmount() - $this->OpeningBalance();
	}
	
	function FinanceCharge(){
		if(strpos($this->Terms,"IF"))
			return "0.00";
		else
			return  $this->BalancePayable() - $this->OpeningBalance();	
	}
	
	function TotalAmount(){
		return $this->BalancePayable() + ($this->TermLength() * 5);
	}
	
	function InsuranceFee(){
		if($this->Insurance){
		$amountSought = $this->AmountSought;
		$term = $this->TermLength();
		
		switch ($term){
			case ($term < 7):
				return money_format('%!#6i',round($amountSought * .0563,2));
			case ($term < 13):
				return money_format('%!#6i',round($amountSought * .0838,2));
			case ($amountSought < 19):
				return money_format('%!#6i',round($amountSought * .11,2));
			case ($amountSought < 25):
				return money_format('%!#6i',round($amountSought * .135,2));				
			case ($amountSought < 37):
				return money_format('%!#6i',round($amountSought * .1688,2));				
			case ($amountSought < 61):
				return money_format('%!#6i',round($amountSought * .1688,2));								
			default:
				return 300.00;				
			}
		}
		else
			return "0.00";
	}
	
	function StartDate(){
		$date = new DateTime(date("Y-m-d"));
		if(strpos($this->Terms,"3D")){
			$date->modify("+4 month");		
		}
		else{			
			$date->modify("+1 month");		
		}
		return $date->format("d/m/Y");
	}
	
	function StopDate(){		
		$date = new DateTime(date("Y-m-d"));
		$term = $this->TermLength();
		
		if(strpos($this->Terms,"3D")){
			$term = $term + 4;
		}							
		$date->modify("+$term month");				
		return $date->format("d/m/Y");
	}
	
	function EstablishmentFee(){
		$amountSought = $this->AmountSought;
		switch ($amountSought){
			case ($amountSought < 2001):
				return 180.00;
			case ($amountSought < 3001):
				return 295.00;
			case ($amountSought < 5001):
				return money_format('%!#6i',round($amountSought * .035 + 295,2));
			default:
				return money_format('%!#6i',round($amountSought * .03 + 295,2));				
			}
	}	
	
	function InterestFree(){
		if(strpos($this->Terms,"IF"))
			return $this->TermLength();		
	}
	
	function AnnualInterest(){
		$caseManager = DataObject::get_by_id('Member',$this->CaseManagerID);
		
		if($caseManager->InterestRate != NULL)
			return $caseManager->InterestRate * 100;
		else
			return 26;	
		}
	
	function TermLength(){
		return CreditApplicationForm::$termslength[$this->Terms];
	}	
	
	function onBeforeWrite(){
		if(!$this->ID) {
			$currentMember = Member::currentMember();
			if($currentMember) $this->CaseManagerID = $currentMember->ID;
		}
		parent::onBeforeWrite();
	}
	
	public function canCreate($member = null) {return true;}
	
	public function canView($member = null) {
		return(		Permission::checkMember($member, 'ADMIN') || 
		Permission::checkMember($member, 'EDIT_APPLICATIONS')|| ( $member && $member->ID == $this->CaseManagerID) );
	}
		
	public function canEdit($member = null){
		if(!$member) $member = Member::currentUser();
		return(
		Permission::checkMember($member, 'ADMIN') || 
		Permission::checkMember($member, 'EDIT_APPLICATIONS') ||
		($member && $member->ID == $this->CaseManagerID)
		);
	}
	
	public function providePermissions() {
	return array('EDIT_APPLICATIONS' => 'Edit Credit Applications');
	}
	
	public function getTitle(){
	return $this->getField('CaseManagerID') . ', ' . $this->getField('AmountSought') . ', ' . $this->getField('Created');
	}
	
	public function residency($submission){
		if (($submission->ResidenceLength < 3) && ($submission->PrevStreetName == ""))
			return -25;
		else
			return 0;		
	}
	
	public function vlookup($lookup,$the_array){
		$returnvalue = 0;
		foreach($the_array as $key => $value){
			if($key <= $lookup)
				$returnvalue = $value;
			if($key > $lookup)
				return $returnvalue;
		}		
		return $returnvalue;
	}
	
	public function  PVannuity  ($months,$numberofpayments,$YearlyRate,$paymentamount)  {          
			$Z  =  1  /  (1  +  ($YearlyRate/$months)); 
		return  ($paymentamount  *  $Z  *  (1  -  pow($Z,$numberofpayments)))/(1  -  $Z); 
	} 

	public function  FVannuity  ($months,$numberofpayments,$YearlyRate,$paymentamount)  { 
		return  $paymentamount  *  ((pow((1  +  $YearlyRate/$numberofpayments),$months)  -  1)/($YearlyRate/$numberofpayments)); 
	} 

	public function agebydate($iMonth, $iDay, $iYear) { 
		$iTimeStamp = (mktime() - 86400) - mktime(0, 0, 0, $iMonth, $iDay, $iYear); 
		$iDays = $iTimeStamp / 86400;  
		$iYears = floor($iDays / 365 );
	return $iYears;  
	} 

	public function ProcessVedaXML($submission){
		$doSet = new DataObjectSet();	
		
		if($submission->VedaResponse == NULL){
			$result['scorecardName'] = "No Veda Response present";
 				$doSet->push(new ArrayData($result));
 				return $result ;
		}
 					 					
 		$simpleXML = new SimpleXMLElement($submission->VedaResponse);
 					
 		$scorecardname = $simpleXML->xpath('/BCAmessage/BCAservices/BCAservice/BCAservice-data/response/enquiry-report/score-data/scorecard-name');
 		if($scorecardname){
 			$result['scorecardName'] = (string)$scorecardname[0];
 			}
 			else
 			{
 				$result['scorecardName'] = "it went wrong";
 				$doSet->push(new ArrayData($result));
 				return $result ;
 			}
 			
			$bankruptcycount = $simpleXML->xpath('//summary[@name = \'bankruptcy-count\']'); 					
			$submission->BankruptcyCount = (string)$bankruptcycount[0];
 					
			$judgementcount = $simpleXML->xpath('//summary[@name = \'judgement-count\']');
 			$submission->JudgementCount = (string)$judgementcount[0];
			 					
 			$defaultsloadedbalance = $simpleXML->xpath('//summary[@name = \'defaults-loaded-balance\']');
 			$submission->DefaultsLoadedBalance = (string)$defaultsloadedbalance[0];
 				
 			$riskodds = $simpleXML->xpath('//risk-odds'); 					
			$submission->RiskOdds = (string)$riskodds[0];
 					
			$relativerisk = $simpleXML->xpath('//relative-risk');
			$submission->RelativeRisk = (string)$relativerisk[0];
 					
			$relativeriskindex = $simpleXML->xpath('//relative-risk-index');
			$submission->RelativeRiskIndex = (string)$relativeriskindex[0];
 					
			$totalenquiries = $simpleXML->xpath('//summary[@name = \'total-enquiries\']'); 					
			$submission->ConsInqScore = (string)$totalenquiries[0];
 					
			$enquiries6 = $simpleXML->xpath('//summary[@name = \'enquiries-6\']'); 					
			$submission->ConsInqLast6Months = (string)$enquiries6[0];
 					
			$drivercheck = $simpleXML->xpath('//summary[@name = \'driver-licence\']');
			$submission->DriverLicenceMatch = (string)$drivercheck[0];
 										
 					//$vedaparser = new VedaParser();
 					//$result = $vedaparser->parse($response); 					
 					//$doSet->push($result);
 					
 				
			$doSet->push($submission);
			
			$submission->write();
			
			return $submission;		
	}
	
	public function RequestVedaXML($submission){
		
		$request = $submission->renderWith("Request");					
 					
 					//echo $request; 	
 					$fp = fopen('request.xml', 'w');
					fwrite($fp, $request);					
					fclose($fp);				
 					
 					$veda = new Veda();
 					$response = $veda->httpsPost('https://cta.vedaxml.com/sys1', $request);
 					
 					$fp = fopen('response.xml', 'w');
					fwrite($fp, $response);					
					fclose($fp);					
					
 					//echo $response;
 					$submission->VedaResponse = $response;
 					$submission->write();					
 					
 					$simpleXML = new SimpleXMLElement($submission->VedaResponse);
 					$errordescription = $simpleXML->xpath('//error-description');
 					if($errordescription){
 						return $errordescription;
 					}
	}

	public function ProcessFHLScore($submission){
		
 					$fico = DataObject::get_one("CreditApplication");
 					
 					if($submission->Deposit){
 						$deposit = $submission->Deposit / $submission->AmountSought;
 					}
 					else{
 						$deposit = 0;
 					}			 		
 							
 					$age = date_parse($submission->dob);
 					$submission->Age = self::agebydate($age['month'], $age['day'], $age['year']);
 					 					
 					$score2 = CreditApplicationForm::$marritalstatusscore[$submission->MarritalStatus] + $submission->vlookup($submission->Age, CreditApplicationForm::$agescore) + $submission->vlookup($submission->Dependents,CreditApplicationForm::$dependentsscore) + $submission->vlookup($submission->ResidenceLength,CreditApplicationForm::$addressscore) + $submission->residency($submission);					 			
 					
 					if($submission->AgeCreditFile > 5){
 						$consinq = $submission->ConsInqScore / 5;
 					}
 					elseif($submission->AgeCreditFile > 0){
 						$consinq = $submission->ConsInqScore / $submission->AgeCreditFile;
 					}
 					else
 						$consinq = 0;
 					
 					$veda = $submission->vlookup($submission->VedaScore,CreditApplicationForm::$vedascore) + $submission->vlookup($submission->AgeCreditFile,CreditApplicationForm::$agecreditscore) + $submission->vlookup($consinq,CreditApplicationForm::$consinqscore) + $submission->vlookup($submission->ConsInqLast6Months,CreditApplicationForm::$consinqlast6monthsscore) + $submission->vlookup($submission->AdverseScore,CreditApplicationForm::$noadversescore);
 					
 				if($submission->NetPay > 0){
 						switch ($submission->NetPayFrequency){
 							case "weekly": 
 							$NetPay = $submission->NetPay;							
 							break;
 							case "fortnightly":
 							$NetPay = $submission->NetPay / 2;
 							break;
 							case "monthly":
 							$NetPay = ($submission->NetPay * 12 )/ 52;
 							break; 							
 							case "yearly":
 							$NetPay = $submission->NetPay / 52;
 							break; 							
 						}
 					} 							
 					
 				$score =  $submission->vlookup($deposit,CreditApplicationForm::$depositscore) + CreditApplicationForm::$termsscore[$submission->Terms] + CreditApplicationForm::$employmentscore[$submission->Employment] + CreditApplicationForm::$occupationscore[$submission->Occupation] + CreditApplicationForm::$timeatworkscore[$submission->TimeAtJob] +  $submission->vlookup($NetPay,CreditApplicationForm::$payscore) +  CreditApplicationForm::$ownpropertyscore[$submission->OwnProperty] ; 					
 					
				//Outgoings 					
 					
 					if($submission->Out1Balance > 0){
 						switch ($submission->Out1Frequency){
 							case "weekly": 							
 							break;
 							case "fortnightly":
 							$submission->Out1Payment = $submission->Out1Payment / 2;
 							break;
 							case "monthly":
 							$submission->Out1Payment = ($submission->Out1Payment * 12 )/ 52;
 							break; 							
 						}
 					} 					
 					if($submission->Out2Balance > 0){
 						switch ($submission->Out2Frequency){
 							case "weekly": 							
 							break;
 							case "fortnightly":
 							$submission->Out2Payment = $submission->Out2Payment / 2;
 							break;
 							case "monthly":
 							$submission->Out2Payment = ($submission->Out2Payment * 12 )/ 52;
 							break; 							
 						}
 					}
 					if($submission->Out3Balance > 0){
 						switch ($submission->Out3Frequency){
 							case "weekly": 							
 							break;
 							case "fortnightly":
 							$submission->Out3Payment = $submission->Out3Payment / 2;
 							break;
 							case "monthly":
 							$submission->Out3Payment = ($submission->Out3Payment * 12 )/ 52;
 							break; 							
 						}
 					}
 					if($submission->Out4Balance > 0){
 						switch ($submission->Out4Frequency){
 							case "weekly": 							
 							break;
 							case "fortnightly":
 							$submission->Out4Payment = $submission->Out4Payment / 2;
 							break;
 							case "monthly":
 							$submission->Out4Payment = ($submission->Out4Payment * 12 )/ 52;
 							break; 							
 						}
 					}
 					if($submission->Out5Balance > 0){
 						switch ($submission->Out5Frequency){
 							case "weekly": 							
 							break;
 							case "fortnightly":
 							$submission->Out5Payment = $submission->Out5Payment / 2;
 							break;
 							case "monthly":
 							$submission->Out5Payment = ($submission->Out5Payment * 12 )/ 52;
 							break; 							
 						}
 					}
 					
 					//  Debt to Assest Ratio
 					$totaldebt = $submission->Out5Balance + $submission->Out4Balance +$submission->Out3Balance +$submission->Out2Balance +$submission->Out1Balance;
 					$submission->DebtToAsset = 0;
 					if(($submission->TotalAssets == 0) && ($totaldebt > 0)){
 						$submission->DebtToAsset = $totaldebt/ (1000 * $totaldebt);
 					}
 					elseif($submission->TotalAssets > 0) {
 						$submission->DebtToAsset = $totaldebt / $submission->TotalAssets;
 					}
	 					
 					$g50 = ((($NetPay - $totaldebt - $submission->LivingExpenses) * 52 )/ 12) * 0.65;
 					
 					$termlength = CreditApplicationForm::$termslength[$submission->Terms];
 					
 					$member = Member::currentUser();
 					if($member->InterestRate != 0)
 						$dealerrate = $member->InterestRate;
 					else
 						$dealerrate = .26;  // get this from the member record

 					// Credit Limit
 					$creditlimit = $submission->PVannuity(12,$termlength,$dealerrate,$g50);
 					$creditlimit = round($creditlimit/100,0) * 100;
 					if($creditlimit < 1000){
 						$creditlimit = 0;
 					}elseif($creditlimit > 5500){
 						$creditlimit = 5500;
 					}

 					$submission->CreditLimit = $creditlimit;		
 					
 					// FHL Score 
 					$fhlscore = (($fico->FICOCreditScoreComponentsPercentage * $fico->TypeofCreditMax * $score) / $fico->FICOCreditScoreComponentsMax) + (($fico->PaymentHistoryPercentage * $fico->TypeofCreditMax  * $score2) / $fico->PaymentHistoryMax)  + (($fico->AmountOwedPercentage  *  $fico->TypeofCreditMax   * $veda) / $fico->AmountOwedMax);
 					$submission->FHLScore = round($fhlscore);
 					
					$submission->write();
					
					return;
					 				
	}
	
	public function money_format($format, $number) 
{ 
    $regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'. 
              '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/'; 
    if (setlocale(LC_MONETARY, 0) == 'C') { 
        setlocale(LC_MONETARY, ''); 
    } 
    $locale = localeconv(); 
    preg_match_all($regex, $format, $matches, PREG_SET_ORDER); 
    foreach ($matches as $fmatch) { 
        $value = floatval($number); 
        $flags = array( 
            'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ? 
                           $match[1] : ' ', 
            'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0, 
            'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ? 
                           $match[0] : '+', 
            'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0, 
            'isleft'    => preg_match('/\-/', $fmatch[1]) > 0 
        ); 
        $width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0; 
        $left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0; 
        $right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits']; 
        $conversion = $fmatch[5]; 

        $positive = true; 
        if ($value < 0) { 
            $positive = false; 
            $value  *= -1; 
        } 
        $letter = $positive ? 'p' : 'n'; 

        $prefix = $suffix = $cprefix = $csuffix = $signal = ''; 

        $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign']; 
        switch (true) { 
            case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+': 
                $prefix = $signal; 
                break; 
            case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+': 
                $suffix = $signal; 
                break; 
            case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+': 
                $cprefix = $signal; 
                break; 
            case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+': 
                $csuffix = $signal; 
                break; 
            case $flags['usesignal'] == '(': 
            case $locale["{$letter}_sign_posn"] == 0: 
                $prefix = '('; 
                $suffix = ')'; 
                break; 
        } 
        if (!$flags['nosimbol']) { 
            $currency = $cprefix . 
                        ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) . 
                        $csuffix; 
        } else { 
            $currency = ''; 
        } 
        $space  = $locale["{$letter}_sep_by_space"] ? ' ' : ''; 

        $value = number_format($value, $right, $locale['mon_decimal_point'], 
                 $flags['nogroup'] ? '' : $locale['mon_thousands_sep']); 
        $value = @explode($locale['mon_decimal_point'], $value); 

        $n = strlen($prefix) + strlen($currency) + strlen($value[0]); 
        if ($left > 0 && $left > $n) { 
            $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0]; 
        } 
        $value = implode($locale['mon_decimal_point'], $value); 
        if ($locale["{$letter}_cs_precedes"]) { 
            $value = $prefix . $currency . $space . $value . $suffix; 
        } else { 
            $value = $prefix . $value . $space . $currency . $suffix; 
        } 
        if ($width > 0) { 
            $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ? 
                     STR_PAD_RIGHT : STR_PAD_LEFT); 
        } 

        $format = str_replace($fmatch[0], $value, $format); 
    } 
    return $format; 
} 


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Goods
     *
     * @param string $goods
     * @return CreditApplicationSubmission
     */
    public function setGoods($goods)
    {
        $this->Goods = $goods;

        return $this;
    }

    /**
     * Get Goods
     *
     * @return string 
     */
    public function getGoods()
    {
        return $this->Goods;
    }

    /**
     * Set AmountSought
     *
     * @param string $amountSought
     * @return CreditApplicationSubmission
     */
    public function setAmountSought($amountSought)
    {
        $this->AmountSought = $amountSought;

        return $this;
    }

    /**
     * Get AmountSought
     *
     * @return string 
     */
    public function getAmountSought()
    {
        return $this->AmountSought;
    }

    /**
     * Set Deposit
     *
     * @param string $deposit
     * @return CreditApplicationSubmission
     */
    public function setDeposit($deposit)
    {
        $this->Deposit = $deposit;

        return $this;
    }

    /**
     * Get Deposit
     *
     * @return string 
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }

    /**
     * Set NetPay
     *
     * @param string $netPay
     * @return CreditApplicationSubmission
     */
    public function setNetPay($netPay)
    {
        $this->NetPay = $netPay;

        return $this;
    }

    /**
     * Get NetPay
     *
     * @return string 
     */
    public function getNetPay()
    {
        return $this->NetPay;
    }

    /**
     * Set TotalAssets
     *
     * @param string $totalAssets
     * @return CreditApplicationSubmission
     */
    public function setTotalAssets($totalAssets)
    {
        $this->TotalAssets = $totalAssets;

        return $this;
    }

    /**
     * Get TotalAssets
     *
     * @return string 
     */
    public function getTotalAssets()
    {
        return $this->TotalAssets;
    }

    /**
     * Set LivingExpenses
     *
     * @param string $livingExpenses
     * @return CreditApplicationSubmission
     */
    public function setLivingExpenses($livingExpenses)
    {
        $this->LivingExpenses = $livingExpenses;

        return $this;
    }

    /**
     * Get LivingExpenses
     *
     * @return string 
     */
    public function getLivingExpenses()
    {
        return $this->LivingExpenses;
    }

    /**
     * Set Out1Balance
     *
     * @param string $out1Balance
     * @return CreditApplicationSubmission
     */
    public function setOut1Balance($out1Balance)
    {
        $this->Out1Balance = $out1Balance;

        return $this;
    }

    /**
     * Get Out1Balance
     *
     * @return string 
     */
    public function getOut1Balance()
    {
        return $this->Out1Balance;
    }

    /**
     * Set Out1Payment
     *
     * @param string $out1Payment
     * @return CreditApplicationSubmission
     */
    public function setOut1Payment($out1Payment)
    {
        $this->Out1Payment = $out1Payment;

        return $this;
    }

    /**
     * Get Out1Payment
     *
     * @return string 
     */
    public function getOut1Payment()
    {
        return $this->Out1Payment;
    }

    /**
     * Set Out2Balance
     *
     * @param string $out2Balance
     * @return CreditApplicationSubmission
     */
    public function setOut2Balance($out2Balance)
    {
        $this->Out2Balance = $out2Balance;

        return $this;
    }

    /**
     * Get Out2Balance
     *
     * @return string 
     */
    public function getOut2Balance()
    {
        return $this->Out2Balance;
    }

    /**
     * Set Out2Payment
     *
     * @param string $out2Payment
     * @return CreditApplicationSubmission
     */
    public function setOut2Payment($out2Payment)
    {
        $this->Out2Payment = $out2Payment;

        return $this;
    }

    /**
     * Get Out2Payment
     *
     * @return string 
     */
    public function getOut2Payment()
    {
        return $this->Out2Payment;
    }

    /**
     * Set Out3Balance
     *
     * @param string $out3Balance
     * @return CreditApplicationSubmission
     */
    public function setOut3Balance($out3Balance)
    {
        $this->Out3Balance = $out3Balance;

        return $this;
    }

    /**
     * Get Out3Balance
     *
     * @return string 
     */
    public function getOut3Balance()
    {
        return $this->Out3Balance;
    }

    /**
     * Set Out3Payment
     *
     * @param string $out3Payment
     * @return CreditApplicationSubmission
     */
    public function setOut3Payment($out3Payment)
    {
        $this->Out3Payment = $out3Payment;

        return $this;
    }

    /**
     * Get Out3Payment
     *
     * @return string 
     */
    public function getOut3Payment()
    {
        return $this->Out3Payment;
    }

    /**
     * Set Out4Balance
     *
     * @param string $out4Balance
     * @return CreditApplicationSubmission
     */
    public function setOut4Balance($out4Balance)
    {
        $this->Out4Balance = $out4Balance;

        return $this;
    }

    /**
     * Get Out4Balance
     *
     * @return string 
     */
    public function getOut4Balance()
    {
        return $this->Out4Balance;
    }

    /**
     * Set Out4Payment
     *
     * @param string $out4Payment
     * @return CreditApplicationSubmission
     */
    public function setOut4Payment($out4Payment)
    {
        $this->Out4Payment = $out4Payment;

        return $this;
    }

    /**
     * Get Out4Payment
     *
     * @return string 
     */
    public function getOut4Payment()
    {
        return $this->Out4Payment;
    }

    /**
     * Set Out5Payment
     *
     * @param string $out5Payment
     * @return CreditApplicationSubmission
     */
    public function setOut5Payment($out5Payment)
    {
        $this->Out5Payment = $out5Payment;

        return $this;
    }

    /**
     * Get Out5Payment
     *
     * @return string 
     */
    public function getOut5Payment()
    {
        return $this->Out5Payment;
    }

    /**
     * Set Out5Frequency
     *
     * @param string $out5Frequency
     * @return CreditApplicationSubmission
     */
    public function setOut5Frequency($out5Frequency)
    {
        $this->Out5Frequency = $out5Frequency;

        return $this;
    }

    /**
     * Get Out5Frequency
     *
     * @return string 
     */
    public function getOut5Frequency()
    {
        return $this->Out5Frequency;
    }

    /**
     * Set Terms
     *
     * @param string $terms
     * @return CreditApplicationSubmission
     */
    public function setTerms($terms)
    {
        $this->Terms = $terms;

        return $this;
    }

    /**
     * Get Terms
     *
     * @return string 
     */
    public function getTerms()
    {
        return $this->Terms;
    }

    /**
     * Set Salutation
     *
     * @param string $salutation
     * @return CreditApplicationSubmission
     */
    public function setSalutation($salutation)
    {
        $this->Salutation = $salutation;

        return $this;
    }

    /**
     * Get Salutation
     *
     * @return string 
     */
    public function getSalutation()
    {
        return $this->Salutation;
    }

    /**
     * Set FirstName
     *
     * @param string $firstName
     * @return CreditApplicationSubmission
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get FirstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set MiddleName
     *
     * @param string $middleName
     * @return CreditApplicationSubmission
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;

        return $this;
    }

    /**
     * Get MiddleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * Set LastName
     *
     * @param string $lastName
     * @return CreditApplicationSubmission
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;

        return $this;
    }

    /**
     * Get LastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set Sex
     *
     * @param string $sex
     * @return CreditApplicationSubmission
     */
    public function setSex($sex)
    {
        $this->Sex = $sex;

        return $this;
    }

    /**
     * Get Sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Set MarritalStatus
     *
     * @param string $marritalStatus
     * @return CreditApplicationSubmission
     */
    public function setMarritalStatus($marritalStatus)
    {
        $this->MarritalStatus = $marritalStatus;

        return $this;
    }

    /**
     * Get MarritalStatus
     *
     * @return string 
     */
    public function getMarritalStatus()
    {
        return $this->MarritalStatus;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return CreditApplicationSubmission
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set DriversLicence
     *
     * @param string $driversLicence
     * @return CreditApplicationSubmission
     */
    public function setDriversLicence($driversLicence)
    {
        $this->DriversLicence = $driversLicence;

        return $this;
    }

    /**
     * Get DriversLicence
     *
     * @return string 
     */
    public function getDriversLicence()
    {
        return $this->DriversLicence;
    }

    /**
     * Set VersionNo
     *
     * @param string $versionNo
     * @return CreditApplicationSubmission
     */
    public function setVersionNo($versionNo)
    {
        $this->VersionNo = $versionNo;

        return $this;
    }

    /**
     * Get VersionNo
     *
     * @return string 
     */
    public function getVersionNo()
    {
        return $this->VersionNo;
    }

    /**
     * Set Dependents
     *
     * @param string $dependents
     * @return CreditApplicationSubmission
     */
    public function setDependents($dependents)
    {
        $this->Dependents = $dependents;

        return $this;
    }

    /**
     * Get Dependents
     *
     * @return string 
     */
    public function getDependents()
    {
        return $this->Dependents;
    }

    /**
     * Set StreetNumber
     *
     * @param string $streetNumber
     * @return CreditApplicationSubmission
     */
    public function setStreetNumber($streetNumber)
    {
        $this->StreetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get StreetNumber
     *
     * @return string 
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    /**
     * Set StreetName
     *
     * @param string $streetName
     * @return CreditApplicationSubmission
     */
    public function setStreetName($streetName)
    {
        $this->StreetName = $streetName;

        return $this;
    }

    /**
     * Get StreetName
     *
     * @return string 
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * Set StreetType
     *
     * @param string $streetType
     * @return CreditApplicationSubmission
     */
    public function setStreetType($streetType)
    {
        $this->StreetType = $streetType;

        return $this;
    }

    /**
     * Get StreetType
     *
     * @return string 
     */
    public function getStreetType()
    {
        return $this->StreetType;
    }

    /**
     * Set Suburb
     *
     * @param string $suburb
     * @return CreditApplicationSubmission
     */
    public function setSuburb($suburb)
    {
        $this->Suburb = $suburb;

        return $this;
    }

    /**
     * Get Suburb
     *
     * @return string 
     */
    public function getSuburb()
    {
        return $this->Suburb;
    }

    /**
     * Set City
     *
     * @param string $city
     * @return CreditApplicationSubmission
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * Get City
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set ResidenceLength
     *
     * @param integer $residenceLength
     * @return CreditApplicationSubmission
     */
    public function setResidenceLength($residenceLength)
    {
        $this->ResidenceLength = $residenceLength;

        return $this;
    }

    /**
     * Get ResidenceLength
     *
     * @return integer 
     */
    public function getResidenceLength()
    {
        return $this->ResidenceLength;
    }

    /**
     * Set PrevStreetNumber
     *
     * @param string $prevStreetNumber
     * @return CreditApplicationSubmission
     */
    public function setPrevStreetNumber($prevStreetNumber)
    {
        $this->PrevStreetNumber = $prevStreetNumber;

        return $this;
    }

    /**
     * Get PrevStreetNumber
     *
     * @return string 
     */
    public function getPrevStreetNumber()
    {
        return $this->PrevStreetNumber;
    }

    /**
     * Set PrevStreetName
     *
     * @param string $prevStreetName
     * @return CreditApplicationSubmission
     */
    public function setPrevStreetName($prevStreetName)
    {
        $this->PrevStreetName = $prevStreetName;

        return $this;
    }

    /**
     * Get PrevStreetName
     *
     * @return string 
     */
    public function getPrevStreetName()
    {
        return $this->PrevStreetName;
    }

    /**
     * Set PrevStreetType
     *
     * @param string $prevStreetType
     * @return CreditApplicationSubmission
     */
    public function setPrevStreetType($prevStreetType)
    {
        $this->PrevStreetType = $prevStreetType;

        return $this;
    }

    /**
     * Get PrevStreetType
     *
     * @return string 
     */
    public function getPrevStreetType()
    {
        return $this->PrevStreetType;
    }

    /**
     * Set PrevSuburb
     *
     * @param string $prevSuburb
     * @return CreditApplicationSubmission
     */
    public function setPrevSuburb($prevSuburb)
    {
        $this->PrevSuburb = $prevSuburb;

        return $this;
    }

    /**
     * Get PrevSuburb
     *
     * @return string 
     */
    public function getPrevSuburb()
    {
        return $this->PrevSuburb;
    }

    /**
     * Set PrevCity
     *
     * @param string $prevCity
     * @return CreditApplicationSubmission
     */
    public function setPrevCity($prevCity)
    {
        $this->PrevCity = $prevCity;

        return $this;
    }

    /**
     * Get PrevCity
     *
     * @return string 
     */
    public function getPrevCity()
    {
        return $this->PrevCity;
    }

    /**
     * Set AreaCode
     *
     * @param string $areaCode
     * @return CreditApplicationSubmission
     */
    public function setAreaCode($areaCode)
    {
        $this->AreaCode = $areaCode;

        return $this;
    }

    /**
     * Get AreaCode
     *
     * @return string 
     */
    public function getAreaCode()
    {
        return $this->AreaCode;
    }

    /**
     * Set Phone
     *
     * @param string $phone
     * @return CreditApplicationSubmission
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;

        return $this;
    }

    /**
     * Get Phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return CreditApplicationSubmission
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set ReferenceName
     *
     * @param string $referenceName
     * @return CreditApplicationSubmission
     */
    public function setReferenceName($referenceName)
    {
        $this->ReferenceName = $referenceName;

        return $this;
    }

    /**
     * Get ReferenceName
     *
     * @return string 
     */
    public function getReferenceName()
    {
        return $this->ReferenceName;
    }

    /**
     * Set ReferenceRelationship
     *
     * @param string $referenceRelationship
     * @return CreditApplicationSubmission
     */
    public function setReferenceRelationship($referenceRelationship)
    {
        $this->ReferenceRelationship = $referenceRelationship;

        return $this;
    }

    /**
     * Get ReferenceRelationship
     *
     * @return string 
     */
    public function getReferenceRelationship()
    {
        return $this->ReferenceRelationship;
    }

    /**
     * Set ReferencePhone
     *
     * @param string $referencePhone
     * @return CreditApplicationSubmission
     */
    public function setReferencePhone($referencePhone)
    {
        $this->ReferencePhone = $referencePhone;

        return $this;
    }

    /**
     * Get ReferencePhone
     *
     * @return string 
     */
    public function getReferencePhone()
    {
        return $this->ReferencePhone;
    }

    /**
     * Set Employment
     *
     * @param string $employment
     * @return CreditApplicationSubmission
     */
    public function setEmployment($employment)
    {
        $this->Employment = $employment;

        return $this;
    }

    /**
     * Get Employment
     *
     * @return string 
     */
    public function getEmployment()
    {
        return $this->Employment;
    }

    /**
     * Set Employer
     *
     * @param string $employer
     * @return CreditApplicationSubmission
     */
    public function setEmployer($employer)
    {
        $this->Employer = $employer;

        return $this;
    }

    /**
     * Get Employer
     *
     * @return string 
     */
    public function getEmployer()
    {
        return $this->Employer;
    }

    /**
     * Set Occupation
     *
     * @param string $occupation
     * @return CreditApplicationSubmission
     */
    public function setOccupation($occupation)
    {
        $this->Occupation = $occupation;

        return $this;
    }

    /**
     * Get Occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->Occupation;
    }

    /**
     * Set TimeAtJob
     *
     * @param string $timeAtJob
     * @return CreditApplicationSubmission
     */
    public function setTimeAtJob($timeAtJob)
    {
        $this->TimeAtJob = $timeAtJob;

        return $this;
    }

    /**
     * Get TimeAtJob
     *
     * @return string 
     */
    public function getTimeAtJob()
    {
        return $this->TimeAtJob;
    }

    /**
     * Set NetPayFrequency
     *
     * @param string $netPayFrequency
     * @return CreditApplicationSubmission
     */
    public function setNetPayFrequency($netPayFrequency)
    {
        $this->NetPayFrequency = $netPayFrequency;

        return $this;
    }

    /**
     * Get NetPayFrequency
     *
     * @return string 
     */
    public function getNetPayFrequency()
    {
        return $this->NetPayFrequency;
    }

    /**
     * Set OwnProperty
     *
     * @param string $ownProperty
     * @return CreditApplicationSubmission
     */
    public function setOwnProperty($ownProperty)
    {
        $this->OwnProperty = $ownProperty;

        return $this;
    }

    /**
     * Get OwnProperty
     *
     * @return string 
     */
    public function getOwnProperty()
    {
        return $this->OwnProperty;
    }

    /**
     * Set consent
     *
     * @param boolean $consent
     * @return CreditApplicationSubmission
     */
    public function setConsent($consent)
    {
        $this->consent = $consent;

        return $this;
    }

    /**
     * Get consent
     *
     * @return boolean 
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Set ConsInqLast6Months
     *
     * @param string $consInqLast6Months
     * @return CreditApplicationSubmission
     */
    public function setConsInqLast6Months($consInqLast6Months)
    {
        $this->ConsInqLast6Months = $consInqLast6Months;

        return $this;
    }

    /**
     * Get ConsInqLast6Months
     *
     * @return string 
     */
    public function getConsInqLast6Months()
    {
        return $this->ConsInqLast6Months;
    }

    /**
     * Set ConsInqScore
     *
     * @param integer $consInqScore
     * @return CreditApplicationSubmission
     */
    public function setConsInqScore($consInqScore)
    {
        $this->ConsInqScore = $consInqScore;

        return $this;
    }

    /**
     * Get ConsInqScore
     *
     * @return integer 
     */
    public function getConsInqScore()
    {
        return $this->ConsInqScore;
    }

    /**
     * Set AgeCreditFile
     *
     * @param integer $ageCreditFile
     * @return CreditApplicationSubmission
     */
    public function setAgeCreditFile($ageCreditFile)
    {
        $this->AgeCreditFile = $ageCreditFile;

        return $this;
    }

    /**
     * Get AgeCreditFile
     *
     * @return integer 
     */
    public function getAgeCreditFile()
    {
        return $this->AgeCreditFile;
    }

    /**
     * Set VedaScore
     *
     * @param integer $vedaScore
     * @return CreditApplicationSubmission
     */
    public function setVedaScore($vedaScore)
    {
        $this->VedaScore = $vedaScore;

        return $this;
    }

    /**
     * Get VedaScore
     *
     * @return integer 
     */
    public function getVedaScore()
    {
        return $this->VedaScore;
    }

    /**
     * Set AdverseScore
     *
     * @param string $adverseScore
     * @return CreditApplicationSubmission
     */
    public function setAdverseScore($adverseScore)
    {
        $this->AdverseScore = $adverseScore;

        return $this;
    }

    /**
     * Get AdverseScore
     *
     * @return string 
     */
    public function getAdverseScore()
    {
        return $this->AdverseScore;
    }

    /**
     * Set Out1Frequency
     *
     * @param string $out1Frequency
     * @return CreditApplicationSubmission
     */
    public function setOut1Frequency($out1Frequency)
    {
        $this->Out1Frequency = $out1Frequency;

        return $this;
    }

    /**
     * Get Out1Frequency
     *
     * @return string 
     */
    public function getOut1Frequency()
    {
        return $this->Out1Frequency;
    }

    /**
     * Set Out1Provider
     *
     * @param string $out1Provider
     * @return CreditApplicationSubmission
     */
    public function setOut1Provider($out1Provider)
    {
        $this->Out1Provider = $out1Provider;

        return $this;
    }

    /**
     * Get Out1Provider
     *
     * @return string 
     */
    public function getOut1Provider()
    {
        return $this->Out1Provider;
    }

    /**
     * Set Out2Frequency
     *
     * @param string $out2Frequency
     * @return CreditApplicationSubmission
     */
    public function setOut2Frequency($out2Frequency)
    {
        $this->Out2Frequency = $out2Frequency;

        return $this;
    }

    /**
     * Get Out2Frequency
     *
     * @return string 
     */
    public function getOut2Frequency()
    {
        return $this->Out2Frequency;
    }

    /**
     * Set Out2Provider
     *
     * @param string $out2Provider
     * @return CreditApplicationSubmission
     */
    public function setOut2Provider($out2Provider)
    {
        $this->Out2Provider = $out2Provider;

        return $this;
    }

    /**
     * Get Out2Provider
     *
     * @return string 
     */
    public function getOut2Provider()
    {
        return $this->Out2Provider;
    }

    /**
     * Set Out3Frequency
     *
     * @param string $out3Frequency
     * @return CreditApplicationSubmission
     */
    public function setOut3Frequency($out3Frequency)
    {
        $this->Out3Frequency = $out3Frequency;

        return $this;
    }

    /**
     * Get Out3Frequency
     *
     * @return string 
     */
    public function getOut3Frequency()
    {
        return $this->Out3Frequency;
    }

    /**
     * Set Out3Provider
     *
     * @param string $out3Provider
     * @return CreditApplicationSubmission
     */
    public function setOut3Provider($out3Provider)
    {
        $this->Out3Provider = $out3Provider;

        return $this;
    }

    /**
     * Get Out3Provider
     *
     * @return string 
     */
    public function getOut3Provider()
    {
        return $this->Out3Provider;
    }

    /**
     * Set Out4Frequency
     *
     * @param string $out4Frequency
     * @return CreditApplicationSubmission
     */
    public function setOut4Frequency($out4Frequency)
    {
        $this->Out4Frequency = $out4Frequency;

        return $this;
    }

    /**
     * Get Out4Frequency
     *
     * @return string 
     */
    public function getOut4Frequency()
    {
        return $this->Out4Frequency;
    }

    /**
     * Set Out4Provider
     *
     * @param string $out4Provider
     * @return CreditApplicationSubmission
     */
    public function setOut4Provider($out4Provider)
    {
        $this->Out4Provider = $out4Provider;

        return $this;
    }

    /**
     * Get Out4Provider
     *
     * @return string 
     */
    public function getOut4Provider()
    {
        return $this->Out4Provider;
    }

    /**
     * Set Out5Balance
     *
     * @param string $out5Balance
     * @return CreditApplicationSubmission
     */
    public function setOut5Balance($out5Balance)
    {
        $this->Out5Balance = $out5Balance;

        return $this;
    }

    /**
     * Get Out5Balance
     *
     * @return string 
     */
    public function getOut5Balance()
    {
        return $this->Out5Balance;
    }

    /**
     * Set Out5Provider
     *
     * @param string $out5Provider
     * @return CreditApplicationSubmission
     */
    public function setOut5Provider($out5Provider)
    {
        $this->Out5Provider = $out5Provider;

        return $this;
    }

    /**
     * Get Out5Provider
     *
     * @return string 
     */
    public function getOut5Provider()
    {
        return $this->Out5Provider;
    }

    /**
     * Set VedaResponse
     *
     * @param string $vedaResponse
     * @return CreditApplicationSubmission
     */
    public function setVedaResponse($vedaResponse)
    {
        $this->VedaResponse = $vedaResponse;

        return $this;
    }

    /**
     * Get VedaResponse
     *
     * @return string 
     */
    public function getVedaResponse()
    {
        return $this->VedaResponse;
    }

    /**
     * Set DriverLicenceMatch
     *
     * @param string $driverLicenceMatch
     * @return CreditApplicationSubmission
     */
    public function setDriverLicenceMatch($driverLicenceMatch)
    {
        $this->DriverLicenceMatch = $driverLicenceMatch;

        return $this;
    }

    /**
     * Get DriverLicenceMatch
     *
     * @return string 
     */
    public function getDriverLicenceMatch()
    {
        return $this->DriverLicenceMatch;
    }

    /**
     * Set BankruptcyCount
     *
     * @param integer $bankruptcyCount
     * @return CreditApplicationSubmission
     */
    public function setBankruptcyCount($bankruptcyCount)
    {
        $this->BankruptcyCount = $bankruptcyCount;

        return $this;
    }

    /**
     * Get BankruptcyCount
     *
     * @return integer 
     */
    public function getBankruptcyCount()
    {
        return $this->BankruptcyCount;
    }

    /**
     * Set JudgementCount
     *
     * @param integer $judgementCount
     * @return CreditApplicationSubmission
     */
    public function setJudgementCount($judgementCount)
    {
        $this->JudgementCount = $judgementCount;

        return $this;
    }

    /**
     * Get JudgementCount
     *
     * @return integer 
     */
    public function getJudgementCount()
    {
        return $this->JudgementCount;
    }

    /**
     * Set DefaultsLoadedBalance
     *
     * @param string $defaultsLoadedBalance
     * @return CreditApplicationSubmission
     */
    public function setDefaultsLoadedBalance($defaultsLoadedBalance)
    {
        $this->DefaultsLoadedBalance = $defaultsLoadedBalance;

        return $this;
    }

    /**
     * Get DefaultsLoadedBalance
     *
     * @return string 
     */
    public function getDefaultsLoadedBalance()
    {
        return $this->DefaultsLoadedBalance;
    }

    /**
     * Set RiskOdds
     *
     * @param string $riskOdds
     * @return CreditApplicationSubmission
     */
    public function setRiskOdds($riskOdds)
    {
        $this->RiskOdds = $riskOdds;

        return $this;
    }

    /**
     * Get RiskOdds
     *
     * @return string 
     */
    public function getRiskOdds()
    {
        return $this->RiskOdds;
    }

    /**
     * Set RelativeRisk
     *
     * @param string $relativeRisk
     * @return CreditApplicationSubmission
     */
    public function setRelativeRisk($relativeRisk)
    {
        $this->RelativeRisk = $relativeRisk;

        return $this;
    }

    /**
     * Get RelativeRisk
     *
     * @return string 
     */
    public function getRelativeRisk()
    {
        return $this->RelativeRisk;
    }

    /**
     * Set RelativeRiskIndex
     *
     * @param string $relativeRiskIndex
     * @return CreditApplicationSubmission
     */
    public function setRelativeRiskIndex($relativeRiskIndex)
    {
        $this->RelativeRiskIndex = $relativeRiskIndex;

        return $this;
    }

    /**
     * Get RelativeRiskIndex
     *
     * @return string 
     */
    public function getRelativeRiskIndex()
    {
        return $this->RelativeRiskIndex;
    }

    /**
     * Set FHLScore
     *
     * @param integer $fHLScore
     * @return CreditApplicationSubmission
     */
    public function setFHLScore($fHLScore)
    {
        $this->FHLScore = $fHLScore;

        return $this;
    }

    /**
     * Get FHLScore
     *
     * @return integer 
     */
    public function getFHLScore()
    {
        return $this->FHLScore;
    }

    /**
     * Set CreditLimit
     *
     * @param string $creditLimit
     * @return CreditApplicationSubmission
     */
    public function setCreditLimit($creditLimit)
    {
        $this->CreditLimit = $creditLimit;

        return $this;
    }

    /**
     * Get CreditLimit
     *
     * @return string 
     */
    public function getCreditLimit()
    {
        return $this->CreditLimit;
    }

    /**
     * Set DebtToAsset
     *
     * @param string $debtToAsset
     * @return CreditApplicationSubmission
     */
    public function setDebtToAsset($debtToAsset)
    {
        $this->DebtToAsset = $debtToAsset;

        return $this;
    }

    /**
     * Get DebtToAsset
     *
     * @return string 
     */
    public function getDebtToAsset()
    {
        return $this->DebtToAsset;
    }

    /**
     * Set Age
     *
     * @param integer $age
     * @return CreditApplicationSubmission
     */
    public function setAge($age)
    {
        $this->Age = $age;

        return $this;
    }

    /**
     * Get Age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Set Approval
     *
     * @param boolean $approval
     * @return CreditApplicationSubmission
     */
    public function setApproval($approval)
    {
        $this->Approval = $approval;

        return $this;
    }

    /**
     * Get Approval
     *
     * @return boolean 
     */
    public function getApproval()
    {
        return $this->Approval;
    }

    /**
     * Set Insurance
     *
     * @param boolean $insurance
     * @return CreditApplicationSubmission
     */
    public function setInsurance($insurance)
    {
        $this->Insurance = $insurance;

        return $this;
    }

    /**
     * Get Insurance
     *
     * @return boolean 
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }


    /**
     * Add outgoings
     *
     * @param \Acme\DemoBundle\Entity\OutGoing $outgoings
     * @return CreditApplicationSubmission
     */
    public function addOutgoing(\Acme\DemoBundle\Entity\OutGoing $outgoings)
    {
        $this->outgoings[] = $outgoings;
	$outgoings->setCreditApplicationSubmission($this);
        return $this;
    }

    /**
     * Remove outgoings
     *
     * @param \Acme\DemoBundle\Entity\OutGoing $outgoings
     */
    public function removeOutgoing(\Acme\DemoBundle\Entity\OutGoing $outgoings)
    {
        $this->outgoings->removeElement($outgoings);
    }

    /**
     * Get outgoings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOutgoings()
    {
        return $this->outgoings;
    }
}
