<?php
	$string="Taiwan GO, Awesome!";
	$cutchar = explode(" ",$string);
	$addchar = implode(" ",$cutchar);
	$char = explode(",",$string);
	echo"本文:".$string;
	echo"<br/><br/>";
	echo"exploed後:<br/>";
	
	$nums=count($cutchar);
	for($x=0;$x<$nums;$x++)
	{
		echo "\$cutchar[".$x."]:".$cutchar[$x]."<br/>";
	}
	echo"<br/>";
	echo"implode後:".$addchar;
	echo"<br/>";
	echo"<br/>";
	
	$nums=count($char);
	for($w=0; $w<$nums;$w++)
	{
		echo"\$char[".$w."]:".$char[$w]."<br/>";
	}
?>