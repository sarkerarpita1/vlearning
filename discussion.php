 <html>
   <head>
   <title>Add a Topic</title>
   </head>
   <body>
   <h1>Add a Topic</h1>
  <form method="POST" action="">
   <p><strong>Your E-Mail Address:</strong><br>
   <input type="email" name="email" size=40 maxlength=40>
 <p><strong>Topic Title:</strong><br>
  <input type="text" name="title" size=40 maxlength=70>
  <P><strong>Post Text:</strong><br>
  <textarea name="post_text" rows=8 cols=40 wrap=virtual></textarea>
  <P><input type="submit" name="submit" value="Add Topic"></p>
  </form>
 </body> 
 </html>
 
 
<?php

require 'database_connect.php';

if(isset($_POST['submit']))
{
	
	$email = $_POST['email'];
	$title = $_POST['title'];
	$text = $_POST['post_text'];
	
	if(isset($_POST['title']) && isset($_POST['post_text']) && isset($_POST['email']) && !empty($_POST['title']) &&  !empty(				 		$_POST['post_text']) && !empty($_POST['email']))
	{
		$sql = "INSERT INTO `discussion`( `Email`,`Topic Title`,`Text`) VALUES ('$email','$title','$text')";
		$sql_run = mysql_query($sql);
		
		if($sql)
		{
			echo "Inserted";
		}
		else
		{
			echo mysql_error();
		}
	}
}

?>