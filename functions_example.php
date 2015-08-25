<?php
//receive the id
$id = $_REQUEST['id'];

$day = getDayofTheweek($id);
echo $day;

//function to give us the day of the week
function getDayofTheweek($id){
  include ('loops.php');

    if(($id>=0)&&($id<=6)){
    $day = $week_days[$id];
  }else{
    $day = "We don't have a day like that";
  }
return $day;

}






 ?>
