<?PHP
include 'password.php';
?>
<?PHP
session_start();
//ログイン状態のチェック
if(!isset($_SESSION["USERID"])){
	header("Location: Destory.php");
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
<meta content="ja" http-equiv="Content-Language">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>初期パスワードの変更</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
	background-color: #FFFF00;
}
</style>
</head>

<body>

<p class="auto-style1"><em><strong>初期パスワードの変更</strong></em></p>
<p>※このシステムを初めて利用するには、初期パスワードの変更が必要です！必ず変更してください！</p>

<form action="" method="post">
	User ID:&emsp;<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?><br/>
	パスワード<input name="Password1" id="Password1" type="password"><br/>
	パスワード<input name="Password2" id="Password2" type="password">(確認用）<br/>
	※パスワードは８文字以上１６文字以下を推奨しています。
</form>

<form method="post">
	<input name="EXC" id="EXC" type="button" value="初期パスワード変更" formaction="defaultpasschange.php">
</form>

</body>

</html>
<?PHP
	if(isset($_POST['EXC'])){
		echo '<div>0</div>';
		if($_Post['Password1']!=$_Post['Password2']){
			echo 'パスワードが間違っています';
			exit;
		}
		else if($_POST['Password1']==$_SESSION['USERID']){
			echo '初期パスワードと同じにすることができません。';
			exit;
		}
		else{
			$mysqli = new mysqli("localhost", "tto", "nitkambayashi", "prog");
			if($mysqli->connect_error){
				//CONNECT FAILURE
				echo "<p>CONNECT FAILURE</p>";
			}
			else{
				$mysqli->set_charset("utf8");
			}
			echo '<div>1</div>';
 
			$sql = "UPDATE user SET psw ='".$_POST['Password1']."' WHERE user_id ='".$_SESSION["USERID"]."'";
			$result = $mysqli->query($sql);
			echo '<div>2</div>';
			if(!$result){
				echo '<p>Query is FAILURED.</p>'. $mysqli_error;
				exit();
			}
			echo '<div>3</div>';
			$mysqli->close();
			header("Location: menu.php");
			exit;
		}
	}
	else
	{
		
	}
?>