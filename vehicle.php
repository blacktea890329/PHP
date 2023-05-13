<html>
<head>
	<?php
	//父類別的vehicle類別
	class Vehicle{
		var $no; //車號
		var $owner; //擁有人
		function setNumber($on){$this->on=$on;}
		function setOwner($owner){$this->owner=$owner;}
		function printVehicle(){
			//顯示車輛資料
			echo "擁有人:".$this->owner."<br>";
			echo "車號:".$this->on."<br>";
		}
	}
	//Car類別宣告,繼承自Vehicle類別
	class Car extends Vehicle{
		var $doors;//幾門
		//建構子
		function Car($owner,$on,$doors=4){
			parent::setNumber($on);
			parent::setOwner($owner);
			$this->doors=$doors;
		}
		/* function printCar(){
			//顯示轎車資料
			echo"====轎車資料====<br>";
			parent::printVehicle();
			echo "幾門".$this->doors."<br>";
		} */
		function printVehicle(){
			//顯示轎車資料
			parent::printVehicle();
			echo "幾門".$this->doors."<br>";
		}
	}
	?>
</head>
<body>
	<?php
	//建立物件
	$sentar = new Car("陳曉明",1234567);
	$bmw = new Car("王大明",1222121,2);
	//更改擁有人
	$bmw->setOwner=("古龍");
	//呼叫物件的成員函數
	/* $sentar->printCar();
	$bmw->printCar(); */
	$sentar->printVehicle();
	$bmw->printVehicle();
	?>
</body>
</html>