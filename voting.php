<!DOCTYPE html> 
<?php 
$con = mysqli_connect("127.0.0.1","root","","complaints_forum") or die("Connection Failed"); 
?>


<html> 
<head><meta charset = "UTF-8" >
<title>Students Voting Booth </title> 
<link rel = "stylesheet" href = "main.css">
</head> 
<body >
<div class = "background">
<h1> CASTE YOUR VOTE NOW!!!! </h1>

<p style="color:red;font-size:300%;"> Caste your vote for any of these complaints/feedbacks.Please note that your vote is very valuable</p>
<form method = "post">
<table class = "votetable"> 
<tr><th>ID</th><th>Category</th><th> Complaint Title</th><th>Vote Now</th><th>Department</th><th>Votes</th><th>HOD Suggestion</th></tr> 





</div> 
<?php 



$select = "select * from complaints  order by votes";
$run = mysqli_query($con,$select);
while($row = mysqli_fetch_array($run)){
	$complaintid = $row['id'];
	$complainttitle = $row['title'];
	$category = $row['category'];
	$dep = $row['department'];
    $suggestion = $row['suggestions'];
    $votes = $row['votes'];

?>
<tr><td><?php echo $complaintid ; ?> </td><td><?php echo $category ; ?> </td><td> <?php echo $complainttitle ?></td><td><input type = "submit" class = "votebtn" name = "<?php  echo $category?>" value = "VOTE" ></td><td><?php echo $dep?> </td><td><?php echo $votes?> </td><td><?php echo $suggestion ; ?> </td></tr>
<?php } ?>

<tr><td><input type = "submit" value = "Submit and Vote" id="logout" name="logout"></td></tr> 
</table>
</form> 
</div> 
<?php
if(isset($_POST['timetable'])){
	
	$votes = "update complaints set votes = votes+1 WHERE category='timetable' ";
	$run = mysqli_query($con,$votes);
	
}

?> 

<?php
if(isset($_POST['campus'])){
	
	$votes = "update complaints set votes = votes+1 WHERE category='campus' ";
	$run = mysqli_query($con,$votes);
	
}

?> 
<?php
if(isset($_POST['selfstudy'])){
	
	$votes = "update complaints set votes = votes+1 WHERE category='selfstudy' ";
	$run = mysqli_query($con,$votes);
	
}

?>

<?php
if(isset($_POST['professors'])){
	
	$votes = "update complaints set votes = votes+1 WHERE category='professors' ";
	$run = mysqli_query($con,$votes);
	
}

?>


<?php
if(isset($_POST['ciesee'])){
	
	$votes = "update complaints set votes = votes+1 WHERE category='ciesee' ";
	$run = mysqli_query($con,$votes);
	
}

?>

<?php
if(isset($_POST['ragging'])){
	
	$votes = "update complaints set votes = votes+1 WHERE category='ragging' ";
	$run = mysqli_query($con,$votes);
	
}
if(isset($_POST['logout'])){
	
	header('Location:studentlogin.php');
}

?>




</html> 