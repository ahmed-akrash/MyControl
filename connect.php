<?php


$username=$_GET["username"];
$password=md5($_GET["password"]);
$connect=mysqli_connect("127.0.0.1","root","","mycontrol");
$sql="SELECT  `password` FROM `users` WHERE id=5 && username='$username' && password='$password';";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_row($result);

	if(!empty($row[0]))
	{
		echo 1;
	}
   else
   {
	   echo 2;
   }
		
		
		;
/*if($row[0]==$password)
{
	echo "good";
}
else
{
	echo "no";
}


?>*/