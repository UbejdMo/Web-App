<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="umvtv";
//connect to database
$lidh = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("lidhja ka deshtuar.");
//get the data from table Data_ahome
$query = "SELECT eDhena FROM eDhena_Ballin";
//execute the query
$rezultati = mysqli_query($lidh, $query);
if(!$rezultati){ echo "deshtoi ekzekutimi i query"; die();}
else{
 //creates an empty array to hold data
 $edhena = array();
  while($rresht = mysqli_fetch_assoc($rezultati)){
    $edhena[]=$rresht;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file results.json with writing mode.
//you can read more about file handling in PHP here. 
$fp = fopen('test.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($fp, json_encode($edhena, JSON_PRETTY_PRINT));
echo "Fajlli eshte krijuar";
//close the file
fclose($fp);
}
?>