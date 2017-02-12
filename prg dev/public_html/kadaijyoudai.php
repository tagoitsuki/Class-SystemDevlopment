<?PHP
	function kadaijyoudai($no){
		$mysqli = new mysqli("localhost", "tto", "nitkambayashi", "prog");
		if($mysqli->connect_error){
			exit;
		}
		else{
			$mysqli->set_charset("utf8");
		}
		$sql = "SELECT joutai FROM teisyutsu WHERE fk_id_user ='".$_SESSION['USERID']."' AND fk_id_kadai = '".$no."'";
		$result = $mysqli->query($sql);
		if(!$result){
			exit;
		}
		while($row = $result->fetch_assoc()){
			$Js = $row["joutai"];
		}
		
		if($Js=="0"){
			echo "採点待ち";
		}
		if($Js=="-"){
			echo "未回答";
		}
		if($Js=="×"){
			echo "再提出";
		}
		if($Js=="○"){
			echo "合　格";
		}
		$mysqli->close();
	}
?>