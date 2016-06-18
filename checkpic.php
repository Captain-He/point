<?php 
	if(isset($_REQUEST['authcode'])){
		session_start();
		if(strtolower($_REQUEST['authcode'])==$_SESSION['authcode']){
			echo"输入正确！";
		}else{
			echo "输入错误！";
		}
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>验证码</title>
</head>
<body>
<form method="post" action="./checkpic.php">
验证码图片：<img src="testimage.php?r=<?php echo rand();?> " width = "100px">
输入图片容：<input type="text" name="authcode" value="" />
<input type="submit" value="提交">
	
</form>
</body>
</html>