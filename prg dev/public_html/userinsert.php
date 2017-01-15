<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">

<html>
<head>
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title>ユーザーの追加</title>
<head>
<body>
<form method="post" action="userinsert.php">
<input type="submit" name="return" value="教員用メニューに戻る"/>
<table><tr><td>ID</td><td><input type="text" name="num"></td></tr>
<tr><td>名前</td><td><input type="text" name="name"></td></tr>
<tr><td>passward</td><td><input type="text" name="pass" value="pro"></td></tr>
<tr><td>権限</td><td><select name="power">
<option value="1">先生
<option value="2">SA
<option value="3">学生
</select></td></tr>
<?php // -*- coding: utf-8 -*-
//header("Content-type: text/html; charset=UTF-8");
$server = "localhost:3306"; //ホスト名。ポート番号指定の時は、"10.2.3.4:8809" のように指定する
$user   = "root";    //ユーザー名
$passwd = "21tago82";   //パスワード
$dbname = "prg";    //データベース名

$link = new mysqli($server, $user, $passwd, $dbname);
if ($link->connect_errno)
{
    die("接続失敗\n");
}
if (version_compare(PHP_VERSION, '5.2.3') >= 0)
{
    // PHP 5.2.3 以上で利用可能。こちらの使用を強く勧める。
    $result = mysqli_set_charset($link, "utf8");
} else {
    $result = mysqli_query($link,"SET NAMES utf8");
}
if (!$result)
{
    echo "charset変更失敗\n" . mysqli_error() . "\n終了\n";
    mysqli_close($link);
    exit(1);
}
if (!mysqli_select_db($link, $dbname))// DB選択
{
    die("DB変更失敗\n" . mysqli_error() . "\n終了\n");
    mysqli_close($link);
    exit(1);
}
echo "<tr><td>教室</td><td><select name=\"class\">";
$clas = mysqli_query($link, "SELECT * FROM class");
if (!$clas)
{
  	echo "クエリー失敗\n" . mysqli_error() . "\n終了\n";
  	mysqli_close($link);
  	exit(1);
}
while ($row = mysqli_fetch_object($clas))
{
	$i_c    = htmlspecialchars($row->id_class);
	$n_c    = htmlspecialchars($row->class_name);
	echo"<option value=\"". $i_c ."\">".$n_c;
}
mysqli_free_result($clas);
echo "</select></td></tr></table>";
echo '<input type="submit" name="exe" value=登録>';
echo "</form>";
echo "</body>";
echo "</html>";
if(isset($_POST['exe'])){
	if((count($_POST) > 0)&&($_POST['num']!=NULL)&&($_POST['name']!=NULL)&&($_POST['pass']!=NULL)){
		$num = $_POST['num'];
		$name =$_POST['name'];
		$pas = $_POST['pass'];
		$pow = $_POST['power'];
		$cla = $_POST['class'];
		$insert = "INSERT INTO user VALUES('$num','$name','$pas','$pow','$cla'); ";
		mysqli_query($link , $insert);
	}
	$result = mysqli_query($link, "SELECT * FROM user");// 	クエリ―設定
	if (!$result)
	{
		echo "クエリー失敗\n" . mysqli_error() . "\n終了\n";
		mysqli_close($link);
		exit(1);
	}
	while ($row = mysqli_fetch_object($result))
	{
		$i_k    = htmlspecialchars($row->id_user);
		$n_k    = htmlspecialchars($row->user_name);
		print nl2br("ID:" .$i_k . "\tName:" .$n_k ."\n") ;
	}
	mysqli_free_result($result);// メモリ解放
	mysqli_close($link);
}
else if(isset($_POST['return'])){
	header("Location: menu_tr.php");
	exit;
}
?>
