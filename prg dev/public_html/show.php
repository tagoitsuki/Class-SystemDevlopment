<?PHP
session_start();
//ログイン状態のチェック
if(!isset($_SESSION["USERID"])){
	header("Location: Destory.php");
	exit;
}
?>
<?PHP
	include 'kadaijyoudai.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title>システム利用者情報表示</title>
</head>
<body>
<?PHP
	echo '<h2>システム利用者情報表示</h2><p>';
	
	$mysqli = new mysqli("localhost", "tto", "nitkambayashi", "prog");
	if($mysqli->connect_error){
		//CONNECT FAILURE
		echo "<p>CONNECT FAILURE</p>";
	}
	else{
		$mysqli->set_charset("utf8");
	}
	$sql = "SELECT * FROM user WHERE id_user ='".$_SESSION['USERID'] . "'";
	$result = $mysqli->query($sql);
	if(!$result){
		echo '<p>Query is FAILURED.</p>'. $mysqli_error;
		exit();
	}
	if($_SESSION['POWER']=="1"){
		$call = "教員";
	}
	else if($_SESSION['POWER']=="2"){
		$call = "Student Assistant";
	}
	else{
		$call = "学生";
	}
	while ($row = $result->fetch_assoc()){
		$classN = $row["fk_class"];
	}
	$sql2 = "SELECT * FROM class WHERE id_class ='".$classN."'";
	$result2 = $mysqli->query($sql2);
	if(!$result){
		echo '<p>Query2 is FAILURED.</p>'. $mysqli_error;
		exit();
	}
	while ($row = $result2->fetch_assoc()){
		$classname = $row["class_name"];
	}
	
	echo '<table border="1"><tr><th>ユーザーID</th><td>'.$_SESSION['USERID'].'</td></tr>';
	echo '<tr><th>ユーザー名</th><td>'.$_SESSION['USERName'].'</td></tr>';
	echo '<tr><th>区分</th><td>'.$call.'</td></tr>';
	echo '<tr/><th>所属教室名</th><td>'.$classname.'</td>';
	
	$sql3 = "SELECT * FROM user WHERE power = '3' AND fk_class ='".$classN."'";
	$sql4 = "SELECT * FROM user WHERE power = '1' AND fk_class ='".$classN."'";
	$sql5 = "SELECT * FROM user WHERE power = '2' AND fk_class ='".$classN."'";
	
	if($_SESSION['POWER']=="1"||$_SESSION['POWER']=="2"){
		$result3 = $mysqli->query($sql3);
		echo '<tr><th>所属学生人数</th><td>';
		$plus = 0;
		while($row = $result3->fetch_assoc()){
			$plus += 1;
		}
		echo $plus.'</td></tr>';
	}
	if($_SESSION['POWER']=="1"){
		$result5 = $mysqli->query($sql5);
		echo '<tr><th>担当SA名</th><td>';
		while($row = $result5->fetch_assoc()){
			echo $row['user_name'].'<br/>';
		}
		echo '</td></tr>';
	}
	if($_SESSION['POWER']=="2"||$_SESSION['POWER']=="3"){
		$result4 = $mysqli->query($sql4);
		echo '<tr><th>担当教員名</th><td>';
		while($row = $result4->fetch_assoc()){
			echo $row['user_name'].'<br/>';
		}
		echo '</td></tr>';
	}
	
	echo '</table></p>';
	if($_SESSION['POWER']=="3"){
		echo '<h3>質問・詳細リスト</h3><table border="1"><th>No.</th><th>課題ID番号</th><th>状況</th><th>送信内容</th><th>返答内容</th></tr>';
		$sql6 = "SELECT * FROM teisyutsu WHERE fk_id_user='".$_SESSION['USERID']."'";
		$no = 1;
		$result6 = $mysqli->query($sql6);
		while($row = $result6->fetch_assoc()){
			
			echo '<tr><th>'.$no.'</th><td>'.$row['fk_id_kadai'].'</td><td>';
			kadaijyoudai($row['fk_id_kadai']);
			echo ' <td>'.$row['cmnt_user'].'</td><td>'.$row['cmnt_sitn'].'</td>';
			$no += 1;
		}
	}
	$mysqli->close();
?>
</body>
</html>