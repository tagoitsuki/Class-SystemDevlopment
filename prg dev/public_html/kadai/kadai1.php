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
		課題01
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
			課題01：金種計算
			<br />
		</strong>
		<span class="auto-style13">
			キーワード：順次処理・整数型・徐算演算子・剰余演算子・代入演算子・金種計算
		</span>
	</div>
	<hr/>
	<form method="post">
		<div class="auto-style5" style="margin-bottom: 2em">
			<fieldset class="auto-style20" name="Group1" style="width: 97%">
				<legend class="auto-style11">
					<strong>
						課題の内容
					</strong>
				</legend>
				<div class="auto-style10">
					<p class="auto-style15">
						<strong>
							<span class="auto-style14">
								金種計算（ある金額に対し、合計が同額となる紙幣と硬貨の必要最小限の枚数を求める計算）を行いその結果を出力するプログラムを作成しなさい。
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						<span class="auto-style14">金種計算の例：</span><br />
						&emsp;&emsp;アルバイト料を2万3千4百5十6円受け取る状況を考えてみましょう。10000,5000,1000円札、500,100,50,10,5,1円玉をそれぞれ何枚受け取りますか。<br />
						&emsp;&emsp;（1円玉を2万3千4百5十6枚ももらったりすることはないですね）？通常、合計が23,456円となる紙幣と硬貨の必要最小限の枚数を受け取ります。<br />
						&emsp;&emsp;多くの人は、必要枚数の計算を10000円札から始め、1円玉まで順次計算することと思います。
					</p>
					<p class="auto-style15">
						<span class="auto-style14">プログラムの実行例：</span><br/>
						&emsp;&emsp;金額を入力してください &gt; 23456<br />
						&emsp;&emsp;10000円は2枚です<br />
						&emsp;&emsp;5000円は0枚です<br />
						&emsp;&emsp;1000円は3枚です<br />
						&emsp;&emsp;500円は0枚です<br />
						&emsp;&emsp;100円は4枚です<br />
						&emsp;&emsp;50円は1枚です<br />
						&emsp;&emsp;10円は0枚です<br />
						&emsp;&emsp;5円は1枚です<br />
						&emsp;&emsp;1円は1枚です<br />
					</p>
					<p class="auto-style15">
						<span class="auto-style14">作成するプログラムの追加の条件：</span><br/>
						&emsp;&emsp;・while文やfor文等の繰り返し文は使用しないこと。<br />
						&emsp;&emsp;・10000,5000,1000円札、500,100,50,10,5,1円玉の必要枚数をそれぞれ求めることとし、2000円札は含めないこと。<br />
						&emsp;&emsp;・枚数は整数値(小数点以下のない値)で求めること。例：43÷10=4，3÷5=0，3÷1=3
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
	int	money;
	int	no;

	printf( "金額を入力してください > " );
	scanf( "%d", &money );

	//// 以下に金種計算を行うプログラムを作成する。
	
	
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