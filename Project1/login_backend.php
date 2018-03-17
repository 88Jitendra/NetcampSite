<?php
session_start();
$a=$_POST['x'];
$b=$_POST['y'];
if($a==""||$b=="")
{
	echo "Plz enter all details";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("net");
	$query="SELECT * FROM student WHERE email='$a' AND password='$b'";
	$result=mysql_query($query);
	$con=mysql_num_rows($result);
	if($con!=0)
	{
		$_SESSION['password']=$b;
		header("location:welcome.php");
	}
	else
	{
		echo "<div class='raw text-center'><strong>Your data is mismatch.....Plz login again</strong></div>";
	}
	
}

?>