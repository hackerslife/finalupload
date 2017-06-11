<?php
	$db_host = "localhost"; 
	$db_username = "root";
	$db_pass = "00000000";  
	$db_name = "optical"; 
	$main = mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	$link = mysql_select_db($db_name,$main) or die ("no database");
	
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$donotcall = $_POST["DoNotCall"];
	$telephone = $_POST["Telephone"];
	$subject = $_POST["Subject"];
	$comment = $_POST["Comment"];
	
	echo $_POST["Name"];
	echo $_POST["Email"];
	echo $_POST["DoNotCall"];
	echo $_POST["Telephone"];
	echo $_POST["Subject"]; 
	echo $_POST["Comment"];
	
	$sql = "INSERT INTO customer VALUES ('$name', '$email', $donotcall, '$telephone', '$subject', '$comment')";
	if(mysql_query($sql))
	{
    echo "Records added successfully.";
	} 
	else
	{
    echo "ERROR: Could not able to execute";
	}
	mysql_close();
?>