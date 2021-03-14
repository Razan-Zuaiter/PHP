<?php 
session_start();
if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = array();
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['Todo'];
    if (empty($name)) {
        echo "Todo is empty";
    } else {       
        array_push($_SESSION['todo_list'],$name);
    }
    echo "<br />";
    PrintTodoList($_SESSION['todo_list']);
}


function PrintTodoList($receivedList){
    foreach($receivedList as $todoItem){
        echo $todoItem."<br />";
    }
}

?>
