<?php

	require("connect.php");
	
	$name=$_REQUEST['name'];
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$message=$_REQUEST['message'];
	
	
	$result=$con->query("insert into enquiry(name,phone,email,message) values('$name','$phone','$email','$message')");
	$count=mysqli_affected_rows($con);
	if($count>0)
	{
		header("location:index.php");
	}
	else
	{
		header("location:contact.php");
	}
?>