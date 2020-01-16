
 <html>
   <head>
   <title>Add a Topic</title>
   </head>
   <body>
<div>			
	<form method="POST">
		<input  type="input" name="searchtitle" placeholder="Search title">
		<button  name="submit">
			Search
		</button>
	</form>
</div>

<div>			
	<button onclick="location.href='discussion_add.php'">Add</button>
</div>

<?php

	require 'database_connect.php';

	$searchtitle = "";
	if(isset($_POST['searchtitle']))
	{
		$searchtitle = $_POST['searchtitle'];
	}

	$where = "";
	if (!empty($searchtitle)) {
		$where = "WHERE `Topic Title` like \"%" . $searchtitle . "%\"";
	}


	$sql = "SELECT `Email`, `Topic Title`, `Text` FROM discussion " . $where;

	$i = 0;
	if ($result = $mysqli -> query($sql)) {

		while ($row = $result -> fetch_row()) {
			$i++;
?>

		<h2> <?php echo $i ?> </h2>
		<p><strong>E-Mail Address:</strong><br>
		<?php echo $row[0]; ?>
		<p><strong>Topic Title:</strong><br>
		<?php echo $row[1]; ?>
		<P><strong>Post Text:</strong><br>
		<?php echo $row[2]; ?>

<?php
			printf ("%s (%s)\n", $row[0], $row[1]);
		}
		$result -> free_result();
	}


?>




 </body> 
 </html>
 
 