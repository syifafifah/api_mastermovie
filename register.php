 <?php  
 require "init.php";  
 $email = $_POST["email"];  //Background.java
 $password = $_POST["password"];  
 $name = $_POST["name"];  
 $image = "";
 $as="2";
 /*$email = "syifaafifahf@gmail.com";  
 $password = "zxcv1234";  
 $name = "Syifa Afifah Fitriani";  
 $image = "";*/
 $sql_query = "insert into user_info values(null, '$email', '$password', '$name', '$image', $as);";  
 if(mysqli_query($con,$sql_query)) {
 	//echo "Data insertion success";
 } else {
 	//echo "Data insertion error.. ".mysqli_error($con);
 }
 ?>