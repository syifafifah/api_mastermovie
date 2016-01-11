<?php  
require "init.php";  
$id = $_POST["userId"];    
/*$id =  "2";*/
$sql_query = "select * from user_info where id=$id";  
$result = mysqli_query($con,$sql_query);  
$user_logged = array();  
header('Content-type: application/json');
if(mysqli_num_rows($result) >0 )  
{  
	$row = mysqli_fetch_assoc($result);

	/*$user_logged["success"] = 1;
	$user_logged["message"] = "User found";
	$user_logged["email"] = $row["email"]; 
	$user_logged["name"] = $row["name"]; 

	echo json_encode($user_logged);*/
	$user[] = array();
    $user["email"] = $row["email"];
    $user["name"] = $row["name"];
    $user["image"] = $row["image"];

    // user node
    $response["Users"] = array();

    array_push($response["Users"], $user);

    // success
    $response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
}  
else  
{
	$user_logged["success"] = 0;
	$user_logged["message"] = "No user found";

	// echo no users JSON
	echo json_encode($user_logged);
}  

?>