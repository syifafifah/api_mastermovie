<?php  
require "init.php";  
//$sql_query = "select * from movies m, movies_genre mg, movies_genre_rlt mgr where m.id_movie=mgr.id_movie and mg.id_genre=mgr.id_genre";
$sql_query = "select * from movies order by release_dates desc limit 4";
$result = mysqli_query($con,$sql_query);
$response = array();
header('Content-type: application/json');
if(mysqli_num_rows($result) >0 )  
{  
	$movie[] = array();
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, array('id_movie' => $row["id_movie"], 'title' => $row["title"], 'synopsis' => $row["synopsis"], 'img_tumb' => $row["img_tumb"]));
	}
    
    echo json_encode(array('Movies' => $response));
}  
else  
{
	$response["success"] = 0;
	$response["message"] = "No movie found";

	echo json_encode($response);
}  

?>