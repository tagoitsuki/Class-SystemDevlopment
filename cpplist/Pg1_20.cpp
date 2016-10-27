/*/////////////////////////////////////////////////////////////////////////////////////
課題21　配列の入れ替え
　for文を使って、昇順に数値が入っている配列dataの中身を入れ替えて降順に並べ替えるプログラムを作成しなさい。
	プログラム中で配列の要素数を使う場合、100ではなく DATA_NO を使うこと。

キーワード：入れ替え、定数定義、const
最終更新日：2016.03.28
*/
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
}
