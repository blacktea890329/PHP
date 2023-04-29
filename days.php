<html>
	<?php
		$days=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
		$Days=array("星期一","星期二","星期三","星期四","星期五","星期六","星期日");
		for($i=0;$i<count($days);$i++)
		{
			echo"$Days[$i] => $days[$i]<br>";
		}
	?>
	<table border="2">
		<tr>
			<td>名字</td>
			<td>分數</td>
		</tr>
	<?php
		$score=array("Rachel"=>"56","Monica"=>"63","Phoebe"=>"72","Joey"=>"47","Chandler"=>"83","Ross"=>"91");
		foreach($score as $key=>$value)
		{
			echo"<tr><td>$key</td><td>$value</td></tr>";
			$$key=$value;//把key值設成變數並且指定value給key所設成的變數
		}
		echo"Rachel=>$Rachel";
	?>
	</table>
</html>