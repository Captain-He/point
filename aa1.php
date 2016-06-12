<?php 
$name = $_POST['name'];
	$emal = $_POST['emal'];
	$secart = $_POST['secart'];
	
	$conn =  mysqli_connect("localhost","root","","point1");
	if (!$conn) {
		# code...
		echo "连接错误！";
	}
	else{
	$sql ='insert into upin values("$name","$emal",$secart)';
	mysql_query($sql);
	echo "注册成功！！！";
	}
	mysqli_close($conn);
	?>