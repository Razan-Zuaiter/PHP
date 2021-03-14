<?php 
require('database.php');

// 1. create()
// 2. readAll()
// 3. readById($id)
// 4. update
// 5. delete
// 6. auth($email,$password)

class admin extends database{

	public $admin_id;
	public $admin_email;
	public $admin_password;
	public $admin_fullname;

	public function create(){		
		$query = "INSERT INTO admin(admin_email,admin_password,admin_fullname)
		          values('$this->admin_email','$this->admin_password','$this->admin_fullname')";
		$this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin";
		$result = $this->performQuery($query);
		$row    = $this->fetchAll($result);

		return $row;
	}

	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		$row    = $this->fetchAll($result);

		return $row;
	}

	public function update(){
		$query = "UPDATE  admin set admin_email    = '$this->admin_email',
		                            admin_password = '$this->admin_password',
		                            admin_fullname = '$this->admin_fullname'
		                            WHERE admin_id = $this->admin_id";		          
		$this->performQuery($query);
	}

	public function delete($id){
		$query  = "DELETE FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);

	}

}

$x = new admin();
$x->admin_email       = 'salemalabed@gmail.com';
$x->admin_password    = 'ssalem123456';
$x->admin_fullname    = "Salem Alabed";
$x->admin_id          = 8;

//$x->create();
$x->update();
$zz = $x->readById(8);
echo '<pre>';
print_r($zz);

$x->delete(6);

print_r($x->readAll());