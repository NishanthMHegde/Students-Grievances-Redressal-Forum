<!DOCTYPE html> 

 
<html> 
<head>
<meta charset = "UTF-8"> 
<title> Student Login </title> 
<link rel = "stylesheet" href = "main.css"> 


</head>
 
<body>

<div class = "background" > 
<h1> Change Your Pasword </h1> 
<div class = "form">
<form action = "" method = "post"> 
<table> <caption> Please Login with your Details:<br/> </caption> 
<tr> <td> <label> Student USN </label> </td> 
<td><input type = "text" name="usn" placeholder = "Enter your USN" class = "formelements" > </td></tr> 
<tr> <td> <label> Password </label> </td> 
<td><input type = "password" name="password" placeholder = "Enter your password" class = "formelements" > </td></tr> 
<tr> <td> <label> New Password </label> </td> 
<td><input type = "password" name="newpassword" placeholder = "Enter your password" class = "formelements" > </td></tr>
 
</table>
<input type = "submit" value = "Login" id = "login" name = "login" >
</form> 
 </div>
 <?php 
 if(isset($_POST['login'])) {
	 $con = mysqli_connect("127.0.0.1","root","","complaints_forum") or die("Connection Failed!");
	 $usn_user = mysqli_real_escape_string($con,$_POST['usn']);
	 $password_user = mysqli_real_escape_string($con,$_POST['password']);
	 $newpassword = mysqli_real_escape_string($con,$_POST['newpassword']);
	 
	
$select = "SELECT * FROM students WHERE usn='$usn_user' AND password = '$password_user'";
	 $run = mysqli_query($con,$select);
	$check = mysqli_num_rows($run);
	 if($check>0 ){
		  $update = "UPDATE students set password='$newpassword' WHERE usn='$usn_user' AND password='$password_user'";
		   $run = mysqli_query($con,$update);
		 echo "<script>alert('Your password has been modified')</script>";
		 header('Location: studentlogin.php');
		 
		 
		 
	 }
	 else {
		 echo "<script>alert('Wrong USN or password')</script>";
		 exit();
		 
	 }
	 
	 
	 
	 
	 
 }
 
 ?> 
 <footer> 
 &copy;Nishanth Hegde BMSCE
 </footer> 
 </div> 
</body>


</html> 