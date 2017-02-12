<?PHP
session_start();
//ログイン状態のチェック
if(!isset($_SESSION["USERID"])){
	header("Location: Destory.php");
	exit;
}
?>
<?PHP
	include 'kadaijyoudai.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title>menu</title>
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
	No.<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>/ようこそ、<?=htmlspecialchars($_SESSION["USERName"], ENT_QUOTES); ?>さん！
</div>
<div class="auto-style2" style="width:100%">課　題　リ　ス　ト</div>
<center>
<div class="auto-style3" style="width: 100%">
日本工業大学情報工学科　プログラミング技術演習　課題演習サイトです。<br/>
青字で書かれている課題のみ選択することができます。
</div>
</center>
<br />
<table border="1" style="width: 100%" class="auto-style4">
	<tr>
		<th style="width: 3%">課題No.</th>
		<th style="width: 3%">1</th>
		<th style="width: 3%">2</th>
		<th style="width: 3%">3</th>
		<th style="width: 3%">4</th>
		<th style="width: 3%">5</th>
		<th style="width: 3%">6</th>
		<th style="width: 3%">7</th>
		<th style="width: 3%">8</th>
		<th style="width: 3%">9</th>
		<th style="width: 3%">10</th>
		<th style="width: 3%">11</th>
		<th style="width: 3%">12</th>
		<th style="width: 3%">13</th>
		<th style="width: 3%">14</th>
		<th style="width: 3%">15</th>
		<th style="width: 3%">16</th>
		<th style="width: 3%">17</th>
		<th style="width: 3%">18</th>
	</tr>
	<tr>
		<th>状況</th>
		<td style="width: 3%" name="1"><a href="kadai/kadai1.php"><?PHP kadaijyoudai(1); ?></a></td>
		<td style="width: 3%" name="2"><a href="kadai/kadai2.php"><?PHP kadaijyoudai(2); ?></a></td>
		<td style="width: 3%" name="3"><a href="kadai/kadai3.php"><?PHP kadaijyoudai(3); ?></a></td>
		<td style="width: 3%" name="4"><a href="kadai/kadai4.php"><?PHP kadaijyoudai(4); ?></a></td>
		<td style="width: 3%" name="5"><a href="kadai/kadai5.php"><?PHP kadaijyoudai(5); ?></a></td>
		<td style="width: 3%" name="6"><a href="kadai/kadai6.php"><?PHP kadaijyoudai(6); ?></a></td>
		<td style="width: 3%" name="7"><a href="kadai/kadai7.php"><?PHP kadaijyoudai(7); ?></a></td>
		<td style="width: 3%" name="8"><a href="kadai/kadai8.php"><?PHP kadaijyoudai(8); ?></a></td>
		<td style="width: 3%" name="9"><a href="kadai/kadai9.php"><?PHP kadaijyoudai(9); ?></a></td>
		<td style="width: 3%" name="10"><a href="kadai/kadai10.php"><?PHP kadaijyoudai(10); ?></a></td>
		<td style="width: 3%" name="11"><a href="kadai/kadai11.php"><?PHP kadaijyoudai(11); ?></a></td>
		<td style="width: 3%" name="12"><a href="kadai/kadai12.php"><?PHP kadaijyoudai(12); ?></a></td>
		<td style="width: 3%" name="13"><a href="kadai/kadai13.php"><?PHP kadaijyoudai(13); ?></a></td>
		<td style="width: 3%" name="14"><a href="kadai/kadai14.php"><?PHP kadaijyoudai(14); ?></a></td>
		<td style="width: 3%" name="15"><a href="kadai/kadai15.php"><?PHP kadaijyoudai(15); ?></a></td>
		<td style="width: 3%" name="16"><a href="kadai/kadai16.php"><?PHP kadaijyoudai(16); ?></a></td>
		<td style="width: 3%" name="17"><a href="kadai/kadai17.php"><?PHP kadaijyoudai(17); ?></a></td>
		<td style="width: 3%" name="18"><a href="kadai/kadai18.php"><?PHP kadaijyoudai(18); ?></a></td>
	</tr>
	<tr>
		<th>課題No.</th>
		<th style="width: 3%">19</th>
		<th style="width: 3%">20</th>
		<th style="width: 3%">21</th>
		<th style="width: 3%">22</th>
		<th style="width: 3%">23</th>
		<th style="width: 3%">24</th>
		<th style="width: 3%">25</th>
		<th style="width: 3%">26</th>
		<th style="width: 3%">27</th>
		<th style="width: 3%">A1-1</th>
		<th style="width: 3%">A2-1</th>
		<th style="width: 3%">A3-1</th>
		<th style="width: 3%">A3-2</th>
		<th style="width: 3%">A4-1</th>
		<th style="width: 3%">B1-1</th>
		<th style="width: 3%">B1-2</th>
		<th style="width: 3%">B2-1</th>
		<th style="width: 3%">B3-1</th>
	</tr>
	<tr>
		<th>状況</th>
		<td style="width: 3%"><a href="kadai/kadai19.php"><?PHP kadaijyoudai(19); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai20.php"><?PHP kadaijyoudai(20); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai21.php"><?PHP kadaijyoudai(21); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai22.php"><?PHP kadaijyoudai(22); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai23.php"><?PHP kadaijyoudai(23); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai24.php"><?PHP kadaijyoudai(24); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai25.php"><?PHP kadaijyoudai(25); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai26.php"><?PHP kadaijyoudai(26); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadai27.php"><?PHP kadaijyoudai(27); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiA1-1.php"><?PHP kadaijyoudai(28); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiA2-1.php"><?PHP kadaijyoudai(29); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiA3-1.php"><?PHP kadaijyoudai(30); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiA3-2.php"><?PHP kadaijyoudai(31); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiA4-1.php"><?PHP kadaijyoudai(32); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiB1-1.php"><?PHP kadaijyoudai(33); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiB1-2.php"><?PHP kadaijyoudai(34); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiB2-1.php"><?PHP kadaijyoudai(35); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiB3-1.php"><?PHP kadaijyoudai(36); ?></a></td>
	</tr>
	<tr>
		<th>課題No.</th>
		<th style="width: 3%">B4-1</th>
		<th style="width: 3%">B5-1</th>
		<th style="width: 3%">B5-2</th>
		<th style="width: 3%">C1-1</th>
		<th style="width: 3%">C2-1</th>
		<th style="width: 3%">C2-2</th>
		<th style="width: 3%">C2-3</th>
		<th style="width: 3%">C2-4</th>
		<th style="width: 3%">D1-1</th>
		<th style="width: 3%">D2-1</th>
		<th style="width: 3%">D3-1</th>
		<th style="width: 3%">D4-1</th>
		<th style="width: 3%">D5-1</th>
		<th style="width: 3%">E1-1</th>
		<th style="width: 3%">E1-2</th>
		<th style="width: 3%">E1-3</th>
		<th style="width: 3%">E1-4</th>
		<th style="width: 3%">E1-5</th>
	</tr>
	<tr>
		<th>状況</th>
		<td style="width: 3%"><a href="kadai/kadaiB4-1.php"><?PHP kadaijyoudai(37); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiB5-1.php"><?PHP kadaijyoudai(38); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiB5-2.php"><?PHP kadaijyoudai(39); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiC1-1.php"><?PHP kadaijyoudai(40); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiC2-1.php"><?PHP kadaijyoudai(41); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiC2-2.php"><?PHP kadaijyoudai(42); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiC2-3.php"><?PHP kadaijyoudai(43); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiC2-4.php"><?PHP kadaijyoudai(44); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiD1-1.php"><?PHP kadaijyoudai(45); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiD2-1.php"><?PHP kadaijyoudai(46); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiD3-1.php"><?PHP kadaijyoudai(47); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiD4-1.php"><?PHP kadaijyoudai(48); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiD5-1.php"><?PHP kadaijyoudai(49); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE1-1.php"><?PHP kadaijyoudai(50); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE1-2.php"><?PHP kadaijyoudai(51); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE1-3.php"><?PHP kadaijyoudai(52); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE1-4.php"><?PHP kadaijyoudai(53); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE1-5.php"><?PHP kadaijyoudai(54); ?></a></td>
	</tr>
	<tr>
		<th>課題No.</th>
		<th style="width: 3%">E2-1</th>
		<th style="width: 3%">E2-2</th>
		<th style="width: 3%">E2-3</th>
		<th style="width: 3%">E2-4</th>
		<th style="width: 3%">E2-5</th>
		<th style="width: 3%">F1-1</th>
		<th style="width: 3%">F2-1</th>
		<th style="width: 3%">G1-1</th>
		<th style="width: 3%">G2-1</th>
		<th style="width: 3%">H-1</th>
		<th style="width: 3%">H-2</th>
		<th style="width: 3%">H-3</th>
		<th style="width: 3%">H-4</th>
		<th style="width: 3%">H-5</th>
		<th style="width: 3%">H-6</th>
		<th style="width: 3%">練習1</th>
	</tr>
	<tr>
		<th>状況</th>
		<td style="width: 3%"><a href="kadai/kadaiE2-1.php"><?PHP kadaijyoudai(55); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE2-2.php"><?PHP kadaijyoudai(56); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE2-3.php"><?PHP kadaijyoudai(57); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE2-4.php"><?PHP kadaijyoudai(58); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiE2-5.php"><?PHP kadaijyoudai(59); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiF1-1.php"><?PHP kadaijyoudai(60); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiF2-1.php"><?PHP kadaijyoudai(61); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiG1-1.php"><?PHP kadaijyoudai(62); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiG2-1.php"><?PHP kadaijyoudai(63); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiH-1.php"><?PHP kadaijyoudai(64); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiH-2.php"><?PHP kadaijyoudai(65); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiH-3.php"><?PHP kadaijyoudai(66); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiH-4.php"><?PHP kadaijyoudai(67); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiH-5.php"><?PHP kadaijyoudai(68); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiH-6.php"><?PHP kadaijyoudai(69); ?></a></td>
		<td style="width: 3%"><a href="kadai/kadaiR1.php"><?PHP kadaijyoudai(R1); ?></a></td>
	</tr>
</table>
<br/><hr/>
<center>
<div><a href="https://www.youtube.com/channel/UCOLHDVyHEmX9m-0bsocEFzA" target="_blank">プログラミング利用技術演習　解説動画YouTubeチャンネル</a></div>
<hr/><div><a href="faq.php">質問</a>
&emsp;<a href="Destory.php">ログアウト</a>
&emsp;<a href="pass_change.php">パスワード変更</a>
&emsp;<a href="show.php" target="_blank">システム利用者情報表示・質問リスト</a>
</div></center>
</body>
</html>
