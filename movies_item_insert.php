<?php
require 'init.php';

$title = $_POST["title"];
$date = $_POST["release_dates"];
$date = date('Y-m-d',strtotime($date));
$link = $_POST["link"];
$synopsis = $_POST["synopsis"];

/*$title = "Harry Potter and the Deathly Hallows - Part 2";
$date = "2011-07-15";
$date = date('Y-m-d',strtotime($date));
$link = "https://www.youtube.com/watch?v=H7JPh2Kq6ok";
$synopsis = "Harry Potter and the Deathly Hallows - Part 2, is the final adventure in the Harry Potter film series. The much-anticipated motion picture event is the second of two full-length parts. In the epic finale, the battle between the good and evil forces of the wizarding world escalates into an all-out war. The stakes have never been higher and no one is safe. But it is Harry Potter who may be called upon to make the ultimate sacrifice as he draws closer to the climactic showdown with Lord Voldemort. It all ends here. -- (C) Warner Bros";
*/
$img_tumb = "http://ia.media-imdb.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_UX182_CR0,0,182,268_AL_.jpg";
$img_profile = "http://ia.media-imdb.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_UX182_CR0,0,182,268_AL_.jpg";

$sql_query = "insert into movies (title, release_dates, synopsis, img_tumb, img_profile, link) values ('$title', '$date', '$synopsis', '$img_tumb', '$img_profile', '$link')";
if(mysqli_query($con,$sql_query)) {
 	echo "Data inserted";
 } else {
 	echo "Invalid insert.. ".mysqli_error($con);
 }

?>