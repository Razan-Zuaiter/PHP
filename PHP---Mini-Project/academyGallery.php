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
    <link rel="stylesheet" href="gallery.css">
  </head>
  <style>
       body{
  background-image: url('https://i.pinimg.com/564x/5e/b6/53/5eb653b94ba69e3f54cc70bc05d2ca32.jpg');
  background-size: cover;
}
   
    </style>
  <body >
    <?php include 'home.php'; ?>
    <?php include 'data.php'; ?>
<h1>Orange Gallery </h1>
    <?php
    echo'<div class="container d-flex">';
    echo '<div class="row">';
        foreach($Orange_array as $key =>$value){
         echo '<div class="img-responsive d-flex" style="width: 18rem;">';
          echo  '<img src="'.$value.'"class="col-lg-12" >';
  
           echo'</div>';         
        }
       
   echo '</div>';
  echo '</div>';
  ?>

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
    </body>
</html>