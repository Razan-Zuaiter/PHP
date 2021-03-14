<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/c20e40a942.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="trainee.css">
    <style>
       body{
  background-image: url('https://i.pinimg.com/564x/5e/b6/53/5eb653b94ba69e3f54cc70bc05d2ca32.jpg');
  background-size: cover;
}
   
    </style>
  </head>
  <body >
  <?php include 'home.php'; ?>
  <?php include 'data.php';?>


<?php  
echo ' <h2>'."Meet Our Cleaver Programers".'</h2>'.'<br>';
echo'<div class=" container d-flex center me-0 ">';
echo ' <div class="row">';

 foreach($trainees_array as $key => $value)
  {

   $id       = array( $trainees_array[$key]['id']);
   $name     = array( $trainees_array[$key]['name']);
   $birthday = array( $trainees_array[$key]['birthday']);
   $images   = array( $trainees_array[$key]['image']);
   $github   = array( $trainees_array[$key]['github account']);
   $linkedIn = array( $trainees_array[$key]['linkedIn']);
   $project  = array( $trainees_array[$key]['project']);
 
 
   echo '<div class="card me-1 my-1" style="width: 18rem;">';
   echo '<div class="card-body">';

   foreach($images as $key => $value)
  { echo  '<img src="'. $value.'" class="card-img-top">';}

   foreach($name as $key => $value)
  { echo '<h5 class="card-title">'."Name : ".$value.'</a>';}

  foreach($birthday  as $key => $value)
  { echo  '<p class="card-text">'."Birth day :" . $value.'</p>';}
   
  echo " Projects : "."<br>";

  for ($i =0 ; $i< 2 ; $i++){
    echo '<li>'.$project[0][$i]['project_name'].'</li>';
   }

   echo  "<br>";
  foreach($github  as $key => $value)

  {echo "     ".'<a href="'. $value.'" class="danger"><i class="fab fa-github"  style="color : brown;"></i></a>'."     ";}
 
  foreach($linkedIn as $key => $value)
  { echo '<a href="'. $value.'" ><i class="fab fa-linkedin-in" style="color : brown;"></i></a>';}

  echo  "<br>";
  foreach($id  as $key => $value)
  {
    echo "<br>".'<a href="http://localhost/PHP---Mini-Project/profile.php/?id=' .$value.'" class="btn btn-outline-success ms-4" >' ."Visit Profile" .'</a>';
  }
    echo ' </div>';
    echo ' </div>'; 
  }
  echo ' </div>';
 echo '</div>';

 ?>


</body>
</html>