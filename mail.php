<?php

if (isset($_POST['submit'])){
	echo $name=$_POST['name'];
	echo $email=$_POST['email'];
	echo $sub=$_POST['subject'];
	echo $msg=$_POST['message'];

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