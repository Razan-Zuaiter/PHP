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
  background-image: url('https://i.pinimg.com/564x/21/46/06/21460662c3fdd1a5a5e83ec77b42a4cd.jpg');
  background-size: cover;
}
 </style>
  <body >
 <?php include 'home.php'; ?>
<?php include 'data.php';
 
echo '<h2 class="center">'."Class Attendance".'</h2>';
echo '<table class="table table-sm table-light w-50 mx-auto center">';
echo ' <thead><tr><th>Student Id</th><th>Student name</th><th>Check in</th><th>Check out</th> <th>Check in</th><th>Check out</th></tr> </thead>';

foreach( $trainees_array  as $key => $value){

  $style=null;
  
    $timeIn=  explode( ' ', $value['Attendance'][0]['check_in']);
    $timeIn= explode (':', $timeIn[3]);
    $timeOut =  explode( ' ',  $value['Attendance'][0]["check_out"]);
    $timeOut = explode (':', $timeOut[3]);

    if ( ($timeOut [0]  - $timeIn[0] ) < 8 ){
      $style = "table-danger";}     
    elseif (($timeOut [0] - $timeIn[0]) == 8 ){
    if ($timeOut [1] < $timeIn[1] ){
     $style = "table-danger";}
     else { $style = "table-success";}  
    }
    else { $style = "table-success";}

  echo '<tbody>
     <tr class="'.$style.'">
     <td>'.$value['id'].'</td>
      <td>'.$value['name'].'</td>
      <td>'.$value['Attendance'][0]['check_in'].'</td>
      <td>'.$value['Attendance'][0]['check_out'].'</td>
      <td>'.$value['Attendance'][1]['check_in'].'</td>
      <td>'.$value['Attendance'][1]['check_out'].'</td>
      </tr>
      </tbody>' ;
}
echo '</table>';

?>
</body>
</html>