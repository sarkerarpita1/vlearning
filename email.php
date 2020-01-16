<?php

require 'database_connect.php';

if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']))
	{
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) 
		{
			
			$sql = "INSERT INTO `contact` (`Name`,`Email`,`Message`) VALUES ('$contact_name','$contact_email','$contact_text')";
				$sq_run =  $mysqli -> query($sql);
				
					if($sq_run)
					{
					echo ' <span style="color:#059;"><em><strong>Thanks for Contacting us. We \'ll be in touch soon </strong></em></span>';
					}
					else
					{
					echo mysqli_error();
					}
		}
	}
?>





<form action="" method="POST">

	Name:</br> 
    <input type="text" name="contact_name"></br></br>
	Email:</br> 
    <input type="text" name="contact_email"></br></br>
	Message:</br>
	<textarea name="contact_text" rows="6" cols="30"></textarea></br></br>
	<input type="submit" value="Submit">
    
</form>

