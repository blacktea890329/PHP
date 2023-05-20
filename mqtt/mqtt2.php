<?php
	//引入MQTT客戶端庫
	require("phpMQTT.php");
	
	// MQTT設置
	$server = 'mqttgo.io';
	$port = 1883;
	$username = '';
	$password = '';
	$clinet_id = 'phpMQTT-subscriber';
	$mqtt = new Bluerhinos\phpMQTT($server, $port, $clinet_id);
	
	// 連接到MQTT
	if ($mqtt->connect()){
		
		//訂閱主題
		$topics['iot/device'] = array("qos"=> 0, "function" => "processMessage");
		$mqtt->subscribe($topics, 0);
		
		//持續監聽MQTT訊息
		while ($mqtt->proc()){
			
			
		}
		
		//斷開MQTT連接
		$mqtt->close();
	
	} else {
		
		echo "Failed to connect to MQTT broker";
		
	}
	
		//處理接收到的訊息
		function processMessage($topic, $message) {
			
			// 解析收到的訊息
			$data = json_decode($message, true);
			
			// 提取需要的數據
			$sensor = $data['sensorname'];
			$senorValue = $data['sensorValue'];
			// 將數據寫入資料庫
			$conn = new mysqli("localhost","root","","mqtt");
			
			if ($conn->connect_error) {
				die("資料庫連接失敗:".$conn->connect_error);
			}
			
			$sql = "INSERT INTO mqtt (name,value) VALUES ('$sensor','$senorValue')";
			
			if ($conn->query($sql) === TRUE){
				echo "訊息已成功寫入資料庫";
			}
			else{
					echo "寫入資料庫時發生錯誤:" . $conn->error;
			}
			$conn->close();
		}
?>