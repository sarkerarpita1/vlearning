<?php
require 'database_connect.php';
require 'core_student.php';

if(loggedin())
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		$teach_id = $_SESSION['user_id'];
		
		$sql = "SELECT * FROM `students` WHERE `id` = '$teach_id'";
		$sql_run = $mysqli -> query($sql);
		$rws =  $sql_run -> fetch_assoc();

		echo "<img src='image/".$rws['Picture']."' height='240px' width='380px'>";
		
	} 
}
else
{
	include 'login_for_student.php';
}
?>

<div class="form">
	<h1><span> Name:</span><?php echo $rws['Name']; ?></h1>
  	<p><span> DOB:</span><?php echo $rws['DOB'];?></p>
  	<p><span> Email:</span><?php echo $rws['Email']; ?></p>
  	<p><span> Password:</span><?php echo $rws['Password']; ?></p>
  	<p><span>Achievement:</span><?php echo $rws['Achievement']?></p>
    <video width="300" height="200" controls="controls" autoplay="autoplay">
	<source src="test_upload/<?php echo $all_video['video']; ?>" type="video/mp4">
	</video>
</div>
<?php			

?>

<a href='logout_student.php'> Log Out</a>