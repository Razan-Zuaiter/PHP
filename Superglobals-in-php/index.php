<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
  
</body>
</html>

<!-- <h2> Registration Form: </h2>
<form method="post" action="user.php">
  Name: <input type="text" name="fname">
  Password: <input type="password" name="pass">
  <input type="submit">
</form> -->

<br>
<br>
<!-- 
<h2>  Search Engine:   </h2>
<form method="post" action="search.php">
 Search Engine:  <input  name="url" id="search">
 <button type="submit">GO</button>
</form> -->


<br>
<br>

<!-- <h2>  Todo list:   </h2>
<form method="post" action="todoData.php">
 Todo list: <input type="text" name="Todo" >
  <input type="submit">
</form> -->


<br>
<br>

<!-- 
<h2>  calculator:   </h2>
<?php 
$result = "";
class calculator
{
    var $a;
    var $b;
    function oprations($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;
            case '-':
            return $this->a - $this->b;
            break;
            case '*':
            return $this->a * $this->b;
            break;
            case '/':
            return $this->a / $this->b;
            break;
            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->oprations($c);
    }
}
$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>


<br>
<br>


<form method="post">
<table align="center">
   
    <tr>
        <td>Enter Number</td>
        <td><input type="text" name="n1"></td>
    </tr>
    <tr>
        <td>Enter Number</td>
        <td><input type="text" name="n2"></td>
    </tr>
    <tr>
        <td> Operator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>
    <tr>
        
        <td><input type="submit" name="submit" value="                   =                    "></td>
    </tr>
    <tr>
        <td><strong>"The result is "<?php echo $result; ?><strong></td>
    </tr>

</table>
</form> -->


<br>
<br>

<?php
// function getProjectName()
// {
//     $script  = explode('/', $_SERVER['SCRIPT_NAME'])[2];
//     $project = explode('/', $_SERVER['REQUEST_URI'])[1];
    
//     echo  $script.'<br>' ;

//     echo  $project;
// }
//  getProjectName();


// ?>

<br>
<br>

<?php 

// echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
// echo '<br>';
// echo ($_SERVER['REQUEST_TIME']);
// echo date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME'])
?>

<br>
<br>

<?php
// echo '<br>';
//   session_start();
 
//   if(isset($_SESSION['views'])){
//      $_SESSION['views'] = $_SESSION['views']+ 1;
//   }else{
//      $_SESSION['views'] = 1;
//   }
//   echo "Total page views = ". $_SESSION['views'];

?>


<br>
<br>

<?php

echo '<br>';
$cookie_name = "Razan";
$cookie_value = "5";
$cookie_result = setcookie($cookie_name, $cookie_value, time() + (2000), '/', true);

//print_r($cookie_result );

if (!isset($_COOKIE[$cookie_name])) {
   
    echo "Cookie named ' " . $cookie_name . " ' is not set!";

} else {
   
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];

}
echo '<br>';
print_r($_COOKIE);

 unset($_COOKIE["name"]); // for deleting
?>


<br>
<br>