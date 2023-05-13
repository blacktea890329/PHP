<html>
	<meta charset="utf-8">
	<?php
		$link=mysqli_connect("127.0.0.1","root","","test") or die("無法連接資料庫:".mysqli_error());
		$query = "SELECT * FROM `data`where id =".$_GET['id'];
		$result=mysqli_query($link,$query) or die("無法送出".mysqli_error());
		while($row = mysqli_fetch_array($result))
		{
			print_r($row);
	?>
	<h1>新增使用者</h1>
	<form action="update.php" method="post">
		姓名:<input type="text" name="user_name" value="<?=$row['user_name']?>" /><br/>
		性別:
		<input type="radio" name="sex" value="1" <?=($row['sex']==1)?"checked":"";?>/>男性
		<input type="radio" name="sex" value="0" <?=($row['sex']!=1)?"checked":"";?>/>女性
		<input type="hidden" name="id" value=<?=$_GET['id']; ?> />
		<input type="submit" value="send">
	</form>
	<?php
		}
	?>
</html>