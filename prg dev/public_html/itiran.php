<?PHP
session_start();
//ログイン状態のチェック
if(!isset($_SESSION["USERID"])){
	header("Location: Destory.php");
	exit;
}
?>
<?php
	#$menu_number = new menu_tr();
	#$kazu = $menu_number->return_number();
	#$nkde = $global_num;
	$id = $_GET['id'];
	function isLineKadai($number,$id){
	$no = 1;
		for($j = 0; $j < count($number); $j++){
			$gakuseki = substr($number[$j],0,7);
			$date = substr($number[$j],8);
			echo "<tr><th>".$no."</th><td><a href=kadai.php?kadai_id=$id&gakuseki=$gakuseki&date=$date>$number[$j]</a></td></tr>";#$html[$j]
			$no += 1;
		}
	}
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
$func = "SELECT fk_id_user,date FROM teisyutsu where fk_id_kadai='".$id."'";

$result = mysqli_query($link,$func);
#mysqli_commit();
#echo $result;
#echo $result;
#echo mysqli_fetch_row($result)[0];
$arrayobj0 = new ArrayObject(array());
$arrayobj1 = new ArrayObject(array());
while ($row = mysqli_fetch_array($result)) {
	$arrayobj0->append($row[0]);
	$arrayobj1->append($row[1]);
	var_dump($arrayobj0);
	var_dump($arrayobj1);
	#echo $row[1] . "\n";
	#echo $row[2] . "\n";
}
?>
<!DOCTYPE html>
<html>

<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=10">
<meta http-equiv="x-ua-compatible" content="IE=Emulate10">
<title>課題<?PHP echo $_GET['kname'];?>の一覧</title>
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
<div class="auto-style2" style="width:100%">課題番号　<?PHP echo $_GET['kname']; ?>　の提出課題一覧</div>
<table border=1>
<tr><th>No.</th><th>ID_提出日</th></tr>
 <?php
 #isLineKadai("kadai.html",3);
 #select count(*) from table;
 $s1 = new ArrayObject(array());
 $i = 0;
 for (;$i<count($arrayobj0);$i++){
	 $s1->append($arrayobj0[$i].'_'.$arrayobj1[$i]);
 }
 isLineKadai($s1,$id);
 #echo $result;
 mysqli_close($link);
 ?>
</table>
<?PHP
 echo 'この課題'.$_GET['kname'].'は'.$i.'件の提出がありました。';
?>
</body>
</html>
