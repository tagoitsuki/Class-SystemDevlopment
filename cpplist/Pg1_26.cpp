/*/////////////////////////////////////////////////////////////////////////////////////
課題26．文字列反転
	for文を使って、文字列を逆にして表示するプログラムを作成しなさい。
キーワード：文字列、ヌル、'\0'
最終更新日：2016.03.30
*/
#define _CRT_SECURE_NO_WARNINGS  // 余計な警告が出ないようにする
#include	<stdio.h>

int	main( void )
{
	int		top, last;
	char	tmp;
	char	s[ 100 ];
	printf( "もとの文字列を入力してください > " );
	gets( s );

	//// 以下にプログラムを作成する

	printf( "入れ替えた文字列：%s\n", s );

	return 0;
}
