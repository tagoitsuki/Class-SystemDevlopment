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
	<title>
		課題04
	</title>
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
			課題04：今年はうるう年？
			<br />
		</strong>
		<span class="auto-style13">
			キーワード：閏年、if文、if else文、比較演算子、剰余演算子
		</span>
	</div>
	<hr/>
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
								閏年判定を行うプログラムを作成しなさい。
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						<br />
						閏年とは、4で割り切れて100で割切れない、または400で割切れる西暦の年（2月は29日まで）です。<br />
						if, else を使い、3つの条件を別々の if文 で作成すること。<br />
						西暦を入力したら、閏年かどうかを判定し、閏年なら○を、そうでなければ×を表示させましょう。<br />
					</p>
				</div>
			</fieldset>
		</div>
	</form>
	<form method="post">
		<textarea class="auto-style21" name="TextArea1" tabindex="0" cols="20" rows="1" onkeydown="insertTab(this, event);">
#define _CRT_SECURE_NO_WARNINGS  // 余計な警告が出ないようにする
#include	<stdio.h>

int	main( void )
{
	int	year;	// 整数：調べる年

	printf( "西暦を入力してください" );
	scanf( "%d", &year );
	if ( year <= 0 )	return 0;

	//// 以下に閏年を判定するプログラムを作成する

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