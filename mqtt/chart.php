<?php
		$link = mysqli_connect("127.0.0.1","root","","mqtt") or die("無法連接資料庫:".mysqli_error( ));
		$query= "select * from mqtt where name='".$_GET['name']."'";
		$result = mysqli_query($link,$query) or die("無法送出".mysqli_error( ));
		
		$sensor = ["sensorA"=>"溫度計","sensorB"=>"溼度計","sensorC"=>"氣壓計"];
		$unit = ["sensorA"=>"°C","sensorB"=>"%","sensorC"=>"hPa"];
		
		while( $row = mysqli_fetch_array($result)){
			$sensor_name = $sensor[$row['name']];
			$u = $unit[$row['name']];
			$xData[] = "'".$row['datetime']."'";
			$yData[] = $row['value'];
			
		}
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
	<div id="chartContainer" style="width: 500px; height: 300px;"></div>
	
	<script>
	Highcharts.chart('chartContainer',{
		title: {
			text:'<?=$sensor_name?>'
		},
		xAxis: {
			categories:[<?=implode(",",$xData);?>]
		},
		yAxis: {
			title:{
				text:'<?=$u;?>'
			}
		},
		series:[{
			name:'<?=$sensor_name;?>',
			data:[<?=implode(",",$yData);?>]
		}]
	});
	</script>
</body>
</html>