<?php
$mkdir_file_dir = mkdir('./img/'.$_POST['title'],0777); 
//mkdir（路径，0777指最大访问权）
/*文件被上传结束后，默认地被存储在了临时目录中，
这时您必须将它从临时目录中删除或移动到其它地方，
如果没有，则会被删除。也就是不管是否上传成功，
脚本执行完后临时目录里的文件肯定会被删除。
所以在删除之前要用PHP的 copy() 函数将它复制到其它位置，
此时，才算完成了上传文件过程。 */
$tmp_file_name = $_FILES['file']['tmp_name']; 
$file_name = $_FILES['file']['name'];
$file_dir = './img/'.$_POST['title'].'/';
if(is_dir($file_dir))//判断是否为文件夹
{
move_uploaded_file($tmp_file_name,$file_dir.$file_name);
 //移动文件从a到B
$img_url = $file_dir.$file_name;
$link = mysqli_connect("localhost","root","","tu");
if (!$link) {
	# code...
	die("shibai".mysqli_connect_error());
}
$insert = "insert into tupian(title,img_url) values ('$_POST['title']','$img_url')";
$i=mysqli_query($link,$insert); 
mysqli_close($link);
if ($i) {
	echo "成功！";
}else{
	echo "失败！";
}

}
?> 