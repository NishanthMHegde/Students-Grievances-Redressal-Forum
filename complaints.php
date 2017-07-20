<!DOCTYPE html> 
<?php
$con = mysqli_connect("127.0.0.1","root","","complaints_forum") or die("Connection Failed!");

?>
<html> 
<head> <meta charset = "UTF-8"> 
<title> Students Complaints </title> 
<link rel = "stylesheet" href = "main.css">
</head> 
<body>
<div class = "container">
<h1> Please fill in your grievances.Your complaints will surely be addressed</h1>
<div class = "form">
<form action="" method = "post">
<table>
<tr>
<td ><label>Please choose a category</label></td> 
<td><select name = "category" class="formelements"> 
<option value = "campus"> Campus </option>
<option value = "selfstudy"> Self Study </option>
<option value = "timetable"> Time Table </option>
<option value = "professors"> Professors </option>
<option value = "ragging"> Ragging</option>
<option value = "ciesee"> CIE and SEE </option>

</select>
</td>
</tr> 
<tr>
<td ><label>Please choose your department</label></td> 
<td>
<select name = "department"> 
<option value = "ISE"> ISE </option> 
<option value = "CSE"> CSE </option> 

</select>


</td>
</tr> 
<tr>
<td> <label>Please choose an appropriate Title for your complaint: </label></td>
<td><input type="text" name="complainttitle"  class="formelements"></td>
 </tr>
 
 
 <tr><td><label>Please explain your grievances below: </label></td>
 <td><textarea name = "complaintdescription" placeholder = "Enter your complain description" class = "formelements"> </textarea></td>
 </tr>

</table> 
<input type = "submit" value = "Submit and Vote" id="logout" name="logout">
<a href = "voting.php"> Click Here to go to Voting Section </a> 
</form>  
</div> 

<?php


  if(isset($_POST['logout'])){
	  
	  $category = $_POST['category'];
	  $title = $_POST['complainttitle'];
	  $description = $_POST['complaintdescription'];
	  $department=$_POST['department'];
	  $insert = "INSERT INTO complaints(category,title,description,department,votes,suggestions) VALUES ('$category','$title','$description','$department',0,'')";
	  $query = mysqli_query($con,$insert);
	  if($query){
		  
	 header('Location:voting.php');
	  }
	  
	  
  }

?>

</body> 



</html>