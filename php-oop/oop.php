<?php
	class studant
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "studant";
		public  $con;
    private  $name;
		private $age;
		private $mobile;
		private $address;

		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}

		public function set_data($name ,$age ,$mobile, $address) {
			$this->name    = $name;
			$this->age     = $age;
			$this->address = $address;
			$this->mobile  = $mobile;
		}

		// Insert student data into student table
		public function insertData($name ,$age ,$mobile, $address)
		{
			$name = $this->con->real_escape_string($name);
      $age="26";
			$mobile ="556666";
			$address = $this->con->real_escape_string($address);

			$query="INSERT INTO studant(std_name , std_age , std_mobile , std_address) VALUES('$name' ,'$age', '$mobile', '$address')";
			$sql = $this->con->query($query);
		}

	}

$razan = new studant;

$razan->set_data("razan","24" , "055555" ,"amman");

echo "<pre>";
print_r($razan);
?>
