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
		課題21
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
			課題21:選択ソート(整列)
			<br />
		</strong>
		<span class="auto-style13">
			キーワード：for文、二重の繰り返し
		</span>
	</div>
	<hr/>
	<form method="post">
		<div class="auto-style16" style="margin-bottom: 2em">
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
								for文を使って、乱数で初期化された要素数が100の配列の中の値を、選択ソート（下記選択ソート参照）	で降順に並べて表示するプログラムを作成しなさい。<br>
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						<br />
						日本語手続きでは配列の要素数を5としていたが、プログラムでは要素数は100とする。<br />
						ただし、プログラム中で配列の要素数を使う場合、100ではなく DATA_NOを使うこと（99は、DATA_NO - 1 を使うこと）。
						また、要素数が100の配列の中の値を乱数で初期化する処理と表示処理はあらかじめ作成済みである。<br />
					</p>
					<p class="auto-style15">
						<span class="auto-style14">選択ソート：</span><br/>
						配列の中から最大値を見つけ配列の0番目と入れ替える。<br>
						配列の1番目以降の中で最大値を見つけ1番目と入れ替える。<br>
						配列の2番目以降の中で最大値を見つけて2番目と入れ替える。<br>
						．．．。<br>
						これを繰り返し、配列中の数値を降順（大きい順）に並べ替える。
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
	const int	DATA_NO = 100;	// 定数定義　プログラムの中では100を使わずDATA_NOを使うこと
	int	data[ DATA_NO ];
	int i, j;
	int maxi;
	int tmp;

	//////// 配列を乱数（0~999）で初期化する処理（作成済み）
	srand( (unsigned int)time( NULL ) );  // 時刻から乱数の種を生成
	for ( i = 0; i < DATA_NO; i++ )
	{
		// 乱数を1000で割った余り（0~999の値）を配列のi番目に代入
		data[ i ] = rand() % 1000;
	}
	// for文の中でint iとすると、for文の外ではiは使えない
	//////// ここまで、配列を乱数で初期化する処理（作成済み）

	//////// 配列の各要素の値を10個ずつ表示する処理（作成済み）
	// 並べ替え前の配列の各要素の値を表示
	for ( i = 0; i < DATA_NO; i++ )
	{
		if ( i % 10 == 0 )
		{
			printf( "\n" );
		}
		printf( "%4d", data[ i ] );  //10進整数4桁表示
	}
	printf( "\n" );
	//////// ここまで、配列の各要素の値を表示する処理（作成済み）

	//// 以下に選択ソートにより配列の要素の値を並べ替える
	//// プログラムを作成




	//////// 配列の各要素の値を10個ずつ表示する処理（作成済み）
	// 並べ替え後の配列の各要素の値を表示
	for ( i = 0; i < DATA_NO; i++ )
	{
		if ( i % 10 == 0 )
		{
			printf( "\n" );
		}
		printf( "%4d", data[ i ] );  //10進整数4桁表示
	}
	printf( "\n" );
	//////// ここまで、配列の各要素の値を表示する処理（作成済み）

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