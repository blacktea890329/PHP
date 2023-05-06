<html>
	<?php
		$Rachel=array(66,73,56);
		$Monica=array(72,63,63);
		$Phoebe=array(60,88,72);
		$Joey=array(58,77,47);
		$Chandler=array(67,85,83);
		$Ross=array(73,81,91);
		$score=array("Rachel"=>$Rachel,"Monica"=>$Monica,"Phoebe"=>$Phoebe,"Joey"=>$Joey,"Chandler"=>$Chandler,"Ross"=>$Ross);
		foreach($score as $key=>$value)
			{
				$s=0;
				for($i=0;$i<count($value);$i++)
				{
					$s+=$value[$i];
				}
				$sum[$key]="$s";
			}
		array_multisort($sum,SORT_DESC,$score); //SORT_DESC讓array_multisort可以從大到小排序
		echo"<br/>";
		print_r($score);
	?>

	<table border="1" style="border:blue solid;">
		<tr>
			<th>名字</th>
			<th>國文</th>
			<th>英文</th>
			<th>數學</th>
			<th>總分</th>
		</tr>
	<?php
	foreach($score as $key=>$value)
		{
			echo"<tr><td>$key</td>";
			for($i=0;$i<count($value);$i++)
			{
				echo"<td>$value[$i]</td>";
			}
			echo"<td>$sum[$key]</td>";
			echo"</tr>";
		}
	?>		
	<!--
	<?php
	//用foreach寫
	foreach($score as $key=>$value)
		{
			echo"<tr><td>$key</td>";
			foreach($value as $key=>$value)
			echo"<td>$value</td>";
			echo"</tr>";
		}
	?>
	-->
</html>