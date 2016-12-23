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
<title>パスワード変更届</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
	background-color: #00FF00;
}
</style>
<script type="text/javascript">
<--
function passc(){
	var pass1 = window.document.post1.Password1.value;
	var pass2 = window.document.post1.Password2.value;
	if(pass1===pass2){
		//変更届の受理
		href = "http://10.8.68.230/~tto/main.php";
	}	
	else{
		//変更届の不受理
		href = "http://10.8.68.230/~tto/pass_change.php";
	}
}
-->
</script>
</head>

<body>

<div class="auto-style1">
	<em><strong>パスワード変更届</strong></em></div>

<div>
	<p>現在ログインしているUserID:&emsp;<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?></p>
</div>
<div>
	<form method="post" name="post1">
		新しいパスワード：<input name="Password1" type="password"><br>
		新しいパスワード：<input name="Password2" type="password">（確認用）</form>
</div>
<form method="post">
	<button name="Abutton1" onclick="passc">パスワードを変更します。</button>&emsp;&emsp;
	<button name="Abutton2" formaction="http://10.8.68.230/~tto/menu.php">パスワードを変更しない。</button>
</form>

</body>

</html>
