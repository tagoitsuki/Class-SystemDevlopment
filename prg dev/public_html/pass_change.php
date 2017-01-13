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
<title>パスワード変更届</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
	background-color: #00FF00;
}
</style>
</head>

<body>

<div class="auto-style1">
	<em><strong>パスワード変更届</strong></em></div>

<div>
	<p>現在ログインしているUserID:&emsp;<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?></p>
</div>
<div>
	<form method="post" name="post1">
		新しいパスワード：<input name="Password1" id="Password1" type="password"><br>
		新しいパスワード：<input name="Password2" id="Password2" type="password">（確認用）</form>
</div>
<form method="post" action="pass_change.php">
	<button name="Abutton1" id="Abutton1">パスワードを変更します。</button>&emsp;&emsp;
	<button name="Abutton2" id="Abutton2">パスワードを変更しない。</button>
</form>

</body>

</html>
<?PHP
	if(isset($_POST['Abutton1'])){
		if($_POST['Password1']!=$_POST['Password2']){
			echo '<strong>▼Notice</strong><br/>パスワードが間違っています';
			exit;
		}
		if($_POST['Password1']==$_SESSION['USERID']){
			echo '<strong>▼Notice</strong><br/>初期パスワードと同じにすることができません。';
			exit;
		}
		if(empty($_POST['Password1'])){
			echo '<strong>▼Notice</strong><br/>空白文字は許可されません。';
		}
		if(empty($_POST['Password2'])){
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
			header("Location: Destroy.php");
			exit();
		}
	}
	else if(isset($_POST['Abutton2'])){
		header("Location: menu.php");
		exit();
	}
	else
	{
		//基本的にこの部分は記述しない。
	}
?>