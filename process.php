<?php

$year = $_POST["year"];
$name = $_POST["name"];
$birthyear = $name . $year;
$age = date("Y") - $year; 

date_default_timezone_set("America/Vancouver");

echo ("Hello ".$name." , You are ".$age." years old.");


?>