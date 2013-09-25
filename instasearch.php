<?php  
header('Content-type: application/json');  
  
$client = "d03388ee43a741c4bab348f046e3a7ac";  
$query = $_POST['q'];  
$api = "https://api.instagram.com/v1/tags/".$query."/media/recent?client_id=".$client;  
  $response = get_curl($api); 
function get_curl($url) {  
    if(function_exists('curl_init')) {  
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL,$url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        curl_setopt($ch, CURLOPT_HEADER, 0);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);   
        $output = curl_exec($ch);  
        echo curl_error($ch);  
        curl_close($ch);  
        return $output;
		echo $output;
    } else{  
        return file_get_contents($url);  
    }  
	
}  
?>