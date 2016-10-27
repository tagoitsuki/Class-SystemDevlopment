/*/////////////////////////////////////////////////////////////////////////////////////
課題１８．線形探索（先頭から順番に探す探索法）
	for文を使って、整数の入っている配列から指定された数を探し、見つかったらその位置の要素番号を見つかるたびに表示し、最後にその個数を表示するプログラムを作成しなさい。
	見つからなければ「見つからない」と表示すること。

キーワード：線形探索、乱数、疑似乱数、srand, rand, time
最終更新日：2016.03.28
*/
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
}
