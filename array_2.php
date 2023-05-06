<html>
	<?php
		$Rachel=array(66,73,56);
		$Monica=array(72,63,63);
		$Phoebe=array(60,88,72);
		$score=array("Rachel"=>$Rachel,"Monica"=>$Monica,"Phoebe"=>$Phoebe);
		print_r($score);
	?>

	<table border="1" style="border:blue solid;">
		<tr>
			<th>名字</th>
			<th>國文</th>
			<th>英文</th>
			<th>數學</th>
		</tr>
	<?php
	foreach($score as $key=>$value)
		{
			echo"<tr><td>$key</td>";
			for($i=0;$i<count($value);$i++)
				echo"<td>$value[$i]</td>";
			echo"</tr>";
		}
	?>		
	<!--用foreach寫-->
	<?php
	foreach($score as $key=>$value)
		{
			echo"<tr><td>$key</td>";
			foreach($value as $key=>$value)
				echo"<td>$value</td>";
			echo"</tr>";
		}
	?>		
</html>