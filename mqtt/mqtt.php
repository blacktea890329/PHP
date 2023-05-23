<?php

require('phpMQTT.php');

$server = 'mqttgo.io';     // broker位置
$port = 1883;                     // broker的port
$username = '';                   // set your username
$password = '';                   // set your password
$client_id = 'phpMQTT-publisher'; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish('black', 'Hello World! at ' . date('r'), 0, false);//(topic , 要發送的訊息)
	$mqtt->close();
	echo"<script>alert('發送成功');</script>";
	echo"<script>location.href='new.php'</script>";
} else {
    echo "Time out!\n";
}