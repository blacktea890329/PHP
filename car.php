<html>
<head>
<title>PHP的類別與物件函數</title>
<?php include "class.php";?>
</head>
<body>
	<?php
	//建立物件
	if(class_exists("Vehicle")){
		$vehicle=new Vehicle();
		echo "建立\$vehicle物件<br>";
	}
	if(class_exists("Car")){
		$car=new Car("陳會安",12345678);
		echo "建立\$Car物件<br>";
	}
	//顯示物件所屬的類別
	echo "\$vehicle物件類別:".get_class($vehicle)."<br>";
	echo "\$car物件類別:".get_class($car)."<br>";
	echo "\$car物件的父類別:".get_parent_class($car)."<br>";
	//顯示成員變數
	echo "\$car物件的成員變數:<br>";
	$array=get_object_vars($car);
	while(list($prop,$val)=each($array))
		echo "$prop=$val ";
	//顯示成員函數
	echo "<br>\$car物件的成員函數:<br>";
	$array=get_class_methods(get_class($car));
	foreach($array as $method){
		echo "$method() ";
	}
	echo "<br>";
	//檢查物件方法是否存在
	if(method_exists($car,"printVehicle"))
		echo "\$car物件的printVehicle()成員函數存在<br>";
	if(is_subclass_of($car,"Vehicle"))
		echo "\$car物件是Vehicle的子類別<br>";
	?>
</body>
</html>