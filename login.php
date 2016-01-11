 <?php  
 require "init.php";  
 $email = $_POST["login_email"];  
 $password =  $_POST["login_pass"];  
 /*$email = "syifaafifahf@gmail.com";  
 $password =  "zxcv1234";*/
 $sql_query = "select * from user_info where email='$email' and password='$password';";  
 $result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {  
	 $row = mysqli_fetch_assoc($result);  
	 $name =$row["name"]; 
	 $id = $row["id"]; 
	 $as = $row["as"];
	 echo $id." ".$as."-Welcome ".$name;
 }  
 else  
 {   
 	echo "Login Failed..";
 }  
 ?>