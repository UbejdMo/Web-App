<?php
class DBController {
	private $host = "localhost";
	private $perdorues = "root";
	private $fjalekalim = "";
	private $bazetedhenash = "umvtv";
	private $lidh;
	
	function __construct() {
		$this->lidh = $this->connectDB();
	}
	
	function connectDB() {
		$lidh = mysqli_connect($this->host,$this->perdorues,$this->fjalekalim,$this->bazetedhenash);
		return $lidh;
	}
	
	function runQuery($query) {
		$rezultati = mysqli_query($this->lidh,$query);
		while($rresht=mysqli_fetch_array($rezultati)) {
			$vendosrez[] = $rresht;
		}
		if(!empty($vendosrez))
			return $vendosrez;
	}
	
	function insertQuery($query) {
	    mysqli_query($this->lidh, $query);
	    $fut_id = mysqli_insert_id($this->lidh);
	    return $fut_id;
	}
	
	function getIds($query) {
	    $rezultati = mysqli_query($this->lidh,$query);
	    while($rresht=mysqli_fetch_array($rezultati)) {
	        $vendosrez[] = $rresht[0];
	    }
	    if(!empty($vendosrez))
	        return $vendosrez;
	}
}
?>