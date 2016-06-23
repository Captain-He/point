<?php
	$a=$_POST['name']; 
	echo "$a";
	$conn = mysqli_connect('localhost','root','','search');
	if (!$conn) {
		# code...
		die('错误'.mysqli_connect_error());
	}
	$sql = "select *from search where name like '%$a%' ";
	$q=mysqli_query($conn,$sql);
	$r=mysqli_fetch_array($q,MYSQLI_BOTH);
	echo "$r[text]";
	mysqli_close($conn);
 ?>