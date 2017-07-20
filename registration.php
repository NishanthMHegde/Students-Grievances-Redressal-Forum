<!DOCTYPE html> 
<?php

$con = mysqli_connect("localhost","root","","facebook") or die("Connection Failed");


?> 
<html> 
<head> 



<title> Register </title> </head> 

<body> 

<form action="" method = "post" >
<input type = "text" name = "name" placeholder = "Enter your name" ><br/> 
<input type = "text" name = "email" placeholder = "Enter your email" ><br/> 
<input type = "password" name = "password" placeholder = "Enter your password" ><br/> 
<input type = "submit" value= "submit" name = "sub"> <br/> 
</form>

<?php 


if(isset($_POST['sub'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = "INSERT INTO users(name,email,password) VALUES($name,$email,$password)";

$run = mysqli_query($con,$insert);

if($run)
echo "<h3> Registration Successfull</h3>";
}

?> 



</body> 


</html> 