/*/////////////////////////////////////////////////////////////////////////////////////
課題23	文字列コピー
　　for文を使って、文字列をコピーし両方の文字列を表示するプログラムを作成しなさい。

キーワード：コピー、文字列、ヌル、'\0'
最終更新日：2016.03.28
*/
#define _CRT_SECURE_NO_WARNINGS  // 余計な警告が出ないようにする
#include	<stdio.h>

int	main( void )
{
	int		i;
	char	s[ 100 ];
	char	d[ 100 ];
	printf( "文字列を入力してください > " );
	scanf( "%s", s );
	////ここにプログラムを書く


	printf( "入力した文字列：%s\n", s );
	printf( "コピーされた文字列：%s\n", d );
	
	return 0;
}

