/*/////////////////////////////////////////////////////////////////////////////////////
課題20. 二分探索法（バイナリサーチ）
    for文を使って、昇順に並べられた数値の入っている100個の配列から、
    二分探索法で指定された数を探すプログラムを作成しなさい。
	プログラム中で配列の要素数を使う場合、100ではなく DATA_NO を使うこと。

	見つからなければ「みつからない」、見つかったらその位置の配列の要素番号と探した回数を表示する。
	途中経過のmin,m,max,data[m]を表示する。値の間を開けるには、\t（タブ）を使うとよい。

キーワード：二分探索、バイナリサーチ、乱数
最終更新日：2016.03.28
*/
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
}
