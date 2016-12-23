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
<title> 課題A4-1</title>
<style type="text/css">
	.auto-style1 {
		text-align: right;
	}
	.auto-style2 {
		font-size: medium;
	}
	.auto-style5 {
		text-align: center;
	}
	.auto-style10 {
		text-align: left;
	}
	.auto-style11 {
		text-align: left;
		font-size: larger;
	}
	.auto-style12 {
		text-align: center;
		font-size: x-large;
		font-family: "Arial Black";
	}
	.auto-style13 {
		font-size: small;
	}
	.auto-style14 {
		text-decoration: underline;
	}
	.auto-style15 {
		margin-left: 40px;
	}
	.auto-style20{
		background-color: #66FFFF;
	}
	.auto-style21{
		width: 200%;
		height:400px;
		font-family: 'Courier New', Courier, monospace;
		font-size: large;
	}
	.auto-style22{
		width: 100%;
		height: 41px;
		z-index: 1;
		left: 15px;
		top: 577px;
		bottom: -69px;
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
	<div class="auto-style1">
		[Name:<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>][<a href="http://10.8.68.230/~tto/menu.html">Menu</a>]
	</div>
	<hr/>
<div class="auto-style12">
	<strong>
	課題A4-1：文字列の長さ<br />
	</strong>
</div><hr/>
<form method="post">
<div class="auto-style5" style="margin-bottom: 2em">
<fieldset class="auto-style20" name="Group1" style="width: 90%">
<legend class="auto-style11">
<strong> 課題の内容 </strong>
</legend>
<div class="auto-style10">
<p class="auto-style15"><strong><span class="auto-style14">
scanf()を使い、文字列をキーボードからchar型の配列s[]に読み込み、その文字列の文字数を表示させよ。ただし、配列s[]の要素数は100とする。
</span></strong></p>
<p class="auto-style15"><br />
☆ヒント☆
&emsp;増減処理以外の処理がないfor文は、以下のように書く。<br/>
&emsp;&emsp;for(初期化; 継続条件;　増減処理)<br/>
&emsp;&emsp;{<br/>
&emsp;&emsp;&emsp;；　//ここの処理がない場合はセミコロンのみ記述する<br/>
&emsp;&emsp;}<br/>
</p></div></fieldset></div></form>
<form method="post">
<textarea class="auto-style21" name="TextArea1" tabindex="0" cols="20" rows="1" onkeydown="insertTab(this, event);">
#include <stdio.h>
int main(void)
{

	return 0;
}</textarea>
<div class="auto-style22" id="layer1"> ファイルで提出する（.cpp限定）
<input name="cppfiles" style="width: 504px" type="file" />
<button class="auto-style2" name="faq" formaction="http://10.8.68.230/~tto/faq.html">質問</button>
<button class="auto-style2" name="runstart">コンパイル・実行</button>
<button class="auto-style2" name="throws">提出</button><br /><hr/>
<p class="auto-style5">
最終更新日：2016/11/17 10:29:29
</p>
</div>
</form>
</body></html>
