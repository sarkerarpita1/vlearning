<?php
require 'database_connect.php';
require 'profile.php';

if(loggedin())
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		$teach_id = $_SESSION['user_id'];
		
		$sql = "SELECT * FROM `teacher` WHERE `id` = '$teach_id'";
		$sql_run =  $mysqli -> query($sql);
		$rws =  $sql_run -> fetch_assoc();

		echo "<img src='image/".$rws['Photo']."' height='240px' width='380px'>";
		/*while()
		{
			
			echo $name= $rws[1];
			echo $dob= $rws[2];
			echo $desc=$rws[3];
			echo $degree= $rws[4];
			echo $expe= $rws[5];
			echo $photo=$rws[6];
			echo $email=$rws[8];
			echo $pass=$rws[9];
		}*/
	} 
}
else
{
	include 'login.php';
}
?>

<div class="form">
	<h1><span> Name:</span><?php echo $rws['Name']; ?></h1>
  	<p><span> DOB:</span><?php echo $rws['DOB'];?></p>
  	<p><span> Description:</span><?php echo $rws['Description']; ?></p>
 	<p><span> Degree:</span><?php echo $rws['Degree']; ?></p>
  	<p><span> Experience:</span><?php echo $rws['Experience']; ?></p>
    <p><span> Subject:</span><?php echo $rws['Subject']; ?></p>
  	<p><span> Email:</span><?php echo $rws['Email']; ?></p>
  	<p><span> Password:</span><?php echo $rws['Password']; ?></p>
  	<video width="300" height="200" controls="controls" autoplay="autoplay">
	<source src="test_upload/<?php echo $all_video['video']; ?>" type="video/mp4">
	</video>
</div>
<?php			

?>

<a href='logout.php'> Log Out</a>