<?php

require 'database_connect.php';

?>

<form action="" method="POST" enctype="multipart/form-data">

<table border="0" cellpadding="5" cellspacing="0" width="600">

<tr> <td>
<label for="Name">Name:</label>
</td> <td>
<input name="Name" type="text" maxlength="25" style="width: 222px;" />
</td> </tr> 

<tr> <td>
<label for="Date Of Birth">Date Of Birth:</label>
</td> <td>
<input name="DOB" type="date" maxlength="15" style="width: 222px;" />
</td> </tr> 

<tr> <td>
<label for="Description">Descibe:</label>
</td> <td>
<textarea name="desc" rows="4" cols="25" maxlength="150">
</textarea>
</td> </tr> 

<tr> <td>
<label for="Degree">Degree:</label>
</td> <td>
<input name="degre" type="text" maxlength="20" style="width: 222px;" />
</td> </tr> 

<tr> <td>
<label for="Experience">Experience:</label>
</td> <td>
<input name="Exp" type="number" maxlength="5" style="width: 222px;" />
</td> </tr>

<tr> <td>
<label for="Subject">Subject:</label>
</td> <td>
<input name="Sub" type="text" maxlength="30" style="width: 222px;" />
</td> </tr>

<tr> 
<td>
<label for="Email">Email:</label>
</td> 
<td>
<input name="email" type="email" maxlength="25" style="width: 222px;" />
</td> 
</tr>

<tr> 
<td>
<label for="Password">Password:</label>
</td> 
<td>
<input name="pwd" type="password" maxlength="5" style="width: 222px;" />
</td> 
</tr>

 <tr> 
 <td>
<label for="Picture">Photo:</label>
</td> 
<td>
<input type="file" name="img" value="upload" maxlength="100"  />
</td> 
</tr> 

<tr> <td>
<label for="Video">Video:</label>
</td><td>
<input type="file" name="fileToUpload"/>
</td></tr> 

</td>
<div style="float: right">



<input name="Sub" type="submit" value="Submit" /></div>
</td> </tr>
</table>
</form>




<?php
if(isset($_POST['Sub']))
{


	$pers_name = $_POST['Name'];
	$pers_Dob = $_POST['DOB'];
	$pers_decrip = $_POST['desc'];
	$pers_degree = $_POST['degre'];
	$pers_exper = $_POST['Exp'];
	$pers_sub = $_POST['Sub'];
	$pers_email = $_POST['email'];
	$pers_pass = $_POST['pwd'];
	
	$image = $_FILES['img']['name'];
	
	$temp = $_FILES['img']['tmp_name'];

	$target =  "image/". Basename($image);
	
	/*For Video Upload Code*/
	$target_dir = "test_upload/";

	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType	    != "mpeg")
	{
    	echo "File Format Not Suppoted";
	} 
	
	$video_path=$_FILES['fileToUpload']['name'];

	if(isset($pers_name) && isset($pers_Dob) && isset($pers_decrip) && isset($pers_degree) && isset($pers_exper) && isset($pers_email) && isset($pers_pass) && isset($pers_sub) && !empty($pers_name) && !empty($pers_Dob)&& !empty($pers_decrip) && !empty($pers_degree) && !empty($pers_exper) && !empty($pers_sub) && !empty($pers_email) && !empty($pers_pass))
	{
		$query = "INSERT INTO `teacher`(`id`, `Name`, `DOB`,`Description`,`Degree`,`Experience`,`Subject`, `Photo`,`Video`, `Email`, `Password`) VALUES('', '$pers_name', '$pers_Dob','$pers_decrip','$pers_degree','$pers_exper','$pers_sub	  ','$image','$video_path', '$pers_email', '$pers_pass')";
		
		$sql_run = $mysqli -> query($query);
		
		if($mysqli -> query($sql_run))
		{	
		echo "Inserted";
		}
		
		if(Move_Uploaded_File($temp, $target))
		{
			echo "Moved";
		}
			else
		{
			echo "Not Moved";	
		}
		
		if(!Move_Uploaded_File($_FILES["fileToUpload"]["tmp_name"],$target_file))
		{
			echo "Not Uploaded ";
		}

	}
}
?>
	
