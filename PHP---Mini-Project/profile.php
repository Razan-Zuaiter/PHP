<!DOCTYPE html>
<html>
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
       body{
  background-image: url('https://i.pinimg.com/564x/5e/b6/53/5eb653b94ba69e3f54cc70bc05d2ca32.jpg');
  background-size: cover;
}
   
    </style>
<body>
<?php include 'home.php'; ?>
<?php include 'data.php' ; 

  $url = $_SERVER['REQUEST_URI'];
  $url = explode("=" , $url);
  $id  = $url[1];
 
 echo $_SERVER['REQUEST_URI'];

echo '<br>';
 echo $_SERVER['REQUEST_TIME'];
 




  foreach( $trainees_array  as $key => $value){
    if($value["id"] == $id){
      echo '<div class="card center" style="width: 25rem; margin:auto">';
      echo '<div class="card-body center">';
      echo  '<img src="'.$value['image'].'" class="card-img-top">';
      echo '<h5 class="card-title">'."Name : ".$value['name'].'</a>';
      echo  '<p class="card-text">'."Birth day :" .$value['birthday'].'</p>';
     
      echo "<br>"." Projects : ";
     for ($i =0 ; $i< 2 ; $i++){
       echo '<li>'.$value['project'][$i]['project_name'].'</li>'; 
      }

        
      echo "<br>"." Attendance  in: ";
     for ($i =0 ; $i< 2 ; $i++){
       echo '<li>'.$value['Attendance'][$i]['check_in'].'</li>'; 
      }


      echo "<br>"." Attendance  check out: ";
     for ($i =0 ; $i< 2 ; $i++){
       echo '<li>'.$value['Attendance'][$i]['check_out'].'</li>'; 
      }


      echo ' </div>';
      echo ' </div>';
      }
  }
  ?>
 

</body>
</html>