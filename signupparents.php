<?php

require 'database_connect.php';

?>


<form action="" method="post" enctype="multipart/form-data">

<table border="0" cellpadding="5" cellspacing="0" width="600">

<tr> 
<td>
<label for="Name">Name:</label>
</td> 
<td>
<input name="Name" type="text" maxlength="25" style="width: 222px;" />
</td> 
</tr> 

<tr> 
<td>
<label for="Date Of Birth">Date Of Birth:</label>
</td> 
<td>
<input name="DOB" type="date" maxlength="15" style="width: 222px;" />
</td> 
</tr> 
</br>
<tr> 
<td>
<label for="Description">Descibe:</label>
</td> 
<td>
<textarea name="desc" rows="4" cols="25" maxlength="150">
</textarea>
</td>
</tr>


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


<table border="0" cellpadding="5" cellspacing="2" width="800">
	
    <caption>Children's Name</caption>
    <tr> 
	</tr>
    <tr>
    	<td>
        	<label for="Name">Name:</label>
        </td>
        <td>
			<input name="chldname1" type="text" maxlength="25" style="width: 222px;" />	
        </td>
        <td>
        	<label for="Age">Age:</label>
        </td> 
        <td>
        	<input name="age1" type="number" maxlength="10" style="width: 222px;" />
        </td>
    </tr>
    <tr>
    	<td>
        	<label for="Name">Name:</label>
        </td>
        <td>
			<input name="chldname2" type="text" maxlength="25" style="width: 222px;" />	
        </td> 
        <td>
        	<label for="Age">Age:</label>
        </td> 
        <td>
        	<input name="age2" type="number" maxlength="10" style="width: 222px;" />
        </td>
    </tr>
    <tr>
    	<td>
        	<label for="Name">Name:</label>
        </td> 
        <td>
			<input name="chldname3" type="text" maxlength="25" style="width: 222px;" />	
        </td>
        
        <td>
        	<label for="Age">Age:</label>
        </td> 
        <td>
        	<input name="age3" type="number" maxlength="25" style="width: 222px;" />
        </td>
    </tr>
    <tr>
    	<td>
        	<label for="Name">Name:</label>
        </td>
        <td>
			<input name="chldname4" type="text" maxlength="25" style="width: 222px;" />	
        </td>
        <td>
        	<label for="Age">Age:</label>
        </td>
        <td>
        	<input name="age4" type="number" maxlength="25" style="width: 222px;" />
        </td>
    </tr>
    <tr>
    	<td>
        	<label for="Name">Name:</label>
        </td>
        <td>
			<input name="chldname5" type="text" maxlength="25" style="width: 222px;" />	
        </td>
        <td>
        	<label for="Age">Age:</label>
        </td> 
        <td>
        	<input name="age5" type="number" maxlength="25" style="width: 222px;" />
        </td>
    </tr>
</table>

</br>
 <tr> 
 <td>
<label for="Picture">Photo:</label>
</td> 
<td>
<input type="file" name="img" value="upload" maxlength="100"  />
</td> 
</tr> 
</br></br>
<tr> <td>
<label for="Video">Video:</label>
</td><td>
<input type="file" name="fileToUpload"/>
</td></tr>  

</td> 
</br></br>
<td>
<div style="float:inherit">

<input name="Sub" type="submit" value="Submit" />
</div>
</td> 
</tr>

</table>
</form>



<?php

if(isset($_POST['Sub']))
{
	$pers_name = $_POST['Name'];
	$pers_Dob = $_POST['DOB'];
	$pers_Decrip = $_POST['desc'];
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
	
	
	if(isset($pers_name) && isset($pers_Dob) && isset($pers_Decrip) && isset($pers_email) && isset($pers_pass) && !empty($pers_name) && !empty($pers_Dob) && !empty($pers_Decrip) && !empty($pers_email) && !empty($pers_pass))
	{
		$query = "INSERT INTO `parents`(`Name`, `DOB`,`Description`,`Email`,`Password`, `Photo`, `Video`) VALUES('$pers_name', '$pers_Dob', '$pers_Decrip','$pers_email','$pers_pass','$image','$video_path')";
		
		if($mysqli -> query($query))
		{	
		echo "Inserted";
		}
		
		if(!Move_Uploaded_File($temp, $target))
		{
			echo "Not Moved";
		}
		
		if(!Move_Uploaded_File($_FILES["fileToUpload"]["tmp_name"],$target_file))
		{
			echo "Not Uploaded ";
		}

	}
	
	$pernt_chld_nam1 = $_POST['chldname1'];
	$pernt_chld_nam2 = $_POST['chldname2'];
	$pernt_chld_nam3 = $_POST['chldname3'];
	$pernt_chld_nam4 = $_POST['chldname4'];
	$pernt_chld_nam5 = $_POST['chldname5'];
	$pernt_chld_age1 = $_POST['age1'];
	$pernt_chld_age2 = $_POST['age2'];
	$pernt_chld_age3 = $_POST['age3'];
	$pernt_chld_age4 = $_POST['age4'];
	$pernt_chld_age5 = $_POST['age5'];
	
	if(isset($_POST['chldname1']) && isset($_POST['chldname2']) && isset($_POST['chldname3']) && isset($_POST['chldname4']) && isset($_POST['chldname5']) && isset($_POST['age1']) && isset($_POST['age2']) && isset($_POST['age3']) && isset($_POST['age4']) && isset($_POST['age5']) && !empty($_POST['chldname1']) && !empty($_POST['chldname2']) && !empty($_POST['chldname3']) && !empty($_POST['chldname4']) && !empty($_POST['chldname5']) && !empty($_POST['age1']) && !empty($_POST['age2']) && !empty($_POST['age3']) && !empty($_POST['age4']) && !empty($_POST['age5']))
	{
		$sql1 = $mysqli -> query("INSERT INTO `parent's children names`(`id`, `Name`, `Age`, `Parents Name`) VAlUES('',    	'$pernt_chld_nam1 , $pernt_chld_nam2 , $pernt_chld_nam3 , $pernt_chld_nam4 , $pernt_chld_nam5 ' , '$pernt_chld_age1 , $pernt_chld_age2 , $pernt_chld_age3 , $pernt_chld_age4 , $pernt_chld_age5', '$pers_name')");
		$sql_exe = $mysqli -> query($sql1);
		
		if($mysqli -> query($sql_exe))
		{	
		echo "Inserted";
		}
	}
}

?>