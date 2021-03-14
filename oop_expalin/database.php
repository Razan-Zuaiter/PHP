<?php 
/*
 * @description : Mysql Data base Class make general operations  
 * @author : Salameh yasin <salameh.yasin@orange.com>
 * @version: 1.0 
 * @date: 16-2-2021  
 *
*/
require_once('config.php');

class database{

	public $conn; 

	public function __construct(){
		$this->openConnection();
	}

	public function openConnection(){
		$this->conn = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);
		return $this->conn ? $this->conn : false;
	}

	public function performQuery($query){
		$result = mysqli_query($this->conn, $query);
		return $result ? $result : false;
	}

	public function fetchAll($result){
		$rows = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return !empty($rows) ? $rows : false;

	}
}

