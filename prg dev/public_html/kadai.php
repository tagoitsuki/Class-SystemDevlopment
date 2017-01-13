<?php
$kadai_id = $_GET['kadai_id'];
$gakuseki  = $_GET['gakuseki'];
$date = $_GET['date'];
?>
<?php
$server = "localhost"; //ホスト名。ポート番号指定の時は、"10.2.3.4:8809" のように指定する
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

#mysqli_commit();
#echo $result;
#echo $result;

$aaaa;

#echo mysqli_fetch_row($result)[0];
while ($row = mysqli_fetch_array($result)) {
	$aaaa = $row[0];

	#echo $aaaa;
	#echo substr($aaaa,0,-3).'txt';
	#echo $row[1] . "\n";
	#echo $row[2] . "\n";
}

	$fp = fopen($aaaa, "r");
	while ($line = fgets($fp)) {
		echo "$line<br />";
	}
	fclose($fp);
	#mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title>課題</title>
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

<?php
	if (isset($_POST["sub1"])) {
		$kbn = htmlspecialchars($_POST["sub1"], ENT_QUOTES, "UTF-8");
		switch ($kbn) {
			case "○": echo "登録処理";mysqli_query($link,"update teisyutsu set joutai ='○' where fk_id_kadai=$kadai_id AND fk_id_user =$gakuseki AND date = '$date';"); break;
			case "×": echo "変更処理";mysqli_query($link,"update teisyutsu set joutai ='×' where fk_id_kadai=$kadai_id AND fk_id_user =$gakuseki AND date = '$date';"); break;
			default:  echo "エラー"; exit;
		}
	}
	mysqli_close($link);
?>
<textarea name="example" cols="50" rows="10"></textarea>
<form method="POST" action="">
<input type="submit" value="○"  name="sub1">　
<input type="submit" value="×"  name="sub1">　　
</form>
</body>
</html>
