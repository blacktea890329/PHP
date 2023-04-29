<?php
	if(empty($_GET["sex"])){
?>
	<form action=<?php echo $_SERVER["PHP_SELF"]?> method="get">
	姓名:<input type=text name=n><br>
	性別:<br>
	<input type=radio name=sex value=1>男<br>
	<input type=radio name=sex value=2>女<br>
	<input type=submit value="送出">
	<input type=reset value="重填">
	</form>
<?php
	}else{
		echo $_GET["n"];
		if($_GET["sex"]==1){
			echo"先生您好<br>";
		}
		else{
			echo"小姐您好<br>";
		}
	}
	$a="123";
	if($a<100){
		echo"A小於100<br>";
	}
	else if($a>=100 AND $a<200){
		echo"A大於100小於200<br>";
	}
	else{
		echo"A大於200<br>";
	}
	
	$a="2";
	switch($a){
		case'1':
			echo"冠軍<br>";
			break;
		case'2':
			echo"亞軍<br>";
			break;
		case'3';
			echo"季軍<br>";
			break;
	}
	echo"while迴圈<br>";
	$a=1;
	while($a<10){
		echo"$a <br>";
		$a++;
	}
	echo"DO while迴圈<br>";
	$a=1;
	do{
		$a++;
		echo"$a<br>";
	}while($a<10);
		
	echo "九九乘法表<br>";
	for($a=1;$a<10;$a++)
	{
		for($b=1;$b<10;$b++)
		{
			echo "$a x $b=".$a*$b."<br>";
		}
	}
?>