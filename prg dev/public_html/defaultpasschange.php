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
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title>初期パスワードの変更</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
	background-color: #FFFF00;
}
</style>
</head>

<body>

<div class="auto-style1"><em><strong>初期パスワードの変更</strong></em></div>
<p>※このシステムを初めて利用するには、初期パスワードの変更が必要です！必ず変更してください！</p>

<form action="defaultpasschange.php" method="post">
	User ID:&emsp;<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?><br/>
	パスワード<input name="Password1" id="Password1" type="password"><br/>
	パスワード<input name="Password2" id="Password2" type="password">(確認用）<br/>
	※パスワードは6文字以上16文字以下にしてください！<br/>
	<input name="EXC" id="EXC" type="submit" value="初期パスワード変更">
</form>
</body>
</html>
<?PHP
	if(isset($_POST['EXC'])){
		$strlength = strlen($_POST['Password1']);
		if($strlength<6||16<$strlength){
			echo '<strong>▼Notice</strong><br/>パスワードは6文字以上16文字以下にしてください<br/><br/>大事なことなので、もう一度。<br/>パスワードは6文字以上16文字以下にしてください';
		}
		if($_POST['Password1']!=$_POST['Password2']){
			echo '<strong>▼Notice</strong><br/>パスワードが間違っています';
			exit;
		}
		else if($_POST['Password1']==$_SESSION['USERID']){
			echo '<strong>▼Notice</strong><br/>初期パスワードと同じにすることができません。';
			exit;
		}
		else if(empty($_POST['Password1'])){
			echo '<strong>▼Notice</strong><br/>空白文字は許可されません。';
		}
		else if(empty($_POST['Password2'])){
			echo '<strong>▼Notice</strong><br/>確認用パスワードが入力されていません。';
		}
		else{
			$NewPass = $_POST['Password1'];
			$mysqli = new mysqli("localhost", "tto", "nitkambayashi", "prog");
			if($mysqli->connect_error){
				//CONNECT FAILURE
				echo '<strong>▼Notice</strong><br/>CONNECT FAILURED';
			}
			else{
				$mysqli->set_charset("utf8");
			}
 
			$sql = "UPDATE user SET psw ='".$NewPass."' WHERE id_user ='".$_SESSION['USERID']."'";
			$result = $mysqli->query($sql);
			if(!$result){
				echo '<strong>▼Notice</strong><br/>Query is FAILURED'. $mysqli_error;
				exit();
			}
			$mysqli->close();
			header("Location: Destory.php");
			exit;
		}
	}
	else
	{
		//基本的にこの部分は記述しない。
	}
?>