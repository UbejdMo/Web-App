<?php
    session_start();
    require("dbcontroller.php");
	$dbController = new DBController();
	
	$pergjigja_id  = $_POST['pergjigja'];
	$pyetja_id = $_POST['pyetja'];
	
	$query = "INSERT INTO tbl_ankete(pyetja_id,pergjigja_id,pjesmarres_id) VALUES ('" . $pyetja_id ."','" . $pergjigja_id . "','" . $_SESSION["pjesmarres_id"] . "')";
    $fut_id = $dbController->insertQuery($query);
    
    if(!empty($fut_id)) {
        $query = "SELECT * FROM tbl_pergjigje WHERE pyetja_id = " . $pyetja_id;
        $pergjigja = $dbController->runQuery($query);
    }
    
    if(!empty($pergjigja)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $query = "SELECT count(pergjigja_id) as numrimi_final FROM tbl_ankete WHERE pyetja_id = " . $pyetja_id;
        $vlersimi_final = $dbController->runQuery($query);

        foreach($pergjigja as $k=>$v) {
            $query = "SELECT count(pergjigja_id) as numrimi_pergjigjes FROM tbl_ankete WHERE pyetja_id = " .$pyetja_id . " AND pergjigja_id = " . $pergjigja[$k]["id"];
            $vlersimi_pergjigjev = $dbController->runQuery($query);
            $numrimi_pergjigjev = 0;
            if(!empty($vlersimi_pergjigjev)) {
                $numrimi_pergjigjev = $vlersimi_pergjigjev[0]["numrimi_pergjigjes"];
            }
            $perqindja = 0;
            if(!empty($vlersimi_final)) {
                $perqindja = ( $numrimi_pergjigjev / $vlersimi_final[0]["numrimi_final"] ) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $pergjigja[$k]["pergjigja"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="show_poll();">Vazhdo</button>
</div>