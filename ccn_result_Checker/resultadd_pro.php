<?php
include "con_res.php";
$name=$_POST['name'];
$father=$_POST['father'];
$id=$_POST['id'];
$semester=$_POST['semester'];
$technology=$_POST['technology'];
$session=$_POST['session'];
$gpa=$_POST['gpa'];


$q="INSERT INTO diploma(name,father,id,semester,technology,session,gpa)
VALUES
('$name','$father','$id','$semester','$technology','$session','$gpa')
";
$r= mysql_query($q);

if ($r){
	echo"Insert Successfully";	
}

else {
	echo mysql_error();
}
?>