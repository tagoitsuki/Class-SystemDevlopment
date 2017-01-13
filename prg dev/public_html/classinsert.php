<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">

<html>
<head>
<style type="text/css">
#regi{float: left;}
#show{float: right; text-align: left;}
</style>
</head>
<body>
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<div id="regi">
<form method="post" action="classinsert.php">
<table><tr><td>教室ID</td><td><input type="text" name="num"></td></tr>
<tr><td>教室名</td><td><input type="text" name="class"></td></tr></table>
<input type=submit value=登録>
</form>
</div>
<?php // -*- coding: utf-8 -*-
//header("Content-type: text/html; charset=UTF-8");
$server = "localhost"; //ホスト名。ポート番号指定の時は、"10.2.3.4:8809" のように指定する
$user   = "tto";    //ユーザー名
$passwd = "nitkambayashi";   //パスワード
$dbname = "prog";    //データベース名

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
if((count($_POST) > 0)&&($_POST['num']!=NULL)&&($_POST['class']!=NULL)){
	$num = $_POST['num'];
	$name =$_POST['class'];
	$insert = "INSERT INTO class VALUES('$num','$name'); ";
	mysqli_query($link , $insert);
}
$result = mysqli_query($link, "SELECT * FROM class");// 	クエリ―設定
if (!$result)
{
  	echo "クエリー失敗\n" . mysqli_error() . "\n終了\n";
  	mysqli_close($link);
  	exit(1);
}
echo "<div id=\"show\">";
while ($row = mysqli_fetch_object($result))
{
	$i_c    = htmlspecialchars($row->id_class);
	$n_c    = htmlspecialchars($row->class_name);
	print nl2br("ID:" . $i_c . "\tClassName:" .$n_c ."\n") ;
}
mysqli_free_result($result);// メモリ解放
mysqli_close($link);
echo "</div></body></html>";
?>
