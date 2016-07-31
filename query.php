<?php
	$host='localhost';
	$user='root';
	$pass='';
	$conn=mysql_connect($host,$user,$pass);
	mysql_select_db('jumbler');
	$word1=$_POST['word'];
	$sql="INSERT INTO `history`(`word`) VALUES ('$word1')";
	mysql_query($sql, $conn);
	header("location:jumbler.php");
?>

