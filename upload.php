<?php
	$name = $_POST['ming'];
	$mima = $_POST['mima'];

	$conn = mysqli_connect('localhost','root','hhhh','tt');

	if (!$conn) {
		# code...
		die('连接错误'.mysqli_connect_error());
	}
	$sql="select mima from ttt where name='$name'";
	$w=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($w);
	if($row['mima']==$mima)
	{
		echo $row['mima'];
		echo "ok";
	}
	else{
		echo'no';
	}

	mysqli_close($conn);
	