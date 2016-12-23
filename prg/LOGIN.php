<?PHP
	include 'password.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="ja" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>
		プログラミング支援システム
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
			プログラミング支援システム ver.DEVELOP 5-Advanced
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
				Ver.DEVELOP 5-Advanced<br/> 
				・初期PWでログイン時にPWを変更するよう指示するページ作成。ただし、未動作。<br/>
				・課題ページのName、メニューぺージのUserIDとUserNameをそれぞれ画面上部に表示できるように改善。<br/>
				・各種ページURLを改善。<br/>
			</p>
		</fieldset>
	</form>
	<form method="post">
		<fieldset name="Group1">
			<legend>
				おしらせ
			</legend>
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
		echo '<div>0</div>';
		if(!empty($name)&& !empty($Password)){
					
			$mysqli = new mysqli("localhost:3306", "root", "21tago82", "prg");
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
			}
			$mysqli->close();
			if($Password == $db_hashed_pwd){
				session_regenerate_id(true);
				$_SESSION["USERID"] = $name;
				$_SESSION["USERName"] = $UName;
				if($name==$Password){
					header("Location: defaultpasschange.php");
					exit;
				}
				else{
					header("Location: menu.php");
					exit;
				}
			}
			else{
				header("Location: loginerror.php");
				exit;
			}
		}
		else{
			echo '<div>PLEASE INPUT YOUR ID.</div><br/>';
			echo '<div>PLEASE INPUT YOUR PASSWORD.</div>';
		}
	}
?>
