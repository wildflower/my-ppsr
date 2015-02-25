<?php
namespace Acme\DemoBundle\Controller;

class CompanySearchApi
{	
	//private $auth_key="vnpFpQZVnqp887Lh";	
	//private $secret_auth_key="9CEhOkT8FehgVJDjseR2gThj0nKmRrQGDHBlGzJ0";	
    private $request_auth_key = "";

	public function __construct($url,$auth_key,$secret_auth_key){
	$this->url = $url;
	$this->auth_key = $auth_key;
	$this->secret_auth_key = $secret_auth_key;
	}

function set_url($url){
	$this->url = $url;
}
function get_url(){
	return $this->url;
}

function set_auth_key($auth_key){
	$this->auth_key = $auth_key;
}

function set_secret_auth_key($secret_auth_key){
	$this->secret_auth_key = $secret_auth_key;
}


public function search_company($search_string){
//$search_string = "optimizerhq";
$parse = parse_url($this->url);
$search_string = rawurlencode($search_string);

$request = '';
$request .= "GET\n";
$request .= $parse['host']."\n";
$request .= $parse['path']."/".$search_string."\n";
$request .= date("D, d M Y H:i:s")." GMT\n";
$request .= $this->auth_key."\n";
$request .= "Application/xml\n";

//echo "String to Sign = $request";
$s = hash_hmac('sha256', $request, $this->secret_auth_key, true);
//$this->request_auth_key = base64_encode($s);

$this->request_auth_key = base64_encode(hash_hmac('sha256',$request,$this->secret_auth_key,TRUE));

        $temp_url = $this->url."/".$search_string;
		$ch = curl_init();
       // $headers = array("Authorization:".$this->auth_key.":".$this->request_auth_key);
		$headers = array("Date: ".date("D, d M Y H:i:s")." GMT","Accept: Application/xml","Authorization: ".$this->auth_key.":".$this->request_auth_key);
		
        
		curl_setopt($ch,CURLOPT_URL,$temp_url);
                //var_dump($temp_url);
		
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		//curl_setopt($ch, CURLOPT_PROXYPORT, '8080');
		//curl_setopt($ch, CURLOPT_PROXY, 'proxybcw.wd.govt.nz');
		//curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'flowerh:Huxly2018');		
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		//echo "Dumping Headers: \n";
//		var_dump( $headers);
		$html = curl_exec($ch);
		
	//	echo "Dumping Info: \n";		
		//var_dump(curl_getinfo($ch));
		
		curl_close($ch);
        
		return $html;
	}
}
?>
