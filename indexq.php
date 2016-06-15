<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>留言板</title>
	<link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>
<span>留言板</span>
<div>
<form action="message.php" method="post">
	<textarea name="contern"></textarea><br />
	留言用户：<input type="text"  name="user"><br />
	<input type="submit" value="留言" class="liuyan">
</form>
<div id="show">
<?php  
	$conn = mysqli_connect('localhost','root','hhhh','liuyan');
	if(!$conn){
		die('连接错误！'.mysqli_connect_error());
	}
	$sql = "select *from message";
	$re = mysqli_query($conn,$sql);
	echo "<table border='1'>";
	echo "<tr><th>留言用户</th><th>留言内容</th><th>留言时间</th></tr>";
	while ( $r=mysqli_fetch_array($re,MYSQLI_BOTH)){
		echo"<tr><td>".$r['name']."</td><td>".$r['content']."</td><td>".$r['time']."</td></tr>";
		}
		echo "</table>";	
?>
</div>
</body>
</html>