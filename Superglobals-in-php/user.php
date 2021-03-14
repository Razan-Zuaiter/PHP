<?php
session_start();

if(isset($_POST['Rsubmit']))
 {
  $_SESSION['USER'] = array();
  $U_name     = $_POST['Rname'];
  $U_password = $_POST['Rpass'];
  $USER = array ( $U_name  ,  $U_password );

  echo '<pre>';
  print_r(  $USER  );


 }

?>