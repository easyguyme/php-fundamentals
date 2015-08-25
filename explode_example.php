<?php
$sms = "Leonard#32749387#Nailab";

$exploded_text = explode('#',$sms);

$name = $exploded_text[0];

$index_number = $exploded_text[1];

$school = $exploded_text[2];

print_r($index_number);






 ?>
