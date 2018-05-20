<?php
$name = $email = $rate = $comment = " ";
$nameError = $emailError = $commentError = $rateError = " ";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$nameError = "Please Enter a Name";
	}	
	else if(empty[$_POST["email"]])
	{
		$emailError = "Please Enter an Email";
	}
	else if(empty[$_POST["comment"]])
	{
		$commentError = "Please Type a Comment";
	}	
	else if(empty[$_POST["rate"]])
	{
		$rateError = "Please Rate Your Visit";
	}
	else
	{
		echo "Thanks" . $_POST["name"] . "with Email:" . $_POST["email"]"; 
	}

}

?>