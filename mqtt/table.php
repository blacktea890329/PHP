<?php
		$link = mysqli_connect("127.0.0.1","root","","mqtt") or die("無法連接資料庫:".mysqli_error( ));
		$query= "select * from( select *,ROW_NUMBER() over (PARTITION by name order by datetime desc)sn from mqtt) R where R.sn = 1";
		$result = mysqli_query($link,$query) or die("無法送出".mysqli_error( ));
		$sensor = ["sensorA"=>"溫度計","sensorB"=>"溼度計","sensorC"=>"氣壓計"];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 
</head>
<body>
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>感測器</th>
				<th>更新時間</th>
				<th>資料</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php
			while( $row = mysqli_fetch_array($result)){
		?>
			<tr>
				<td><?=$sensor[$row['name']];?></td>
				<td><?=$row['value'];?></td>
				<td><?=$row['datetime']?></td>
				<td><a target="_blank" href="chart.php?name=<?=$row['name'];?>">折線圖</a></td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>
	<script>
	$(document).ready(function() {
    	$('#example').DataTable({
			"columnDefs":[
			{"className": "dt-center","targets":"_all"}
		]
		});
	} );
	</script>
</body>
</html>