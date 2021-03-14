<?php

class Student {
  
  public $name , $Id ,$Email ,$mobile_number ;
  
  public function set_data($name ,$Id ,$Email ,$mobile_number ) {
    $this->name = $name;
    $this->Id = $Id;
    $this->Email = $Email;
    $this->mobile_number = $mobile_number;
   
  }
  function get_data() {
    return $this->name;
    return $this->Id;
    return $this->Email ;
    return  $this->mobile_number;
  }

}


class Teacher extends Student{
  public $Salary , $subjects ;

  function set_data_teacher($name ,$Id ,$Email ,$mobile_number,$Salary , $subjects ){
    $this->name = $name;
    $this->Id = $Id;
    $this->Email = $Email;
    $this->mobile_number = $mobile_number;
    $this->Salary = $Salary;
    $this->subjects = $subjects;
  }


  function get_data_teacher() {
    return $this->name;
    return $this->Id;
    return $this->Email ;
    return  $this->mobile_number;
    return $this->Salary;
    return $this->subjects;
  }


}

$Razan = new Student();
$Razan->set_data('Razan' ,'27A','Razan@gmail.com',"99997777");
$Razan->get_data();
echo "<pre>";
print_r($Razan) ;

echo "<br>";
echo str_repeat("*",50);
echo "<br>";
$Alaa = new Teacher();
$Alaa->set_data_teacher('Alaa',"777",'Alaa@gmail.com',"077666333","1500", ['Arabic' ,'English']);
$Alaa->get_data_teacher();
print_r($Alaa) ;
?>