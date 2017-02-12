<?PHP
session_start();
//ログイン状態のチェック
if(!isset($_SESSION["USERID"])){
	header("Location: Destory.php");
	exit;
}
?>
<?PHP
$mysqli = new mysqli("localhost", "tto", "nitkambayashi", "prog");
if($mysqli->connect_error){
	//CONNECT FAILURE
	header("Location: Destroy.php");
}
else{
	$mysqli->set_charset("utf8");
}
$sql = "SELECT * FROM user WHERE id_user='".$_SESSION["USERID"]."'";
$result = $mysqli->query($sql);
if(!$result){
	echo '<strong>▼Notice</strong><br/>Query is FAILURED'. $mysqli_error;
	exit();
}
while ($row = $result->fetch_assoc()){
	$classno = $row["fk_class"];
}
$sql2 = "SELECT * FROM class WHERE id_class='".$classno."'";
$result2 = $mysqli->query($sql2);
while ($row = $result2->fetch_assoc()){
	$classname = $row["class_name"];
}

?>
<!DOCTYPE html>
<html>
<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
<title>課題設定</title>
</head>
<body>
<h2>課題表示設定</h2>
<div>担当している教室：<?PHP echo $classname; ?></div><hr/>
<div><b>課題表示範囲</b>（最大表示範囲を指定してください。例：課題１から<b><font color="#FF0000">課題27</font></b>まで→<b><font color="#FF0000">課題27</font></b>を選択。）</div>
<form name="hyouji" action="kirikae.php">
<table>
<tr>
<td><input type="radio" name="h1" value="1">課題1</input></td>
<td><input type="radio" name="h1" value="2">課題2</input></td>
<td><input type="radio" name="h1" value="3">課題3</input></td>
<td><input type="radio" name="h1" value="4">課題4</input></td>
<td><input type="radio" name="h1" value="5">課題5</input></td>
<td><input type="radio" name="h1" value="6">課題6</input></td>
<td><input type="radio" name="h1" value="7">課題7</input></td>
<td><input type="radio" name="h1" value="8">課題8</input></td>
<td><input type="radio" name="h1" value="9">課題9</input></td>
<td><input type="radio" name="h1" value="10">課題10</input></td>
</tr><tr>
<td><input type="radio" name="h1" value="11">課題11</input></td>
<td><input type="radio" name="h1" value="12">課題12</input></td>
<td><input type="radio" name="h1" value="13">課題13</input></td>
<td><input type="radio" name="h1" value="14">課題14</input></td>
<td><input type="radio" name="h1" value="15">課題15</input></td>
<td><input type="radio" name="h1" value="16">課題16</input></td>
<td><input type="radio" name="h1" value="17">課題17</input></td>
<td><input type="radio" name="h1" value="18">課題18</input></td>
<td><input type="radio" name="h1" value="19">課題19</input></td>
<td><input type="radio" name="h1" value="20">課題20</input></td>
</tr><tr>
<td><input type="radio" name="h1" value="21">課題21</input></td>
<td><input type="radio" name="h1" value="22">課題22</input></td>
<td><input type="radio" name="h1" value="23">課題23</input></td>
<td><input type="radio" name="h1" value="24">課題24</input></td>
<td><input type="radio" name="h1" value="25">課題25</input></td>
<td><input type="radio" name="h1" value="26">課題26</input></td>
<td><input type="radio" name="h1" value="27">課題27</input></td>
<td><input type="radio" name="h1" value="28">課題A1-1</input></td>
<td><input type="radio" name="h1" value="29">課題A2-1</input></td>
<td><input type="radio" name="h1" value="30">課題A3-1</input></td>
</tr><tr>
<td><input type="radio" name="h1" value="31">課題A3-2</input></td>
<td><input type="radio" name="h1" value="32">課題A4-1</input></td>
<td><input type="radio" name="h1" value="33">課題B1-1</input></td>
<td><input type="radio" name="h1" value="34">課題B1-2</input></td>
<td><input type="radio" name="h1" value="35">課題B2-1</input></td>
<td><input type="radio" name="h1" value="36">課題B3-1</input></td>
<td><input type="radio" name="h1" value="37">課題B4-1</input></td>
<td><input type="radio" name="h1" value="38">課題B5-1</input></td>
<td><input type="radio" name="h1" value="39">課題B5-2</input></td>
<td><input type="radio" name="h1" value="40">課題C1-1</input></td>
</tr><tr>
<td><input type="radio" name="h1" value="41">課題C2-1</input></td>
<td><input type="radio" name="h1" value="42">課題C2-2</input></td>
<td><input type="radio" name="h1" value="43">課題C2-3</input></td>
<td><input type="radio" name="h1" value="44">課題C2-4</input></td>
<td><input type="radio" name="h1" value="45">課題D1-1</input></td>
<td><input type="radio" name="h1" value="46">課題D2-1</input></td>
<td><input type="radio" name="h1" value="47">課題D3-1</input></td>
<td><input type="radio" name="h1" value="48">課題D4-1</input></td>
<td><input type="radio" name="h1" value="49">課題D5-1</input></td>
<td><input type="radio" name="h1" value="50">課題E1-1</input></td>
</tr><tr>
<td><input type="radio" name="h1" value="51">課題E1-2</input></td>
<td><input type="radio" name="h1" value="52">課題E1-3</input></td>
<td><input type="radio" name="h1" value="53">課題E1-4</input></td>
<td><input type="radio" name="h1" value="54">課題E1-5</input></td>
<td><input type="radio" name="h1" value="55">課題E2-1</input></td>
<td><input type="radio" name="h1" value="56">課題E2-2</input></td>
<td><input type="radio" name="h1" value="57">課題E2-3</input></td>
<td><input type="radio" name="h1" value="58">課題E2-4</input></td>
<td><input type="radio" name="h1" value="59">課題E2-5</input></td>
<td><input type="radio" name="h1" value="60">課題F1-1</input></td>
</tr><tr>
<td><input type="radio" name="h1" value="61">課題F2-1</input></td>
<td><input type="radio" name="h1" value="62">課題G1-1</input></td>
<td><input type="radio" name="h1" value="63">課題G2-1</input></td>
<td><input type="radio" name="h1" value="64">課題H-1</input></td>
<td><input type="radio" name="h1" value="65">課題H-2</input></td>
<td><input type="radio" name="h1" value="66">課題H-3</input></td>
<td><input type="radio" name="h1" value="67">課題H-4</input></td>
<td><input type="radio" name="h1" value="68">課題H-5</input></td>
<td><input type="radio" name="h1" value="69">課題H-6</input></td>
</tr><tr>
<td colspan="10">※練習1は対象外です。（追加時にアクセス可能です。）</td>
</tr>
</table>
<input type="submit" name="exec" value="実行"/>
</form>
<a href="menu_tr.php">もどる</a>
</body>
</html>
<?PHP
if(isset($_POST["exec"])){
	/*
	単純な流れとして、
	１．受講者のIDを取得
	２．表示範囲の最大を取得
	３．insert系で取り組める課題を表示
		(1) そのIDに対してすでに公開しているものはinsertを行わない
		(2) 課題練習１はユーザ追加時に対処？
	*/
	$sql3 = "SELECT * FROM user WHERE power='3' AND fk_class='".$classno."'";
	$result3 = $mysqli->query($sql3);
	if($result3){
		while ($row = $result3->fetch_assoc()){
			$kadai = 1;
			$id = $row["id_user"];
			while($kadai<=$_GET['h1']){
				$sql = "INSERT INTO teisyutsu (fk_id_user, fk_id_kadai, joutai, fk_id_saiten, cmnt_sitn, cmnt_user, date, file_pass) VALUES ('".$id."', '".$kadai."', '-', NULL, NULL, NULL, NULL, NULL);";
				$kadai++;
			}
		}
		echo 'MISSION COMPLETE.';
		exit();
	}
	else{
		echo 'mission fairured';
		exit();
	}
}
?>