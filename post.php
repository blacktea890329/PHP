<?php
	echo $_GET['action'];
	echo $_POST['user_name'];
?>
<html>
	<form name="aaaa" action="?action=show_" method="post">
		<input type="text" name="user_name"/>
		<input type="submit" value="send"/>
	</form>
</html>