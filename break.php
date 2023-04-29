<html>
<title>break and continue</title>
<body>
	<?php
		echo"======brack======<br>\n";
		for($A=1;$A<=3;$A++)
		{
			for($B=1;$B<=10;$B++)
			{
				echo"A=$A B=$B<br>\n";
				if($B==3) break;
			}
			echo"--------<br>";
		}
		echo"<p>";
		echo" ======break2======<br>\n ";
		for($A=1;$A<=3;$A++)
		{
			for($B=1;$B<=10;$B++)
			{
				echo"A=$A B=$B<br>\n";
				if($B==3)break 2;
			}
		}
	echo"<hr>";
	echo"continue<br>";
	$A=0;
	while($A<9)
	{
		$A++;
		echo" <br>$A \n ";
		if(($A%2)==0)
			continue;
		echo"<==是奇數 ";
	}

	?>
	
</body>
</html>