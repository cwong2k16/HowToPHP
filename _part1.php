<?php
include "_Person.php";
//include 'class.IPInfoDB.php';
//$ipinfodb = new IPInfoDB('3a351e2b706f80228b633eb436bd4a4df99ab4abd2b1f732db4ca796a7a554dc');
/* Read mock data into memory */
$file = fopen("mockdata.csv","r");
$countries = array();
$companies = array();
$people = array();
$ip_addrs = array();
$geo_code_ip = array();

while(! feof($file))
  {
	//$line = fgetcsv
	$coun = (fgetcsv($file)[4]);
	$email = (fgetcsv($file)[3]); 
	$comp = substr($email, strpos($email, "@") + 1); 
	array_push($countries, $coun);
	array_push($companies, $comp);
	array_push($ip_addrs, fgetcsv($file)[5]);
	
	/* Populating Person object and adding it to the people collection */
	$person = new Person(fgetcsv($file)[0], fgetcsv($file)[1], fgetcsv($file)[2], fgetcsv($file)[3], fgetcsv($file)[4], fgetcsv($file)[5]);
	array_push($people, $person);
  }

fclose($file);
/* Stores the frequencies of each country */
$country_count = array_count_values($countries);
$comp_count = array_count_values($companies);
print_r($country_count);
arsort($comp_count);

reset($comp_count);

echo "Most workers work for: " . key($comp_count) . "\n";

/*
foreach($ip_addrs as $ip){
	$results = $ipinfodb->getCity($ip);
	array_push($geo_code_ip, $results);
}
*/
?> 