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
  </head>
  <style>
       body{
  background-image: url('https://i.pinimg.com/564x/5e/b6/53/5eb653b94ba69e3f54cc70bc05d2ca32.jpg');
  background-size: cover;
}
   
    </style>
  <body >
 <?php include 'home.php'; ?>

<?php include 'data.php';

echo '<h2 class="center">'."Dash board".'</h2>';
echo '<table class="table table-sm table-warning w-50 mx-auto center text-justify" >';
echo '<p>'."Number of Class Trainee is  :  ".count($trainees_array).'</p>';
// echo '<p>'."Number of Class Completed Project  :  ".'</p>';

echo '<thead class="mx-auto"><tr><th>Student Id</th><th>Student name</th><th>Completed Projects</th></tr></thead>';

echo '<tbody class="mx-auto">';
foreach( $trainees_array  as $key => $value){
  echo '<tr><td>'.$value['id'].'</td><td>'.$value['name'].'</td>';
  $count = 0;
    for($i = 0; $i < count($value['project']); $i++) {

        if($value['project'][$i]['is_completed'] == 'yes') {
            $count++;
        }      
    }

    echo '<td>'.$count.'</td></tr>';
}
echo '</tbody>';
echo '</table>';

?>


</body>
</html>