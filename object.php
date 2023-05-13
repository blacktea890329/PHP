<html>
<head>
	<?php
	//宣告類別
	class Time{
		//成員變數
		var $seconds;
		var $minutes;
		var $hours;
		//建構子
		function Time($h=12,$m=0,$s=0){
			//檢查時間是否符合格式
			if($this->validTime($h,$m,$s)){
				$this->seconds=$s;
				$this->minutes=$m;
				$this->hours=$h;
			}
			else{
				$this->seconds=0;
				$this->minutes=0;
				$this->hours=12;
			}
		}
		//成員函數
		function getSeconds(){return $this->seconds;}
		function getMinutes(){return $this->minutes;}
		function getHours(){return $this->hours;}
		function printTime(){
			echo $this->hours.":".$this->minutes.":".$this->seconds."<br>";
		}
		function validTime($h,$m,$s){
			//檢查時間是否符合格式
			if($s<0||$s>60)return false;
			if($m<0||$m>60)return false;
			if($h<0||$h>24)return false;//不再範圍內
			return True;//正確的時間資料
		}
		/* function setTime($h,$m,$s){
			//檢查時間是否符合格式
			if($this->validTime($h,$m,$s)){
				$this->seconds=$s;
				$this->minutes=$m;
				$this->hours=$h;
				return True;
			}
			else{
				return False;
			}
		} */
	}
	?>
</head>
<body>
	<?php
	//建立物件
	$now= new Time(9,45,20);
	$lasttime = new Time(3,36,16);
/* 	$now->hours =9;
	$now->minutes = 36;
	$now->seconds = 20;
	$lasttime->hours = 16;
	$lasttime->minutes = 20;
	$lasttime->seconds = 02;
	$now->setTime(8,5,20);
	$lasttime->setTime(16,20,2); */
	//呼叫函數
	echo"現在時間:";
	$now->printTime();
	echo"上次時間:";
	$lasttime->printTime();
	//取得時間資料
	$seconds=$lasttime->getSeconds();
	$minutes=$lasttime->getMinutes();
	$hours=$lasttime->getHours();
	//顯示 時、分、秒
	echo "上次時間";
	echo $hours."-".$minutes."-" .$seconds. "<br>";
	?>
</body>
</html>