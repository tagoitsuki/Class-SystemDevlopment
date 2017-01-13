<?PHP
session_start();
//ログイン状態のチェック
if(!isset($_SESSION["USERID"])){
	header("Location: http://10.8.68.230/~tto/Destory.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title> 課題A1-1</title>
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
			width: 100%;
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
		[Name:<?=htmlspecialchars($_SESSION["USERName"], ENT_QUOTES); ?>][<a href="http://10.8.68.230/~tto/menu.php">Menu</a>]
	</div>
	<hr/>
<div class="auto-style12">
		<strong>
			課題A1-1：逐次探索<br />
		</strong>
<span class="auto-style13">
           キーワード：逐次探索
		</span>
	</div>	<hr/>
	<form method="post">
		<div class="auto-style5" style="margin-bottom: 2em">
			<fieldset class="auto-style20" name="Group1" style="width: 90%">
				<legend class="auto-style11">
					<strong>
課題の内容
					</strong>
				</legend>
				<div class="auto-style10">
					<p class="auto-style15">
						<strong>
							<span class="auto-style14">
次の(1)から(5)までの機能を有する逐次探索のプログラムを作成せよ。以下URLを参考に作成すること。
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						<br />
(1) rand(), time(), srand()を使い -50以上49以下の値を100個ランダムに生成し、整数型の配列data[]に格納する。<br/>
(2) ”探す値＞”と表示する。<br/>
(3) 整数をキーボードから読み込み、int型の変数numに格納する。<br/>
(4) for文を使い、配列data[]から指定された数numを探し、見つかったらその位置の要素番号を見つかるたびに表示する。<br/>
(5) 指定された数data[]中に見つからなければ最後に「見つからない」と表示し、見つかれば見つかったnumの個数を表示する。<br/>
<br/>
URL:<a href="https://doc.co/Ed2FsB" target="_blank">https://doc.co/Ed2FsB</a>
					</p>
				</div>
			</fieldset>
		</div>
	</form>
	<form method="post">
		<textarea class="auto-style21" name="TextArea1" tabindex="0" cols="20" rows="1" onkeydown="insertTab(this, event);">
#include <stdio.h>
int main(void){

	return 0;
}</textarea>
		<div class="auto-style22" id="layer1">
			<button class="auto-style2" name="faq" formaction="http://10.8.68.230/~tto/faq.php">質問</button>　
			<button class="auto-style2" name="runstart" formaction="http://10.8.68.230/~tto/compile_execute_result.php">コンパイル・実行</button>　
			<button class="auto-style2" name="throws">提出</button><br />
			<hr/>
			<p class="auto-style5">
				最終更新日：2016.04.01
			</p>
		</div>
	</form>
</body>
</html>