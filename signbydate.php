<?php  
	$a=0;
	$t="";
	date_default_timezone_set('PRC');
   $time = $_SERVER['REQUEST_TIME'];
   $d=date('Y-m-d',$time);
    $conn=mysqli_connect('localhost','root','','sign');
	if (!$conn) {
		die('链接错误'.mysqli_connect_error());
	}
	$s = "select *from sign2";
	$m=mysqli_query($conn,$s);
	$b=mysqli_fetch_array($m,MYSQLI_BOTH);
	$t=$b['time'];
	$a=$b['qian'];
	if (isset($_POST['yes'])) {
	if ($t==$d) {
		echo "您今天已经签过到了！";
	}else{

		$a=$b['qian']+1;
		$sql2="update sign2 set time='$d' where id=1";
		mysqli_query($conn,$sql2);
		$sql="update sign2 set qian='$a' where id=1";
		mysqli_query($conn,$sql);
		}
	}
	echo $a;
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