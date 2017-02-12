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
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title><?PHP if($_SESSION['POWER']=='1') echo '教員'; else echo 'SA';?></title>
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
<div class="auto-style1">
	区分：<?PHP if($_SESSION['POWER']=='1') echo '教員'; else echo 'SA';?>
	　/No.<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>
	　/ようこそ、<?=htmlspecialchars($_SESSION["USERName"], ENT_QUOTES); ?>さん！
</div>
<div class="auto-style2" style="width:100%">教 員 ・　S　A　専 用 サ イ ト </div>
<center>
<div class="auto-style3" style="width: 100%">
日本工業大学情報工学科　プログラミング技術演習　教員・SA専用サイト。
</div>
</center>
<br />
<table border="1" style="width: 100%" class="auto-style4">
	<tr>
		<th style="width: 6%">課題No.</th>
		<th style="width: 6%">1</th>
		<th style="width: 6%">2</th>
		<th style="width: 6%">3</th>
		<th style="width: 6%">4</th>
		<th style="width: 6%">5</th>
		<th style="width: 6%">6</th>
		<th style="width: 6%">7</th>
		<th style="width: 6%">8</th>
		<th style="width: 6%">9</th>
		<th style="width: 6%">10</th>
		<th style="width: 6%">11</th>
		<th style="width: 6%">12</th>
		<th style="width: 6%">13</th>
		<th style="width: 6%">14</th>
		<th style="width: 6%">15</th>
	</tr>
	<tr>
		<th style="width: 6%">提出状況</th>
		<td style="width: 6%"><a href="itiran.php?id=1&kname=1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=2&kname=2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=3&kname=3">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=4&kname=4">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=5&kname=5">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=6&kname=6">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=7&kname=7">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=8&kname=8">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=9&kname=9">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=10&kname=10">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=11&kname=11">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=12&kname=12">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=13&kname=13">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=14&kname=14">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=15&kname=15">見る</a></td>
	</tr>
	<tr>
		<th style="width: 6%">課題No.</th>
		<th style="width: 6%">16</th>
		<th style="width: 6%">17</th>
		<th style="width: 6%">18</th>
		<th style="width: 6%">19</th>
		<th style="width: 6%">20</th>
		<th style="width: 6%">21</th>
		<th style="width: 6%">22</th>
		<th style="width: 6%">23</th>
		<th style="width: 6%">24</th>
		<th style="width: 6%">25</th>
		<th style="width: 6%">26</th>
		<th style="width: 6%">27</th>
		<th style="width: 6%">A1-1</th>
		<th style="width: 6%">A2-1</th>
		<th style="width: 6%">A3-1</th>
	</tr>
	<tr>
		<th style="width: 6%">提出状況</th>
		<td style="width: 6%"><a href="itiran.php?id=16&kname=16">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=17&kname=17">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=18&kname=18">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=19&kname=19">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=20&kname=20">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=21&kname=21">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=22&kname=22">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=23&kname=23">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=24&kname=24">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=25&kname=25">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=26&kname=26">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=27&kname=27">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=28&kname=A1-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=29&kname=A2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=30&kname=A3-1">見る</a></td>
	</tr>
	<tr>
		<th style="width: 6%">課題No.</th>
		<th style="width: 6%">A3-2</th>
		<th style="width: 6%">A4-1</th>
		<th style="width: 6%">B1-1</th>
		<th style="width: 6%">B1-2</th>
		<th style="width: 6%">B2-1</th>
		<th style="width: 6%">B3-1</th>
		<th style="width: 6%">B4-1</th>
		<th style="width: 6%">B5-1</th>
		<th style="width: 6%">B5-2</th>
		<th style="width: 6%">C1-1</th>
		<th style="width: 6%">C2-1</th>
		<th style="width: 6%">C2-2</th>
		<th style="width: 6%">C2-3</th>
		<th style="width: 6%">C2-4</th>
		<th style="width: 6%">D1-1</th>
	</tr>
	<tr>
		<th style="width: 6%">提出状況</th>
		<td style="width: 6%"><a href="itiran.php?id=31&kname=A3-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=32&kname=A4-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=33&kname=B1-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=34&kname=B1-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=35&kname=B2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=36&kname=B3-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=37&kname=B4-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=38&kname=B5-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=39&kname=B5-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=40&kname=C1-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=41&kname=C2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=42&kname=C2-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=43&kname=C2-3">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=44&kname=C2-4">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=45&kname=D1-1">見る</a></td>
	</tr>
	<tr>
		<th style="width: 6%">課題No.</th>
		<th style="width: 6%">D2-1</th>
		<th style="width: 6%">D3-1</th>
		<th style="width: 6%">D4-1</th>
		<th style="width: 6%">D5-1</th>
		<th style="width: 6%">E1-1</th>
		<th style="width: 6%">E1-2</th>
		<th style="width: 6%">E1-3</th>
		<th style="width: 6%">E1-4</th>
		<th style="width: 6%">E1-5</th>
		<th style="width: 6%">E2-1</th>
		<th style="width: 6%">E2-2</th>
		<th style="width: 6%">E2-3</th>
		<th style="width: 6%">E2-4</th>
		<th style="width: 6%">E2-5</th>
		<th style="width: 6%">F1-1</th>
	</tr>
	<tr>
		<th style="width: 6%">提出状況</th>
		<td style="width: 6%"><a href="itiran.php?id=46&kname=D2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=47&kname=D3-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=48&kname=D4-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=49&kname=D5-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=50&kname=E1-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=51&kname=E1-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=52&kname=E1-3">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=53&kname=E1-4">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=54&kname=E1-5">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=55&kname=E2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=56&kname=E2-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=57&kname=E2-3">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=58&kname=E2-4">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=59&kname=E2-5">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=60&kname=F1-1">見る</a></td>
	</tr>
	<tr>
		<th style="width: 6%">課題No.</th>
		<th style="width: 6%">F2-1</th>
		<th style="width: 6%">G1-1</th>
		<th style="width: 6%">G2-1</th>
		<th style="width: 6%">H-1</th>
		<th style="width: 6%">H-2</th>
		<th style="width: 6%">H-3</th>
		<th style="width: 6%">H-4</th>
		<th style="width: 6%">H-5</th>
		<th style="width: 6%">H-6</th>
		<th style="width: 6%">練習1</th>
	</tr>
	<tr>
		<th style="width: 6%">提出状況</th>
		<td style="width: 6%"><a href="itiran.php?id=61&kname=F2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=62&kname=G1-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=63&kname=G2-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=64&kname=H-1">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=65&kname=H-2">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=66&kname=H-3">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=67&kname=H-4">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=68&kname=H-5">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=69&kname=H-6">見る</a></td>
		<td style="width: 6%"><a href="itiran.php?id=70&kname=練習1">見る</a></td>
	</tr>
</table>
<center>
<hr/><div><a href="FAQ_itiran.php">質問リスト</a>
&emsp;<a href="Destory.php">ログアウト</a>
&emsp;<a href="pass_change.php">パスワード変更</a>
&emsp;<a href="show.php" target="_blank">システム利用者情報表示</a>
<?PHP
	if($_SESSION['POWER']=='1'){
		echo '<hr/><a href="classinsert.php">クラスの追加</a>&emsp;<a href="userinsert.php">ユーザーの追加</a>&emsp;<a href="kirikae.php">課題表示設定</a>';
	}
?>
</div>
</center>
</body>
</html>
