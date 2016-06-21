<?php  
	//$a=0;	
    $conn=mysqli_connect('localhost','root','','sign');
	if (!$conn) {
		die('链接错误'.mysqli_connect_error());
	}
	$s = "select *from sign2";
	$m=mysqli_query($conn,$s);
	$b=mysqli_fetch_array($m,MYSQLI_BOTH);
	if (isset($_POST['yes'])) {
	
		$a=$b['qian']+1;
	}
	
	$sql = "update sign2 set qian='$a' where id=1";
	mysqli_query($conn,$sql);
	$s = "select *from sign2";
	$m=mysqli_query($conn,$s);
	$b=mysqli_fetch_array($m,MYSQLI_BOTH);
	
	echo $b['qian'];
	
	mysqli_close($conn);
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>签到</title>
</head>
<body>
<form action="" method="post">
	<input type="submit" name="yes" value="今日签到">
</form>
</body>
</html>