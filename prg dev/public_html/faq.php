<!DOCTYPE html>
<html>
<head>
	<meta content="ja" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="x-ua-compatible" content="IE=7">
<meta http-equiv="x-ua-compatible" content="IE=Emulate7">
	<title>質問フォーム</title>
	<style type="text/css">
		.auto-style2 {
			text-align: right;
		}
	.auto-style3 {
	color: #FFFFFF;
	font-size: x-large;
	background-color: #0000FF;
}
	</style>
	<script type="text/javascript">
	<!--
		function insertTab(o, e){
			var kC = e.keyCode ? e.keyCode : e.charCode ? e.charCode : e.which;
			if (kC == 9 && !e.shiftKey && !e.ctrlKey && !e.altKey){
				var oS = o.scrollTop;
				if (o.setSelectionRange){
					var sS = o.selectionStart;
					var sE = o.selectionEnd;
					o.value = o.value.substring(0, sS) + "\t" + o.value.substr(sE);
					o.setSelectionRange(sS + 1, sS + 1);
					o.focus();
				}
				else if (o.createTextRange){
					document.selection.createRange().text = "\t";
					e.returnValue = false;
				}
				o.scrollTop = oS;
				if (e.preventDefault){
					e.preventDefault();
				}
				return false;
			}
			return true;
		}//-->
	</script>
</head>

<body>
	<div class="auto-style3" style="width: 100%"><strong><em>質問フォーム　-＞質問内容を入力してください</em></strong></div>
	<div>
		<form method="post">
			課題番号：<input name="Text1" type="text" placeholder="課題番号を入力"/>
			<br />
		<br />
			<strong>質問内容：</strong><br/>
		<textarea cols="20" name="TextArea1" style="width: 100%; height: 200px; font-size: large;" onkeydown="insertTab(this, event);"></textarea>
			<div class="auto-style2">
				<button name="Abutton1" type="submit" formaction="faq_conp.php">質問を送ります！</button>&nbsp;
				<button name="Abutton2" type="submit" formaction="menu.php">やっぱ投稿しない</button></div>
		</form>
	</div>


</body>

</html>
