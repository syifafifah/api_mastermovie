<?php
require 'init.php';

$id = $_POST["id_movie"];    
/*$id =  "1";*/

$sql_query = "select * from movies where id_movie=$id";
$result = mysqli_query($con,$sql_query);
$response = array();
header('Content-type: application/json');
if(mysqli_num_rows($result) >0 )  
{  
	$movie[] = array();
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, array('id_movie' => $row["id_movie"], 'title' => $row["title"], 'release_dates' => $row["release_dates"], 'synopsis' => $row["synopsis"], 'img_tumb' => $row["img_tumb"], 'img_profile' => $row["img_profile"], 'link' => $row["link"]));
	}

    //$response["success"] = 1;

    // echoing JSON response
    echo json_encode(array('Movies' => $response));
}  
else  
{
	$response["success"] = 0;
	$response["message"] = "No movie found";

	echo json_encode($response);
}  

?>