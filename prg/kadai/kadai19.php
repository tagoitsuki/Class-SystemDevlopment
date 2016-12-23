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
		課題19
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
			課題19:二分探索
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
								二分探索法（バイナリサーチ）
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						&emsp;&emsp;for文を使って、昇順に並べられた数値の入っている100個の配列から、<br />
						&emsp;&emsp;二分探索法で指定された数を探すプログラムを作成しなさい。<br />
						&emsp;&emsp;プログラム中で配列の要素数を使う場合、100ではなく DATA_NO を使うこと。<br /><br />
						&emsp;&emsp;見つからなければ「みつからない」、見つかったらその位置の配列の要素番号と探した回数を表示する。<br/>
						&emsp;&emsp;途中経過のmin,m,max,data[m]を表示する。値の間を開けるには、\t（タブ）を使うとよい。<br />
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
	const int	DATA_NO = 100;	// 定数定義 100ではなく DATA_NO を使うこと
	int	num;		// 探す値
	int	cnt = 0;	// 探した回数
	int	data[ DATA_NO ];	// 探す値が昇順に入った配列
	int	min, m, max;
	int	i;

	// 配列を乱数で初期化する
	srand( (unsigned int)time( NULL ) );
	data[ 0 ] = rand() % 10;
	printf( "%3d: %d\t", 0, data[ 0 ] );	// %3d で3桁表示（4桁以上はそのまま、3桁未満の場合はスペースが入る）
	for ( i = 1; i < DATA_NO; i ++ )
	{
		data[ i ] = data[ i - 1 ] + rand() % 10;
		if ( data[ i ] == data[ i - 1 ] )	data[ i ] ++;
		printf( "%3d: %d\t", i, data[ i ] );
	}
	printf( "\n" );

	// 探す値を入力する
	printf( "探す値 > " );
	scanf( "%d", &num );

	//// 以下に二分探索法で指定された数を探すプログラムを作成する

	// 見つからなかった場合の探した回数を表示する
	printf( "%d回探しましたが、%dは見つかりません\n", cnt, num );

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
				最終更新日：YYYY.MM.DD
			</p>
		</div>
	</form>
</body>

</html>
