<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>购物车</title>
</head>
<body>
<span>购物车</span>
<div>
<form action="good.php" method="post">
	商品名：<input type="text" name="name"></input><br />
	数量：<input type="text" name="sum"></input><br />
	单价：<input type="text" name="prise"></input><br />
	<input type="submit" value="确定">
</form>
<div id="show">
<?php  
	$conn = mysqli_connect('localhost','root','','good');
	if(!$conn){
		die('连接错误！'.mysqli_connect_error());
	}
	$sql = "select *from sumer";
	$re = mysqli_query($conn,$sql);
	$all=0;
	echo "<table border='1'>";
	echo "<tr><th>商品名</th><th>单价</th><th>数量</th><th>总计</th></tr>";
	while ( $r=mysqli_fetch_array($re,MYSQLI_BOTH)){
		echo"<tr><td>".$r['name']."</td><td>".$r['prise']."</td><td>".$r['sum']."</td><td>".$r['total']."</td></tr>";
		$all+= $r['total'];
		}
		echo "</table>";	
		echo "总计花费：￥"."$all";

?>
</div>
</body>
</html>