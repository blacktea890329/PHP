<html>
	<?php
		$link=mysqli_connect("127.0.0.1","root","","test") or die("無法連接資料庫:".mysqli_error());
		$query = "SELECT*FROM data";
		$result=mysqli_query($link,$query) or die("無法送出".mysqli_error());
	?>
	<meta charset="utf-8">
	<body>
		<a href="add.php">新增</a>
		<table border="1" style="border:1px blue solid;font-size:20px" >
		<thead>
			<tr>
				<th>ID</th>
				<th>名字</th>
				<th>性別</th>
				<th>創建日期</th>
				<th>功能</th>
			</tr>
		</thead>
			<?php
				while($row = mysqli_fetch_array($result))
				{
			?>
			<tr>
				<td><?=$row['id']?></td>
				<td><?=$row['user_name']?></td>
				<td><?=$row['sex']==1?"男":"女"?></td>
				<td><?=$row['cratetime']?></td>
				<td>
					<a href="edit.php?id=<?=$row['id']?>">修改</a> &nbsp;&nbsp;
					<a href="delet.php?id=<?=$row['id']?>">刪除</a> <!--?id=<?//=$row['id']?> 把參數id帶走-->
				</td>
			</tr>
			<?php	
			}
			?>
</html>