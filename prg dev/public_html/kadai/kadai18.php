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
		課題18
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
			課題18:線形探索
			<br />
		</strong>
		<span class="auto-style13">
			キーワード：線形探索、乱数、疑似乱数、srand, rand, time
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
								線形探索（先頭から順番に探す探索法）
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						&emsp;&emsp;for文を使って、整数の入っている配列から指定された数を探し、見つかったらその位置の要素番号を見つかるたびに表示し、最後にその個数を表示するプログラムを作成しなさい。<br />
						&emsp;&emsp;見つからなければ「見つからない」と表示すること。<br />
						<br />
					</p>
				</div>
			</fieldset>
		</div>
	</form>
	<form method="post">
		<textarea class="auto-style21" name="TextArea1" tabindex="0" cols="20" rows="1" onkeydown="insertTab(this, event);">
#define _CRT_SECURE_NO_WARNINGS  // 余計な警告が出ないようにする
#include	<stdio.h>
#include	<stdlib.h>
#include	<time.h>

int	main( void )
{
	int	data[ 100 ];
	int	num, i;

	// 乱数で配列を初期化する
	srand( (unsigned int)time( NULL ) );
	for ( i = 0; i < 100; i ++ )
	{
		data[ i ] = rand() % 100 - 50;
		printf( "%3d: %3d\t", i, data[ i ] );
	}
	printf( "\n" );

	// 探す値を入力する
	printf( "探す値 > " );
	scanf( "%d", &num );

	// 値を探す
	int	cnt = 0;


	// 結果を表示する
	if ( cnt <= 0 )
	{
		printf( "%dは見つかりません\n", num );
	}
	else
	{
		printf( "%dは%d個見つかりました。\n", num, cnt );
	}

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