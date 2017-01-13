<?PHP
	include 'password.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="ja" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=10">
<meta http-equiv="x-ua-compatible" content="IE=Emulate10">
	<title>
		プログラミング支援システム ver.1
	</title>
	<style type="text/css">
		.auto-style3 {
			text-align: center;
		}
		.auto-style7 {
			font-size: xx-large;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			text-align: center;
		}
		.auto-style8 {
			font-size: small;
		}
	</style>
</head>

<body lang="ja">
	<div class="auto-style7">
		<strong>
			プログラミング支援システム ver.1.0.0
		</strong>
		<br/>
		<span class="auto-style8">
			<em>
				<strong>
					Nippon Institute of Technology Computer and Information Engneering
				</strong>
			</em>
		</span>
	</div>
	<hr />
	<form method="post" name="form">
		<fieldset name="Group1">
			<legend>
				ログイン
			</legend>
			<p class="auto-style3">User ID：
				<input type="text" name="ID1" id="ID1" size="20"/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Password：
				<input type="password" name="password" id="password"/>
			</p>
			<div class="auto-style3">
				<button style="submit" name="enter" id="enter">
					<div class="auto-style3" visible="true">
						Enter
					</div>
				</button>
			</div>
		</fieldset>
	</form>
	<form method="post">
		<fieldset name="Group1">
			<legend>
				更新情報
			</legend>
			<p>
				Ver. 1.0.0<br/>
				・公に開けり。
			</p>
		</fieldset>
	</form>
	<form method="post">
		<fieldset name="Group1">
			<legend>
				おしらせ
			</legend>
			<p>
				課題８のみ公に開ける状態になっています。（2017.01.12　15：40）
			</p>
		</fieldset>
		<hr>
	</form>
</body>

</html>
<?PHP
	// -*- coding: utf-8 -*-
	//header("Content-type: text/html; charset=UTF-8");
	//require_once 'password.php';
	session_start();
	if(isset($_POST['enter'])){
		$name = $_POST['ID1'];
		$Password = $_POST['password'];
		if(empty($name)){
			echo '<div>PLEASE INPUT YOUR ID.</div>';
		}
		if(empty($Password)){
			echo '<div>PLEASE INPUT YOUR PASSWORD.</div>';
		}
		if(!empty($name)&& !empty($Password)){
					
			$mysqli = new mysqli("localhost", "tto", "nitkambayashi", "prog");
			if($mysqli->connect_error){
				//CONNECT FAILURE
				echo "<p>CONNECT FAILURE</p>";
			}
			else{
				$mysqli->set_charset("utf8");
			}
			
			// 入力値のサニタイズ
			$name = $mysqli->real_escape_string($_POST["ID1"]);
 
			$sql = "SELECT * FROM user WHERE id_user ='".$name . "'";
			$result = $mysqli->query($sql);
			if(!$result){
				echo '<p>Query is FAILURED.</p>'. $mysqli_error;
				exit();
			}
			while ($row = $result->fetch_assoc()){
				$db_hashed_pwd = $row["psw"];
				$UName = $row["user_name"];
				$POWER = $row["power"];
			}
			$mysqli->close();
			if($Password == $db_hashed_pwd){
				session_regenerate_id(true);
				$_SESSION["USERID"] = $name;
				$_SESSION["USERName"] = $UName;
				$_SESSION["POWER"] = $POWER;
				if($name==$Password){
					header("Location: defaultpasschange.php");
					exit;
				}
				else{
					if($POWER =="3"){
						header("Location: menu.php");
						exit;
					}
					else{
						header("Location: menu_tr.php");
						exit;	
					}
				}
			}
			else{
				header("Location: loginerror.php");
			}
		}
		else{
		}
	}
	$mysqli->close();
?>
