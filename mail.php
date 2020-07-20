<?php

if (isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];

	$to= 'ujjwalsoni1707@gmail.com';
	$subject= $sub;
	$message = "Name: ",$name,"\n","Wrote the following: \n\n",$msg;
	$headers= "From: ",$email;

	if (mail($to,$subject,$message,$headers)){
	   echo "Sent Successlully"," ",$name;
	}
	else{
			echo "sry!";
	}
}
?>