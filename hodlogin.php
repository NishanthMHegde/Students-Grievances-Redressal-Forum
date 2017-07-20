<!DOCTYPE html> 
<?php 

?>
 
<html> 
<head>
<meta charset = "UTF-8"> 
<title> HOD Login </title> 
<link rel = "stylesheet" href = "main.css"> 


</head>
 
<body>

<div class = "background" > 
<h1> HOD Login </h1> 
<div class = "form">
<form action = "" method = "post"> 
<table> <caption> Please Login with your Details:<br/> </caption> 
<tr> <td> <label> Professor ID </label> </td> 
<td><input type = "text" name="id" placeholder = "Enter your USN" class = "formelements" > </td></tr> 
<tr> <td> <label> Password </label> </td> 
<td><input type = "password" name="password" placeholder = "Enter your password" class = "formelements" > </td></tr> 
 
</table>
<input type = "submit" value = "Login" id = "login" name = "login" >
</form> 
 </div>
 <?php 
 if(isset($_POST['login'])) {
	 $con = mysqli_connect("127.0.0.1","root","","complaints_forum") or die("Connection Failed!");
	 $id_user = mysqli_real_escape_string($con,$_POST['id']);
	 $password_user = mysqli_real_escape_string($con,$_POST['password']);
	 $departmentvar = mysqli_real_escape_string($con,$_POST['department']);
	 
	 $select = "select * from hod where id ='$id_user' AND password = '$password_user'";
	 $selectdep = "select department from hod where id ='$id_user' AND password = '$password_user'";
	 
     $row = mysqli_fetch_array($select);
	 $run = mysqli_query($con,$select);
	$check = mysqli_num_rows($run);
	 if($check>0 ){
		 
		 $selectdep = "select department from hod where id ='$id_user' AND password = '$password_user'";
		 $run1 = mysqli_query($con,$selectdep);
		 $row1 = mysqli_fetch_array($run1);
		 session_start();
		
		    $_SESSION['dep'] = $row1['department'];
			
		 header('Location: hodcomplaints.php');
		 
		 
		 
	 }
	 else {
		 echo "<script>alert('Wrong ID or password')</script>";
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