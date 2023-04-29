<?php
 echo"<P> PHP的版本是:".PHP_VERSION."</P><br>";
 echo"目前工作的平台作業系統是:".PHP_OS."<br>";
 define("PI","3.1415926",1); //大小寫沒有差別 定義PI的值
 echo PI ."<br>";
 echo Pi ."<br>";
 echo pI ."<br>";
 echo pi ."<br>";
 $Pi_1="3.1415926"; //利用$自定義變數
 echo $Pi_1 ."<br>";
 if(defined("PI")){
	echo"PI已被設定<br>";
	}
 else{
	echo"未設定<br>";
	}
$a=8;
echo"a的三元運算子<br>";
echo ($a>6)?($a.">6<br>"):($a."<6<br>");

echo"<h3>a++</h3>";
$a=5;
echo"a=".$a."<br>";
echo"應該是5:".$a++."<br>";
echo"應該是6:".$a."<br>";
echo"<h3>++a</h3>";
$a=5;
echo"a=".$a."<br>";
echo"應該是6:".++$a."<br>\n";
echo"應該是6:".$a."<br>";
echo"<h3>a--</h3>";
$a=5;
echo"a=".$a."<br>";
echo"應該是5:".$a--."<br>\n";
echo"應該是4:".$a."<br>";
echo"<h3>--a</h3>";
$a=5;
echo"a=".$a."<br>";
echo"應該是4:".--$a."<br>\n";
echo"應該是4:".$a--."<br>";

$a="PHP程式設計";
$b=$a."基礎班";//$b="PHP程式設計"+"基礎班"
echo $b."<br>";

$c="台中市";
$c.="資訊網路中心"; //$c="台中市"+"資訊網路中心"
echo $c."<br>";
$a=10;
$b=0;
$c=@($a/$b);
echo $c."<br>";
echo "php_errormsg<br>";

$a=array("1"=>"一月","2"=>"二月");
$b=array("1"=>"星期一","2"=>"星期二","3"=>"星期三");
$c=$a+$b;
var_dump($a,$b,$c); //重複索引值的值會被蓋掉
echo"<br>";
?>