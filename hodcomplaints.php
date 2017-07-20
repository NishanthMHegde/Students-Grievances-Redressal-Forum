<!DOCTYPE html> 
<?php 
$con = mysqli_connect("127.0.0.1","root","","complaints_forum") or die("Connection Failed"); 



?>


<html> 
<head><meta charset = "UTF-8" >
<title>Students Grievances </title> 
<link rel = "stylesheet" href = "main.css">
</head> 
<body>
<div class = "background">
<h1> Complaints registered by students! </h1>

<p style="color:red;font-size:300%;"> Please have a look at the students grievances and give a suitable suggestion.</p>
<form method = "post">
<table class = "votetable"> 
<tr><th>ID</th><th>Category</th><th> Complaint Title</th><th>Department</th><th>Votes</th><th>HOD Suggestion</th></tr> 





</div> 
<?php 
session_start();
$sessionDepartment = $_SESSION['dep'];

$select = "select * from complaints where complaints.department = '$sessionDepartment' order by votes";
$run = mysqli_query($con,$select);
while($row = mysqli_fetch_array($run)){
	$complaintid = $row['id'];
	$complainttitle = $row['title'];
	$category = $row['category'];
	$dep = $row['department'];
    $suggestion = $row['suggestions'];
	$votes = $row['votes'];


?>
<tr><td><?php echo $complaintid ; ?> </td><td><?php echo $category ; ?> </td><td> <?php echo $complainttitle ?></td><td><?php echo $dep?> </td>
<td><?php echo $votes?> </td>
<td><textarea name = "<?php  echo $complaintid ?>"></textarea></td>
</tr>
<?php } ?> 
</table>
<input type = "submit" value = "Submit and Checkout" name = "submit" >
</form> 
</div> 
<?php

if(isset($_POST['submit'])){
for($i=0;$i<100;$i++){
	
		$scomplaint = $_POST[$i];
		if($scomplaint==''){
			
			continue;
		}
		$insertq = "update complaints set suggestions = '$scomplaint' WHERE id = '$i'";
		$runq = mysqli_query($con,$insertq);
		session_destroy();
		
		
		
	
	
}
}

?>
</body>

</html> 