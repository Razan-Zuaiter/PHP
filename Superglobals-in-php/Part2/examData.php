<?php 

$Question = array( array ("question_1" =>array( "answer_1"=>"answer_1",
                                                "answer_2"=>"answer_2",
                                                "answer_3"=>"answer_3",
                                                "answer_4"=>"answer_4" 
                                              )
                                     
));

echo '<pre>';
    print_r($Question );
?>




<?php 
if (isset($_POST['submit'])) {
 
  $true_answer = $_POST['ans1'];

  echo $true_answer;

}
?>