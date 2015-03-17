<?php

namespace Acme\DemoBundle\Controller;
class PPSRFunctions{

function build_transaction($ppsr_xml,$t_type,$t_by){
	$transaction = $ppsr_xml->createElement('transaction');
	$type = $ppsr_xml->createAttribute('type');
	$type->value =$t_type;
	$transaction->appendChild($type);
	
	if ($t_type == 'PPSR_SEARCH' or $t_type == 'PPSR_SEARCH_DETAILS'){
		$valid = $ppsr_xml->createAttribute('are_you_performing_search_for_legitimate_reasons');
		$valid->value ="Y";
		$transaction->appendChild($valid);		
	}
	 
	if ($t_type == 'PPSR_SEARCH' ){
		$by = $ppsr_xml->createAttribute('by');
		$by->value =$t_by;
		$transaction->appendChild($by);		
	}	
	if ($t_type == 'PPSR_SEARCH_DETAILS' ){
		$previous_search_id = $ppsr_xml->createAttribute('previous_search_id');
		$previous_search_id->value = $t_by;
		$transaction->appendChild($previous_search_id);		
	}
	if ($t_type = 'B2B_REQUEST_STATUS'){
		return $transaction;
	}else{
		$client_ref = $ppsr_xml->createAttribute('client_ref');
		$client_ref->value = date(DATE_RFC822);
		$transaction->appendChild($client_ref);
	}

	
return $transaction;
}

function build_finance_statement($ppsr_xml){
	$finance_statement = $ppsr_xml->createElement('finance_statement');
	$seq = $ppsr_xml->createAttribute('seq');	
	$seq->value = '1';
	$finance_statement->appendChild($seq);	
	$expiry_date = $ppsr_xml->createAttribute('expiry_date');
	$expiry_date->value = '12-12-2015';
	$finance_statement->appendChild($expiry_date);
	
return $finance_statement;

}

function build_search_details( $ppsr_xml,$fs_value,$search_id){
	$transaction = build_transaction($ppsr_xml,"PPSR_SEARCH_DETAILS", $search_id);
	$fs = $ppsr_xml->createElement('fs');
	
	$fs_no = $ppsr_xml->createAttribute('fs_no');
	$fs_no->value = $fs_value;
	$fs->appendChild($fs_no);
	
	$transaction->appendChild($fs);
	
	$ppsr_xml->appendChild($transaction);
	
	if($_GET['validate'] == '1'){
		if($ppsr_xml->validate())
			echo "Seach File is valid\n";
	}		
//echo $ppsr_xml->saveXML();

return $ppsr_xml;	
	
}

function build_fs_element($ppsr_xml,$fs,$no){
	$finance_statement = $ppsr_xml->createElement('finance_statement');
	$fs_version = $ppsr_xml->createAttribute('fs_version');	
	
	if($no ==1){
		$fs_number = $ppsr_xml->createAttribute('fs_no');
	}else{	
		$fs_number = $ppsr_xml->createAttribute('fs_number');
		$fs_version->value = $fs->fs_version;
		$finance_statement->appendChild($fs_version);	
	}	
	$fs_number->value = $fs->fs_no;
	$finance_statement->appendChild($fs_number);
	$fs_pin = $ppsr_xml->createAttribute('fs_pin');
	$fs_pin->value = $fs->fs_pin;
	$finance_statement->appendChild($fs_pin);
	$sp_group = $ppsr_xml->createAttribute('sp_group');
	$sp_group->value = $fs->spg_id;
	$finance_statement->appendChild($sp_group);
	$sp_group_pwd = $ppsr_xml->createAttribute('sp_group_pwd');
	$sp_group_pwd->value = $fs->spg_password;
	$finance_statement->appendChild($sp_group_pwd);
	
return $finance_statement;
}

function get_secured_party_details($ppsr_xml,$fs){
	$secured_party_details = $ppsr_xml->createElement('secured_party_details');
	
	$secured_party_group = build_secured_party_group($ppsr_xml,$fs);
	
	$secured_party_details->appendChild($secured_party_group);		

return $secured_party_details;
}
function build_secured_party_group($ppsr_xml,$fs){

$secured_party_group = $ppsr_xml->createElement('secured_party_group');
	$spg_id = $ppsr_xml->createAttribute('id');
	$spg_id->value = $fs->spg_id;
	$spg_pwd = $ppsr_xml->createAttribute('pwd');
	$spg_pwd->value = $fs->spg_password;
	$secured_party_group->appendChild($spg_id);
	$secured_party_group->appendChild($spg_pwd);
	
return 	$secured_party_group;
}
function get_debtor($ppsr_xml){
		$debtor = $ppsr_xml->createElement('debtor');	
		$seq = $ppsr_xml->createAttribute('seq');
		$seq->value = 1;
		$debtor->appendChild($seq);
		$db_type = $ppsr_xml->createAttribute('type');
		$db_type->value = 'O';
		$debtor->appendChild($db_type);
		
		$email_address = $ppsr_xml->createElement('email_address','fred.test@companies.govt.nz');	
		$fax_number = $ppsr_xml->createElement('fax_number','(09)913-4210');	
		$contact_phone = $ppsr_xml->createElement('contact_phone','(09)913-4222');	
		$reference = $ppsr_xml->createElement('reference','3ljk22');	
		
		$address_details = $ppsr_xml->createElement('address_details');	
		$contact_address = make_address($ppsr_xml,'contact_address','10 Long Street','Takapuna','Auckland','0622','NZ');
		$mailing_address = make_address($ppsr_xml,'mailing_address','11 some ave','Milford','Christchurch','0622','AU');
		
		$address_details->appendChild($contact_address);
		$address_details->appendChild($mailing_address);		
		
		$db_organisation = $ppsr_xml->createElement('db_organisation');	
		$db_org_type = $ppsr_xml->createAttribute('type');
		$db_org_type->value = 'BDS';
		$db_org_name = $ppsr_xml->createAttribute('name');
		$db_org_name->value ='TEST';
		$db_org_coid = $ppsr_xml->createAttribute('company_number');
		$db_org_coid->value = '134';
		
		$db_organisation->appendChild($db_org_type);
		$db_organisation->appendChild($db_org_name);
		$db_organisation->appendChild($db_org_coid);
		
		$db_person_acting = build_db_person_acting($ppsr_xml,'Fred','William Manfred','Mann');	
		
		$db_person_acting->appendChild($email_address);
		$db_person_acting->appendChild($fax_number);
		$db_person_acting->appendChild($contact_phone);
		$db_person_acting->appendChild($address_details->cloneNode(true));	
		
		$db_organisation->appendChild($db_person_acting);
		
		$debtor->appendChild($email_address->cloneNode(true));
		$debtor->appendChild($fax_number->cloneNode(true));
		$debtor->appendChild($contact_phone->cloneNode(true));
		$debtor->appendChild($address_details->cloneNode(true));
		$debtor->appendChild($db_organisation);
		
return $debtor;
}

function get_amend_debtor($ppsr_xml, $id){

	global $firstname, $middlename, $lastname;
	
		$debtor = $ppsr_xml->createElement('debtor');	
		$db_id = $ppsr_xml->createAttribute('id');
		$db_id->value = $id;
		$debtor->appendChild($db_id);
		
		$db_type = $ppsr_xml->createAttribute('type');
		$db_type->value = 'O';
		$debtor->appendChild($db_type);
		
		$email_address = $ppsr_xml->createElement('email_address','joe.test@companies.govt.nz');	
		$fax_number = $ppsr_xml->createElement('fax_number','(09)555-4210');	
		$contact_phone = $ppsr_xml->createElement('contact_phone','(09)555-4222');	
		$reference = $ppsr_xml->createElement('reference','Free Format Reflection');	
		
		$address_details = $ppsr_xml->createElement('address_details');	
		$contact_address = make_address($ppsr_xml,'contact_address','10 Long Street','Takapuna','Auckland','10258','NZ');
		$mailing_address = make_address($ppsr_xml,'mailing_address','11 some ave','Milford','Christchurch','0622','AU');
		
		$address_details->appendChild($contact_address);
		$address_details->appendChild($mailing_address);		
		
		$db_organisation = $ppsr_xml->createElement('db_organisation');	
		$db_org_type = $ppsr_xml->createAttribute('type');
		$db_org_type->value = 'BDS';
		$db_org_name = $ppsr_xml->createAttribute('name');
		$db_org_name->value ='TEST';
		$db_org_coid = $ppsr_xml->createAttribute('company_number');
		$db_org_coid->value = '134';
		
		$db_organisation->appendChild($db_org_type);
		$db_organisation->appendChild($db_org_name);
		$db_organisation->appendChild($db_org_coid);
		
		$db_person_acting = build_db_person_acting($ppsr_xml,$firstname,$middlename,$lastname);		
		
		$db_person_acting->appendChild($email_address);
		$db_person_acting->appendChild($fax_number);
		$db_person_acting->appendChild($contact_phone);
		$db_person_acting->appendChild($address_details->cloneNode(true));	
		
		$db_organisation->appendChild($db_person_acting);
		
		$debtor->appendChild($email_address->cloneNode(true));
		$debtor->appendChild($fax_number->cloneNode(true));
		$debtor->appendChild($contact_phone->cloneNode(true));
		$debtor->appendChild($address_details->cloneNode(true));
		$debtor->appendChild($db_organisation);

return $debtor;
}

function build_db_person_acting($ppsr_xml,$firstname,$middlename,$lastname){
	$db_person_acting = $ppsr_xml->createElement('db_person_acting');
		
		$first_name = $ppsr_xml->createElement('first_name',$firstname);
		$middle_names = $ppsr_xml->createElement('middle_names',$middlename);
		$last_name = $ppsr_xml->createElement('last_name',$lastname);
		
		$db_person_acting->appendChild($first_name);
		$db_person_acting->appendChild($middle_names);
		$db_person_acting->appendChild($last_name);
		
return $db_person_acting;
}

function make_address($ppsr_xml,$type,$line1,$suburb,$city,$postcode,$country){

	$address = $ppsr_xml->createElement($type);
	
	$address_line1 = $ppsr_xml->createElement('line1',$line1);	
	$address->appendChild($address_line1);
	
	$address_suburb = $ppsr_xml->createElement('suburb',$suburb);	
	$address->appendChild($address_suburb);
	
	$address_city = $ppsr_xml->createElement('city_town',$city);	
	$address->appendChild($address_city);
	
	$address_postcode = $ppsr_xml->createElement('postcode',$postcode);	
	$address->appendChild($address_postcode);
	
	$address_country = $ppsr_xml->createElement('country_code',$country);	
	$address->appendChild($address_country);
	
	return $address;
}

function build_collateral($ppsr_xml,$collateral_type,$description){
	$collateral = $ppsr_xml->createElement('collateral');
	$type = $ppsr_xml->createAttribute('type');
	$type->value = $collateral_type;
	$seq = $ppsr_xml->createAttribute('seq');
	$seq->value = '1';
	$collateral->appendChild($type);
	$collateral->appendChild($seq);
	
	$co_description = $ppsr_xml->createElement('co_description',$description);
	$collateral->appendChild($co_description);
	
	return $collateral;
}

function build_co_item($ppsr_xml,$seq,$description,$make,$model,$year,$colour,$vin,$chassis,$registration_number,$registration_mark,$aircraft_class,$identifying_numbers,$manufacturer_serial){

$co_item = $ppsr_xml->createElement('co_item');
	$co_item_seq = $ppsr_xml->createAttribute('seq');
	$co_item_seq->value = $seq;
	
	$coi_description = $ppsr_xml->createElement('coi_description',$description);
	$co_item_make = $ppsr_xml->createElement('make',$make);
	$co_item_model = $ppsr_xml->createElement('model',$model);
	$co_item_year = $ppsr_xml->createElement('year',$year);
	$co_item_colour = $ppsr_xml->createElement('colour',$colour);
	$co_item_vin = $ppsr_xml->createElement('vin',$vin);
	$co_item_chassis = $ppsr_xml->createElement('chassis',$chassis);
	$co_item_registration_number = $ppsr_xml->createElement('registration_number',$registration_number);
	$co_item_registration_mark = $ppsr_xml->createElement('registration_mark',$registration_mark);	
	$co_item_aircraft_class = $ppsr_xml->createElement('aircraft_class',$aircraft_class);	
	$co_item_identifying_numbers = $ppsr_xml->createElement('identifying_numbers',$identifying_numbers);
	$co_item_manufacturer_serial = $ppsr_xml->createElement('manufacturer_serial',$manufacturer_serial);

	$co_item->appendChild($co_item_seq);
	if ($description)
	$co_item->appendChild($coi_description);
	if ($make)
	$co_item->appendChild($co_item_make);
	if ($model)
	$co_item->appendChild($co_item_model);
	if ($year)
	$co_item->appendChild($co_item_year);
	if ($colour)
	$co_item->appendChild($co_item_colour);
	if ($vin)
	$co_item->appendChild($co_item_vin);
	if ($chassis)
	$co_item->appendChild($co_item_chassis);
	if ($registration_number)
	$co_item->appendChild($co_item_registration_number);
	if($registration_mark)
	$co_item->appendChild($co_item_registration_mark);
	if($aircraft_class)
	$co_item->appendChild($co_item_aircraft_class);
	if($manufacturer_serial)
	$co_item->appendChild($co_item_manufacturer_serial);
	if ($identifying_numbers)
	$co_item->appendChild($co_item_identifying_numbers);	
	
	return $co_item;
}

function build_FS_search($ppsr_xml,$fs_value){

	$transaction = build_transaction($ppsr_xml,"PPSR_SEARCH","FINANCE_STATEMENT" );

	$finance_statement_criteria = $ppsr_xml->createElement('finance_statement_criteria');
	$fs = $ppsr_xml->createElement('fs');
	$fs_no = $ppsr_xml->createAttribute('fs_no');
	$fs_no->value = "FR09T2X0V438M440";
	$fs_no->value = "FX2A777D0765F59D";
	$fs_no->value = "FR8M39F1V595892S";
	$fs_no->value = $fs_value;

	$fs->appendChild($fs_no);

	$finance_statement_criteria->appendChild($fs);

	$transaction->appendChild($finance_statement_criteria);
	$ppsr_xml->appendChild($transaction);
	
if($ppsr_xml->validate())
	echo "Seach File is valid\n";
	
//echo $ppsr_xml->saveXML();

return $ppsr_xml;
}


function build_debtor_search($ppsr_xml,$debtor_search){

$transaction = build_transaction($ppsr_xml,"PPSR_SEARCH","DEBTOR" );
$db_criteria = $ppsr_xml->createElement('debtor_criteria');

	if($debtor_search->type == 'ORG'){
		$db_organisation = $ppsr_xml->createElement('db_organisation');		
		if($debtor_search->company_number){
			$company_number = $ppsr_xml->createElement('company_number',$debtor_search->company_number);
			$db_organisation->appendChild($company_number);
		}		
		if($debtor_search->org_name){
			$org_name = $ppsr_xml->createElement('org_name',$debtor_search->org_name);
			$db_organisation->appendChild($org_name);
		}		
		
		if($debtor_search->db_person_acting){
			$person = build_db_person_acting($ppsr_xml,$debtor_search->first_name,$debtor_search->middle_names,$debtor_search->last_name);
			$city_town = $ppsr_xml->createElement('city_town',$debtor_search->city_town);
			$person->appendChild($city_town);
			$db_organisation->appendChild($person);
		}
				
		$db_criteria->appendChild($db_organisation);
		
		if($debtor_search->org_city_town){
			$city_town = $ppsr_xml->createElement('city_town',$debtor_search->org_city_town);
			$db_criteria->appendChild($city_town);	
		}
		
	}
	else{
		$db_person = $ppsr_xml->createElement('db_person');
		$first_name = $ppsr_xml->createElement('first_name',$debtor_search->first_name);
		$middle_names = $ppsr_xml->createElement('middle_names',$debtor_search->middle_names);
		$last_name = $ppsr_xml->createElement('last_name',$debtor_search->last_name);
		$city_town = $ppsr_xml->createElement('city_town',$debtor_search->city_town);
		$dob = $ppsr_xml->createElement('date_of_birth',$debtor_search->dob);
		$db_person->appendChild($first_name);
		$db_person->appendChild($middle_names);
		$db_person->appendChild($last_name);			
		
		$db_criteria->appendChild($db_person);
		$db_criteria->appendChild($city_town);
	}

	$transaction->appendChild($db_criteria);
	$ppsr_xml->appendChild($transaction);
return $ppsr_xml;
}

function validate($ppsr_xml){	
if($ppsr_xml->validate()){
	echo "File is valid\n";
	}else{
	echo "File is invalid\n";
}
	$tidy = new tidy();
	$config = array(
           'indent'         => true,
		   'input-xml'         => true,
           'output-xml'   => true
           );
		   
	//$out = $tidy->repairString($ppsr_xml->saveXML(),$config,'UTF8');
	$tidy->parseString($ppsr_xml->saveXML(), $config, 'utf8');
	$tidy->cleanRepair();
	echo $tidy;
	
}
function send_it($ppsr_xml, $ch){

	$post = 'p_xml_file='.$ppsr_xml->saveXML();
	//echo $post;

	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);


	//echo "Before call to curl ".strftime('%H:%M:%S',time())." \n";
	$timestamp = time();
	
	$response = curl_exec($ch);
	
	$error = curl_error($ch);
	if($error){
		echo $error."\n";
	}
	
	//echo "After call to curl ".strftime('%H:%M:%S',time())." \n";
//	echo "Time taken : ".strftime('%M:%S',time() - $timestamp)." \n";
	//echo htmlentities($response, ENT_COMPAT, 'UTF-8');
//	echo $response;
//	echo " After echo\n";	
	
	return $response;	
}

function validate_response($response){

	echo "Starting to Validate the Response\n";
	
	$responseArray = explode( '<?xml version="1.0" encoding="UTF-8"?>',$response);
	
	$dom = new DOMDocument;
	$dom->loadXML($responseArray[1]);
	if ($dom->validate()) {
		echo "This transaction response document is valid!\n";
		echo basename($dom->doctype->systemId)."\n";
		switch (basename($dom->doctype->systemId)){
			case 'ppsr_reg_fs_out.3.00.dtd':
			$xpath = new DOMXpath($dom);
			$elements = $xpath->query("*/fs_details/@fs_id");
			if (!is_null($elements)) {
				foreach ($elements as $element) {
					echo "[". $element->nodeName. "]";

					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
						echo $node->nodeValue. "\n";
						$fs_id = $node->nodeValue;
					}
				}
			}	
			$transaction_file = fopen($fs_id.'_transaction.txt',"w");
			fwrite($transaction_file,$responseArray[1]);
			fclose($transaction_file);		
		
			break;
			case 'ppsr_search_out.1.00.dtd':
			$xpath = new DOMXpath($dom);
			
			$elements = $xpath->query("//transaction/search_result/@search_id");
			var_dump($elements);
			if (!is_null($elements)) {
				foreach ($elements as $element) {
					$search_id = $element->nodeValue;										
				}
			}
			echo "$search_id \n";
			return $search_id;
			//$transaction_file = fopen($fs_id.'_transaction.txt',"w");
			break;
			
			case 'ppsr_search_details_out.3.00.dtd':			
			
			$xpath = new DOMXpath($dom);
			
			$elements = $xpath->query("//transaction/search_details_result/finance_statement");
			var_dump($elements);
			if (!is_null($elements)) {
				foreach ($elements as $element) {
					$search_id = $element->nodeValue;										
				}
			}
			echo "$search_id \n";
			return $search_id;
			//$transaction_file = fopen($fs_id.'_transaction.txt',"w");
			break;
			
			case 'ppsr_discharge_fs_out.2.00.dtd':
				$fs_id = $fs_no."_discharge";
			break;
		} //close Switch
		
	}else{
		echo "This transaction response document is invalid!\n";
	}
	if(count($responseArray)>2){
	$dom->loadXML($responseArray[2]);
	if ($dom->validate()) {
		echo "This verification's response document is valid!\n";		
		$verification_file = fopen($fs_id.'_verification.txt',"w");
		fwrite($verification_file,$responseArray[2]);
		fclose($verification_file);
	}else{
		echo "This verification's response document is invalid!\n";
	}
	}
}

function get_searchid($response){
	$searchid = validate_response($response);
return $searchid;
}

function load_acft($ppsr_xml,$collateral){

	if (($handle = fopen("acft.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		echo $data[0]."\n";
		$description = $data[1];
		$make = $data[2];
		$model = $data[3];
		$year = $data[4];
		$colour = $data[5];
		$vin = $data[6];
		$chassis = $data[7];
		$registration_number = $data[8];
		$registration_mark = $data[9];
		$aircraft_class = $data[10];
		$identifying_numbers = $data[11];
		$manufacturer_serial = $data[12];	
		$seq = $data[13];	
		
		$co_item = build_co_item($ppsr_xml,$seq,$description,$make,$model,$year,$colour,$vin,$chassis,$registration_number,$registration_mark,$aircraft_class,$identifying_numbers,$manufacturer_serial);		
		$collateral->appendChild($co_item);
		}
		fclose($handle);
	}

}


function load_collateral_file($ppsr_xml,$collateral, $file){

	if (($handle = fopen($file, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		echo $data[0]."\n";
		$description = $data[1];
		$make = $data[2];
		$model = $data[3];
		$year = $data[4];
		$colour = $data[5];
		$vin = $data[6];
		$chassis = $data[7];
		$registration_number = $data[8];
		$registration_mark = $data[9];
		$aircraft_class = $data[10];
		$identifying_numbers = $data[11];
		$manufacturer_serial = $data[12];	
		$seq = $data[13];	
		
		$co_item = build_co_item($ppsr_xml,$seq,$description,$make,$model,$year,$colour,$vin,$chassis,$registration_number,$registration_mark,$aircraft_class,$identifying_numbers,$manufacturer_serial);		
		$collateral->appendChild($co_item);
		}
		fclose($handle);
	}

}

function build_motor_vehicle_criteria($ppsr_xml, $vehicle_search){

	$transaction = build_transaction($ppsr_xml,"PPSR_SEARCH","MOTOR_VEHICLE" );
	$motor_vehicle_criteria = $ppsr_xml->createElement('motor_vehicle_criteria');
	$vehicle = $ppsr_xml->createElement('vehicle');
	
	$att_reg_no = $ppsr_xml->createAttribute('reg_no');
	$att_reg_no->value = $vehicle_search->reg_no;
	$vehicle->appendChild($att_reg_no);
	
	$att_chassis = $ppsr_xml->createAttribute('chassis');
	$att_chassis->value = $vehicle_search->chassis;
	$vehicle->appendChild($att_chassis);

	$att_vin = $ppsr_xml->createAttribute('vin');
	$att_vin->value = $vehicle_search->vin;
	$vehicle->appendChild($att_vin);
	
	$motor_vehicle_criteria->appendChild($vehicle);
	$transaction->appendChild($motor_vehicle_criteria);
	
	$ppsr_xml->appendChild($transaction);
	
	//if($ppsr_xml->validate())
	//echo "Seach File is valid\n";
	
echo $ppsr_xml->saveXML();

return $ppsr_xml;
	
}

function build_aircraft_search($ppsr_xml, $aircraft_search){

	$transaction = build_transaction($ppsr_xml,"PPSR_SEARCH","AIRCRAFT" );
	$aircraft_criteria = $ppsr_xml->createElement('aircraft_criteria');
	$aircraft = $ppsr_xml->createElement('aircraft');
	
	$registration_mark = $ppsr_xml->createAttribute('registration_mark');	
	$registration_mark->value = $aircraft_search->registration_mark;
	$aircraft->appendChild($registration_mark);
	
	$manufacturer_serial = $ppsr_xml->createAttribute('manufacturer_serial');
	$manufacturer_serial->value = $aircraft_search->manufacturer_serial;
	$aircraft->appendChild($manufacturer_serial);

	
	$aircraft_criteria->appendChild($aircraft);
	$transaction->appendChild($aircraft_criteria);
	
	$ppsr_xml->appendChild($transaction);
	
	//if($ppsr_xml->validate())
	//echo "Seach File is valid\n";
	
echo $ppsr_xml->saveXML();

return $ppsr_xml;
	
}

function build_reference_query($ppsr_xml){

$transaction = $ppsr_xml->createElement('transaction');
$type = $ppsr_xml->createAttribute('type');
$type->value = 'PPSR_REFERENCE_QUERY';
$client_ref = $ppsr_xml->createAttribute('client_ref');
$client_ref->value = '1563';

	$transaction->appendChild($type);
	$transaction->appendChild($client_ref);
	
	$reference = $ppsr_xml->createElement('reference');
	$table = $ppsr_xml->createAttribute('table');
	$table->value = 'ORGANISATION_TYPES';
	$reference->appendChild($table);	
	$transaction->appendChild($reference);
	
	$reference = $ppsr_xml->createElement('reference');
	$table = $ppsr_xml->createAttribute('table');
	$table->value = 'AIRCRAFT_CLASS';
	$reference->appendChild($table);	
	$transaction->appendChild($reference);
	
	$reference = $ppsr_xml->createElement('reference');
	$table = $ppsr_xml->createAttribute('table');
	$table->value = 'COLLATERAL_TYPES';
	$reference->appendChild($table);	
	$transaction->appendChild($reference);
	
	$reference = $ppsr_xml->createElement('reference');
	$table = $ppsr_xml->createAttribute('table');
	$table->value = 'PRIOR_TYPES';
	$reference->appendChild($table);	
	$transaction->appendChild($reference);
	
	$ppsr_xml->appendChild($transaction);
	
	return $ppsr_xml;
	}
}
?>
