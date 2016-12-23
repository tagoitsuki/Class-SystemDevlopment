<!DOCTYPE html>
<html><head>
<meta charset = "Shift_JIS">
<title>test</title>
</head><body>
<form action = "test.php" method = "post">
<input type = "text" name ="comment"/><br/>
<input type = "submit" value ="EXECUTE"/>
</form></body></html>
<?PHP
	require_once 'filewrite_class.php';
	if(isset($_POST["comment"])){
		$fl = new filewrite("kadai1", $_POST["comment"]);
		$fl->filewrites();
		echo "<strong>MISSION COMPLETE</strong>";
	}
	else{
		echo "<h1>MISSION FAILURED!</h1>";
	}
?>
