 
<?php 
 if (isset($_POST['url'])) {
  $URL = $_POST['url'];
  header("Location:$URL");
}else{

  $URL2 = $_POST['url'];
  $URL2 =  explode('http://', $_SERVER['REQUEST_URI'])[2];
  // $URL2 = implode('http://www.' ,  $URL2 ,'.com' );
  print_r($URL2 );
 //header("Location:$URL2");
}
 ?>