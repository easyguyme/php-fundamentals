<?php

//variables
$name = "Sam Gichuru";
$id_number = 123456;
$mpesa_balance = 25.64;

//echo $mpesa_balance;


//arrays

//$days_of_the_week = array("Monday","Tuesday","Wednesday");
//$days_of_the_week = ['Monday','Tuesday','Wednesday','Thursday'];
$subscribers = array(
		'Sam'=> array(
										'name'=>'Sam Gichuru',
										'id'=>'123456',
										'mpesa_balance'=>25.64
									),
		'Thomas'=> array(
																	'name'=>'Thomas Tewolda',
																	'id'=>'345678',
																	'mpesa_balance'=>0.1
																)
								);

print_r($subscribers);
exit;



 ?>
