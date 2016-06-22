<?php 
	date_default_timezone_set("Asia/Shanghai");
	$c = $_POST['name'];
	$b = $_POST['sum'];
	$d = $_POST['prise'];
	if (empty($c)) {
		echo "<script type='text/javascript'>alert('商品名不能为空');history.back();</script>"; 
	}else{
		$m=$_POST["name"];  
	if(empty($b)){  
	echo "<script type='text/javascript'>alert('商品价格不能为空');history.back();</script>"; 
	}else{
		$s=$_POST["sum"];  
	}
	if(empty($d)){  
	echo "<script type='text/javascript'>alert('商品个数不能为空');history.back();</script>"; 
	}else{
	$p=$_POST["prise"];  
	$total=$p*$s;
	$t=date("Y-m-d,H:m:s");
	$cc=mysqli_connect("localhost","root","","good"); 
	$sql="insert into sumer(name,prise,sum,total) values ('$m',$p,$s,$total)";
	$r=mysqli_query($cc,$sql); 
	if($r){  
	echo "<script type='text/javascript'>alert('加入购物车成功！');location.href='index.php';</script>";
	}else{

	echo "<script type='text/javascript'>alert('加入购物车失败');history.back();</script>"; 
	}
	mysqli_close($cc);
	} 
}
?>
	