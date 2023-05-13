<?php
	print_r($_POST);
	$link=mysqli_connect("127.0.0.1","root","","test") or die("無法連接資料庫:".mysqli_error());
	$query="UPDATE `data` SET `user_name` = '".$_POST["user_name"]."', `sex` = '".$_POST["sex"]."' WHERE `data`.`id` = ".$_POST["id"];
	$result=mysqli_query($link,$query) or die("無法送出".mysqli_error());
	echo"<script>alert('新增成功');</script>";
	echo"<script>location.href='phplinksql.php'</script>";
?>