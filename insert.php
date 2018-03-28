<?php
require_once 'connect.php';
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['college']) && isset($_POST['university']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$college=$_POST['college'];
	$university=$_POST['university'];
        
       

	$query="INSERT into contact VALUES"."('$firstname','$lastname','$email','$contact','$college','$university')";
	if($conn->query($query)===TRUE)
	{
		echo '<center><img src="images/reg.jpg" class="img-thumbnail">';
                echo " <b> Registeration Successfull</b></center>";
	}
}






?>

