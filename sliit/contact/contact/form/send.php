<?php

$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$tpno=$_REQUEST["tpno"];
$msg=$_REQUEST["message"];


mail("shafreakonair@gmail.com", "Contact Us", $msg,$email);

if (isset($_REQUEST['yes'])) {

$dbhandle = mysql_connect("localhost", "root","")
 or die("Unable to connect to MySQL");
echo "<font color='white'>Your Email was Successfully Sent</font><br>";

//select a database to work with
$selected = mysql_select_db("mail",$dbhandle)
  or die("Could not select mail");
echo $name;
//execute the SQL query and insert records
if(mysql_query("INSERT INTO email(name,email)VALUES ($name,$email)")){
	echo "Inserted";

}


//close the connection
mysql_close($dbhandle);

  
} 

?>