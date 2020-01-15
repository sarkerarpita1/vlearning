<?php

require 'core_student.php';
require 'database_connect.php';

?>


<?php include("header_1.php");?>

<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter User Name">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input name="pass" type="password" placeholder="Password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button name="submit">Sign in</button>
                        <h5><a href="forgot-password.html" class="link">Forgot Password?</a></h5>
                    </div>
                </form>
            </div>
        </div>
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
		 	if($data = mysql_query($query))
			{
				$query_num_rows = mysql_num_rows($data);
				if($query_num_rows == 0)
				{
					echo "Invalid Username/Password Combination";
				}
				elseif($query_num_rows == 1)
				{
					$user_id = mysql_result($data, 0, 'id');
					$_SESSION['user_id'] = $user_id;
					header('Location:index_student.php');
				}
			}
			
		}
	}
		 	
?>
	
    <?php include("footer_1.php")?>