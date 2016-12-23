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
		課題20
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
			課題20:配列の入れ替え
			<br />
		</strong>
		<span class="auto-style13">
			キーワード：入れ替え、定数定義、const
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
								for文を使って、昇順に数値が入っている配列dataの中身を入れ替えて降順に並べ替えるプログラムを作成しなさい。
							</span>
						</strong>
					</p>
					<p class="auto-style15">
						<br />
						プログラム中で配列の要素数を使う場合、100ではなく DATA_NO を使うこと。<br />
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
	int	data[ DATA_NO ];
	int	i, j, temp;

	// 配列を昇順に乱数で初期化する
	srand( (unsigned int)time( NULL ) );
	data[ 0 ] = rand() % 10;
	for ( i = 1; i < DATA_NO; i ++ )
	{
		data[ i ] = data[ i - 1 ] + rand() % 10;
		if ( data[ i ] == data[ i - 1 ] )	data[ i ] ++;
	}

	// 配列の初期値を10個ずつ10行に表示する
	for ( i = 0; i < DATA_NO; i ++ )
	{
		if ( i % 10 == 0 )	printf( "\n" );
		printf( "%4d", data[ i ] );	// %4d で4桁表示（5桁以上はそのまま、4桁未満の場合はスペースが入る）
	}
	printf( "\n" );

	//// 以下に配列を逆順に入れ替えるプログラムを作成する



	// 入れ替えた配列を10個ずつ10行に表示する
	for ( i = 0; i < DATA_NO; i ++ )
	{
		if ( i % 10 == 0 )	printf( "\n" );
		printf( "%4d", data[ i ] );
	}
	printf( "\n" );

	return 0;
}</textarea>
		<div class="auto-style22" id="layer1">
			ファイルで提出する（.cpp限定）
			<input name="cppfiles" style="width: 504px" type="file" />
			<button class="auto-style2" name="faq" formaction="htt://10.8.68.230/~tto/faq.html">質問</button>　
			<button class="auto-style2" name="runstart">コンパイル・実行</button>　
			<button class="auto-style2" name="throws">提出</button><br />
			<hr/>
			<p class="auto-style5">
				最終更新日：2016.03.28

			</p>
		</div>
	</form>
</body>

</html>

