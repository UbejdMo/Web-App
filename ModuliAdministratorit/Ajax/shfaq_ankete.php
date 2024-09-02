<html>
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		
<?php
include('../konfig.php');
session_start();
$verifiko_perdorues=$_SESSION['perdoruesi_umvtv'];
$ses_sql = mysqli_query($lidh,"SELECT ID_perdoruesi_umvtv, perdoruesi_umvtv FROM perdoruesit_umvtv WHERE perdoruesi_umvtv='$verifiko_perdorues' ");
$rresht=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$perdoruesi_kycur=$rresht['perdoruesi_umvtv'];
if(!isset($verifiko_perdorues))
{ header("Location: index.php");} 

	
    $_SESSION["pjesmarres_id"] =  $rresht['ID_perdoruesi_umvtv'];
    
	require("dbcontroller.php");
	$dbController = new DBController();
	
	$query = "SELECT DISTINCT pyetja_id from tbl_ankete WHERE pjesmarres_id = " . $_SESSION["pjesmarres_id"]; 
	$rezultati = $dbController->getIds($query);
	
	$kushti = "";
	if(!empty($rezultati)) {
	    $kushti = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $query = "SELECT * FROM `tbl_pyetje` " . $kushti . " limit 1";
    $pyetjet = $dbController->runQuery($query);
    
    if(!empty($pyetjet)) {
?>      
		<div class="question"><?php echo $pyetjet[0]["pyetja"]; ?><input type="hidden" name="pyetja" id="question" value="<?php echo $pyetjet[0]["id"]; ?>" ></div>      
<?php 
        $query = "SELECT * FROM tbl_pergjigje WHERE pyetja_id = " . $pyetjet[0]["id"];
        $pergjigjet = $dbController->runQuery($query);
        if(!empty($pergjigjet)) {
            foreach($pergjigjet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="pergjigja" class="radio-input" value="<?php echo $pergjigjet[$k]["id"]; ?>" /><?php echo $pergjigjet[$k]["pergjigja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="addPoll()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>