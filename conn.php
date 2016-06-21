<?php
	$name = $_POST['name'];
	$emil = $_POST['emil'];
	$mima = $_POST['mima'];
	echo$_POST['name'];
	$conn= mysqli_connect('localhost','root','hhhh','tt');
	if(!$conn){
		die('连接错误'.connect_error());
	}
	$sql= "insert into ttt(name,emil,mima) values('$name','$emil',$mima);";
	
	if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
	
?>