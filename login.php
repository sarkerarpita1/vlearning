<div>			
				<form method="POST">

					
						<input  type="email" name="email" placeholder="Admin">
						
					

					
						<input  type="password" name="pass" placeholder="Password">
						
					

					
						<button  name="submit">
							Login
						</button>
				

				</form>
</div>



<?php

require_once 'profile.php';
require 'database_connect.php';



?>



<?php
	
	if(isset($_POST['submit']))
	{
		$user=$_POST['email'];
		$pwd=$_POST['pass'];
		
		if(isset($user) && isset($pwd) && !empty($user) && !empty($pwd))
		{
			$query ="SELECT `id` FROM teacher WHERE Email='$user' && Password='$pwd'";
		 	if($data = $mysqli -> query($query))
			{
				$query_num_rows = mysqli_num_rows($data);
				if($query_num_rows == 0)
				{
					echo "Invalid Username/Password Combination";
				}
				elseif($query_num_rows == 1)
				{
					$user_id = $data -> fetch_assoc()['id'];
					$_SESSION['user_id'] = $user_id;
					header('Location:index.php');
				}
			}
			
		}
	}
		 	
		
		 	/*if($data)
		 	{
				if(mysql_num_rows($data) > 0 )
				{
			 		echo $_SESSION["new"]=$user;
					header('location:profile.php');
				}
				else
		 		{
			 	$errmsg =  'Teacher user name and password not found';
				echo $errmsg;
		
		 		}
			}	
	
	elseif(isset($_POST['submit']))
	{
		$user=$_POST['email'];
		$pwd=$_POST['pass'];
		
		if(isset($user) && isset($pwd) && !empty($user) && !empty($pwd))
		{
			$query ="SELECT * FROM students WHERE Email='$user' && Password='$pwd'";
		 	$data = mysql_query($query);
		 	
		
		 	if($data)
		 	{
				if(mysql_num_rows($data) > 0 )
				{
			 	echo $_SESSION["new"]=$user;
				header('location:profile.php');
				}
				else
		 		{
			 	$errmsg = 'Student user name and password not found';
				echo $errmsg;
		
		 		}
			}	
		}
	}*/
?>	