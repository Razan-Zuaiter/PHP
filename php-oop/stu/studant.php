<?php

	class Students
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "oop";
		public  $con;


		// Database Connection 
		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}

		// Insert customer data into customer table
		public function insertData($post)
		{
			$name = $this->con->real_escape_string($_POST['name']);
			$mobile = $this->con->real_escape_string($_POST['mobile']);
			$address = $this->con->real_escape_string($_POST['address']);
			$age = $this->con->real_escape_string(md5($_POST['age']));
			$query="INSERT INTO studant(std_name,std_mobile,std_address,std_age) VALUES('$name','$mobile','$address','$age')";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:index.php?msg1=insert");
			}else{
			    echo "Registration failed try again!";
			}
		}

		// Fetch records for show listing
		public function displayData()
		{
		    $query = "SELECT * FROM studant";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "No found records";
		    }
		}

		// Fetch single data for edit from customer table
		public function displyaRecordById($id)
		{
		    $query = "SELECT * FROM studant WHERE std_id = '$id'";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		    }else{
			echo "Record not found";
		    }
		}

		// Update customer data into customer table
		public function updateRecord($postData)
		{
		    $name = $this->con->real_escape_string($_POST['uname']);
		    $mobile = $this->con->real_escape_string($_POST['upmobile']);
		    $address = $this->con->real_escape_string($_POST['upadrees']);
		    $age = $this->con->real_escape_string($_POST['upage']);
		    $id = $this->con->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE studant SET std_name = '$name', std_mobile = '$mobile', std_address = '$address', std_age='$age' WHERE std_id = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:index.php?msg2=update");
			}else{
			    echo "Registration updated failed try again!";
			}
		    }
			
		}


		// Delete customer data from customer table
		public function deleteRecord($id)
		{
		    $query = "DELETE FROM studant WHERE std_id = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:index.php?msg3=delete");
		}else{
			echo "Record does not delete try again";
		    }
		}

	}
?>