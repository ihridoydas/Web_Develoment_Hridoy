<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>See your Result</title>
<style type="text/css">
<!--
.style1 {
	color: #0099FF;
	font-size: 18px;
}
#form1 table tr td {
	color: #FFF;
}
body {
	background-color: #009;
}
body,td,th,tr {
	color: #FFF;
	text-height: 25px;
	text-align: center;
}
-->
</style>
</head>

<body>
<h1><img src="http://localhost/ccn/image/logo.jpg" width="1031" height="135" alt="ccnlogo" /></h1>
<p align="center"><font color="#0066FF" size="6"><strong><font color="#FFFFFF"><h1>See your result</h1></font></strong></font></p>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
//$username="root"; // Mysql username 
$password=""; // Mysql password 
//$password=""; // Mysql password 
$db_name="resultccn"; // Database name 
//$db_name="uk"; // Database name 
$tbl_name="diploma"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$id=$_POST['id']; 
$semester=$_POST['semester']; 
$technology=$_POST['technology']; 
$session=$_POST['session']; 

$sql="SELECT * FROM $tbl_name WHERE id='$id' and semester='$semester' and technology='$technology' and session='$session'";
$resultccn=mysql_query($sql);
$count=mysql_num_rows($resultccn);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

echo "<table border='3' align='center' cellpadding='16'>

<tr>
<th>Student Name</th>
<th>Father Name</th>
<th>College ID</th>
<th>Semester</th>
<th>Technology</th>
<th>Session</th>
<th >GPA</th>
</tr>";

while($row = mysql_fetch_array($resultccn))
  { 
  echo "<tr>";
  echo "<th>" . $row['name'] . "</th>";
  
  echo "<th>" . $row['father'] . "</th>";
  
  echo "<th>" . $row['id'] . "</th>";
  
  echo "<th>" . $row['semester'] . "</th>";
  
  echo "<th>" . $row['technology'] . "</th>";
  
  echo "<th>" . $row['session'] . "</th>";
  
  echo "<th>" . $row['gpa'] . "</th>";
  echo "</tr>";
  }
echo "</table>";



}
else {

echo "<p align='center'><h2>Wrong Details Submit. Please insert again.</h2></p>";


}

?>

<h3 align="center"><a href="result.php"><strong><font color="#FFFFFF">Go back</font></strong></a>
</h3>

<table width="1101" height="68" border="1" align="center">
    <tr>
      <td height="62" align="center" valign="middle"><h3>This Digital Result Published-Create By ~ (( Hridoy Chandra Das )).</h3>
      <A HREF="javascript:window.print()">
<button type="button">Print</button></A></td>
    </tr>
  </table></td>
    </tr>
  </table>&nbsp;</p>
</body>
</html>