<?php
	$link=mysqli_connect("127.0.0.1","root","","test") or die("無法連接資料庫:".mysqli_error());
	$query="INSERT INTO `data` (`id`, `user_name`, `sex`, `cratetime`) VALUES (NULL, '".$_POST["user_name"]."', '".$_POST["sex"]."', current_timestamp())";
	$result=mysqli_query($link,$query) or die("無法送出".mysqli_error());
	echo"<script>alert('新增成功');</script>";
	echo"<script>location.href='phplinksql.php'</script>";
?>