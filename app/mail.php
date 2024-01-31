<?php 

if(isset($_POST['btnsubmit']))
{
	$to = $_POST['email'];
	$subject = "Test Email Here";
	$txt = "Hello world! Testing.";
	$headers = "From: support@myhiptips.com";

	$mail = mail($to,$subject,$txt,$headers);
	if($mail)
	{
		echo "Success";
	}
	else
	{
		echo "Failed";
	}
}

?>

<form action="" name="mail" method="POST">
	<input type="email" name="email" required>
	<input type="submit" name="btnsubmit" value="Submit">
</form>	