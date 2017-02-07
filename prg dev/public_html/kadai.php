<?php
$kadai_id = $_GET['kadai_id'];
$gakuseki  = $_GET['gakuseki'];
$date = $_GET['date'];
?>
<?php
$server = "10.8.68.230"; //ホスト名。ポート番号指定の時は、"10.2.3.4:8809" のように指定する
$user   = "tto";    //ユーザー名
$passwd = "nitkambayashi";   //パスワード
$dbname = "prog";    //データベース名

// 接続処理
$link = mysqli_connect($server, $user, $passwd, $dbname);
$link = new mysqli($server, $user, $passwd, $dbname,3306);
if ($link->connect_errno) {
    die("接続失敗\n");
}

if (version_compare(PHP_VERSION, '5.2.3') >= 0) {
    // PHP 5.2.3 以上で利用可能。こちらの使用を強く勧める。
    $result = mysqli_set_charset($link, "utf8");
} else {
    $result = mysqli_query($link,"SET NAMES utf8");
}
if (!$result) {
    echo "charset変更失敗\n" . mysqli_error() . "\n終了\n";
    mysqli_close($link);
    exit(1);
}
$func = "SELECT file_pass FROM teisyutsu where fk_id_kadai=$kadai_id AND fk_id_user =$gakuseki AND date = '$date';";

$result = mysqli_query($link,$func);

$code;

	while ($row = mysqli_fetch_array($result)) {
		$code = $row[0];
    }
	$fp = fopen($code, "r");
	while ($line = fgets($fp)) {
		echo "$line</br>";
	}
	fclose($fp);

  if (isset($_POST["sub1"])) {
      $kbn = htmlspecialchars($_POST["sub1"], ENT_QUOTES, "UTF-8");
      switch ($kbn) {
          case "○": echo "Update ○";mysqli_query($link,"update teisyutsu set joutai ='○' where fk_id_kadai=$kadai_id AND fk_id_user =$gakuseki AND date = '$date';"); break;
          case "×": echo "Update ×";mysqli_query($link,"update teisyutsu set joutai ='×' where fk_id_kadai=$kadai_id AND fk_id_user =$gakuseki AND date = '$date';"); break;
          default:  echo "error"; exit;
      }
  }
?>
<!DOCTYPE html>
<html>

<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=10">
<meta http-equiv="x-ua-compatible" content="IE=Emulate10">
<title>課題<?PHP echo $_GET['kadai_id'];?> -  <?PHP echo $_GET['gakuseki'];?></title>
<style type="text/css">
.auto-style1 {
	text-align: right;
}
.auto-style2 {
	text-align: center;
	background-color: #99FF99;
	font-size: x-large;
	font-family: HG丸ｺﾞｼｯｸM-PRO;
}
.auto-style3 {
	font-size: large;
}
.auto-style4 {
	text-align: center;
}
</style>
</head>

<body>


<textarea name="code" cols="100" rows="50" readonly="readonly"><?php
while ($line = fgets($fp)) {
  echo "$line</br>";
}
fclose($fp);
?></textarea>

<?php
//質問取得のSQL文に変更をお願いします。
$func = "SELECT cmnt_user FROM teisyutsu WHERE fk_id_user = '".$_SESSION['USERID']."' AND kadai = '".$_GET['kadai_id']."'";

$result = mysqli_query($link,$func);

$question;

	while ($row = mysqli_fetch_array($result)) {
		$question = $row[0];
    }
	$fp = fopen($question, "r");
?>

<form method="POST" action="">
<input type="submit" value="○"  name="sub1">　
<input type="submit" value="×"  name="sub1">　　
</form>

<div class="auto-style2" style="width:100%">質問</div>

<textarea name="faq" cols="100" rows="10" readonly="readonly"><?php
while ($line = fgets($fp)) {
  echo "$line<br />";
}
fclose($fp);
?></textarea>

<?php

mysqli_close($link);

?>
</body>
</html>
