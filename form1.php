<!DOCTYPE html> 
<?php 
$con = mysqli_connect("127.0.0.1","root","","complaints_forum") or die("connection failed");


?> 


<html> 
<head> 
<link rel = "stylesheet" href = "main.css"> <title> Regesitration </title> 
</head> 

<body>
<div class = "background"> 
<h1> Register Yourselves For FREEE! </h1> 
<form action="form1.php" method = "post" >
<div class = "form">
<table> 
<tr> 
<td> <label>Username </label> </td> 
<td><input type = "text" name = "name" placeholder = "Enter your name" class = "formelements"><br/></td>
</tr>  
<tr>
<td> <label> Email </label> 
<td><input type = "text" name = "email" placeholder = "Enter your email"  class = "formelements"><br/> </td>
</tr>
<tr><td> <label> USN </label></td>
<td><input type = "text" name = "usn" placeholder = "Enter your USN" class = "formelements" > <br/></td> </tr>

<tr><td><label> Mobile Number </label> </td> 
<td><input type = "text" name = "mobile" placeholder = "Enter your mobile number" class = "formelements" > <br/></td> </tr>

<tr> <td> <label> Select Your Semester</label></td> 
<td><select name = "sem"> 
<option value = "1"> 1 </option> 
<option value = "2"> 2 </option> 
<option value = "3"> 3 </option> 
<option value = "4"> 4 </option> 
<option value = "5"> 5 </option> 
<option value = "6"> 6 </option> 
<option value = "7"> 7 </option> 
<option value = "8"> 8 </option> 
</select> </td> </tr> 
<br/> 

<tr> <td> <label> Select Your Department</label></td> 
<td><select name = "department"> 
<option value = "ISE"> ISE </option> 
<option value = "CSE"> CSE </option> 

</select> </td> </tr> 
<br/> 

<tr> <td> <label> Password </label> </td> 
<td><input type = "password" name = "password" placeholder = "Enter your password"  class = "formelements"><br/> </td> </tr> 
<tr > 
<td colspan="2"><input type = "submit" value= "Register Now" name = "submit" id = "submit"> <br/></td> </tr> 
<tr > 
<td colspan="2"><a href="studentlogin.php"><input type = "button" value= "Login Now"  name = "login" id = "login"></a> <br/></td> </tr> 
<tr > 
<td colspan="2"><a href="deactivate.php"><input type = "button" value= "Deactivate Account"  name = "deactivate" id = "deactivate"></a> <br/></td> </tr> 
</table>  
</div> 
</form>

<?php 
if(isset($_POST['login'])){
header('Location:studentlogin.php') ;
	
}

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$usn = $_POST['usn'];
$mobile = $_POST['mobile'];
$sem = $_POST['sem'];
$department = $_POST['department'];
$insert = "insert into students(name,email,password,usn,mobile,sem,department) values('$name','$email','$password','$usn','$mobile','$sem','$department')";

$run = mysqli_query($con,$insert);


}



?> 
</div> 
<footer> 
 &copy;Nishanth Hegde BMSCE
 </footer>
</body> 
 
</html> 