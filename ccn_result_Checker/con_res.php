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
?>