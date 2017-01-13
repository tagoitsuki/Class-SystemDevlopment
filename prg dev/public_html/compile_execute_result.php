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
<title>コンパイル・実行結果</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
	background-color: #C0C0C0;
	color: #0000FF;
}
.auto-style2 {
	text-align: center;
}
.auto-style3 {
	color: #FF0000;
	text-decoration: underline;
}
.auto-style4 {
	border-style: solid;
	border-width: 10px;
}
</style>
</head>

<body>

<div class="auto-style1">
	<strong><em>コンパイル・実行結果</em></strong></div>
<div class="auto-style2">
<pre class="auto-style3"><strong>《重要》コンパイル成功し、かつプログラムが正しく動作していることを確認してください。</strong></pre>
</div>
<table class="auto-style4" align="center" style="width: 75%" border="1">
<tr><th colspan="2">課題番号<?PHP echo $_GET['no']; ?>のコンパイル・実行結果</th></tr>
<tr><td>コンパイル結果</td><td>実行結果</td></tr>
<tr><td style="height: 200px">
	<?PHP
		echo shell_exec('sh dircompile.sh '. $_GET['no'].'txt '.$_SESSION['USERID'].' '.$_GET['no']);
	?>
	</td><td style="height: 200px">
	</td></tr>
</table>
</body>

</html>
