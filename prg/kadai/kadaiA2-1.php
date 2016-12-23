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
	<title>
		課題A2-1
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
		[Name:<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>][<a href="http://10.8.68.230/~tto/menu.html">Menu</a>]
	</div>
	<hr/>
	<div class="auto-style12">
		<strong>
			課題A2-1．二分探索 Part.2
			<br />
		</strong>
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
								本課題では、二分探索を行うプログラムを作成する。次の(1)から(6)の機能を有するプログラムを作成せよ。以下のURLを参考にすること。
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						(1) rand(),time(),srand()を使い0以上9以下の値を生成し、それを例題A2-1のように使い、整数型の配列date[]の初期化を数が昇順に並ぶように行う。<br>
						(2) "探す値＞"と表示する。<br>
						(3) 整数をキーボードから読み込み、int型の変数numに格納する。<br>
						(4) "min\tm\tmax\tdata[m]\n"と表示する。<br>
						(5) for文を使い、解列data[]から指定された数numを二分探索により探し、見つかったら何回目のチェックで見つかったかを表示する。("%dは%d回目で見つかりました。\n").<br>
						&emsp;捜索範囲の中央の位置mが変化したら、min,m,max,data[m]の値を表示する。("%d\t%d\t%d\tdata[m]=%d\n").<br>
						(6) 指定された数がdata[]中に見つからなければ、最後に見つからなかったことを表示する。("%d回探しましたが、%dは見つかりません\n").<br/><br/>
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


	//この部分は「配列に100個の整数を昇順で入れる」コードです。
	//例題を参考にして、そのまま使ってください。
	srand((unsigned int) time (NULL));
	data[0] = rand() % 10;
	printf("%3d: %d\t, 0, data[0]);
	for( i = 1; i < DATA_NO ; i++)
	{
		data[i] = data[i - 1] + rand() % 10;
		if(data[i] == data[i - 1])	data[i]++;
		printf("%3d: %d\t", i, data[i]);
	}
	printf("\n");
 

	return 0;
}</textarea>
		<div class="auto-style22" id="layer1">
			ファイルで提出する（.cpp限定）
			<input name="cppfiles" style="width: 504px" type="file" />
			<button class="auto-style2" name="faq" formaction="http://10.8.68.230/~tto/faq.html">質問</button>　
			<button class="auto-style2" name="runstart">コンパイル・実行</button>　
			<button class="auto-style2" name="throws">提出</button><br />
			<hr/>
			<p class="auto-style5">
				最終更新日：2016.03.30
			</p>
		</div>
	</form>
</body>

</html>

