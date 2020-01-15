<div>			
				<form method="POST">

					
						<input  type="email" name="email" placeholder="Admin">
						
					

					
						<input  type="password" name="pass" placeholder="Password">
						
					

					
						<button name="submit">
							Login
						</button>
				

				</form>
</div>



<?php

require 'core_student.php';
require 'database_connect.php';

?>



<?php
	
	if(isset($_POST['submit']))
	{
		$user=$_POST['email'];
		$pwd=$_POST['pass'];
		
		if(isset($user) && isset($pwd) && !empty($user) && !empty($pwd))
		{
			$query ="SELECT `id` FROM students WHERE Email='$user' && Password='$pwd'";
		 	if($data = $mysql -> query($query))
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
					header('Location:index_student.php');
				}
			}
			
		}
	}
		 	
?>