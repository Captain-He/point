<?php 
	date_default_timezone_set("Asia/Shanghai");
	$c = $_POST['contern'];
	if (empty($c)) {
		echo "<script type='text/javascript'>alert('留言用户不能为空');history.back();</script>"; 
	}else{
		$u=$_POST["user"];  
	if(empty($u)){  
	echo "<script type='text/javascript'>alert('留言用户不能为空');history.back();</script>"; 
	}else{
	$t=date("Y-m-d,H:m:s");
	//$c=trim($c);  
	$c=htmlspecialchars($c); 
	$c=addslashes($c); 
	$cc=mysqli_connect("localhost","root","hhhh","liuyan"); 
	$sql="insert into message (name,content,time) values ('$u','$c','$t')";
	$r=mysqli_query($cc,$sql); 
	if($r){  
	echo "<script type='text/javascript'>alert('留言成功！');location.href='indexq.php';</script>";
	}else{

	echo "<script type='text/javascript'>alert('留言失败');history.back();</script>"; 
	}
	mysqli_close($cc);
	} 
}
?>
	