<?php
require 'init.php';

$id = $_POST["id_movie"];
/*$id='3';*/
$sql_query = "delete from movies where id_movie=$id";
if(mysqli_query($con,$sql_query)) {
 	echo "Data deleted";
 } else {
 	echo "Invalid delete.. ".mysqli_error($con);
 }

?>