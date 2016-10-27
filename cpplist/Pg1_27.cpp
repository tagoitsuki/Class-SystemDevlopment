/*/////////////////////////////////////////////////////////////////////////////////////
課題27.	switch文とenum型
	乱数により占いをするプログラムを作成しなさい。
	列挙型 FORTUNE を使ってswitch文で作成すること。

	名前を入力し、文字コードの合計と現在時刻で乱数を初期化する
	乱数を求めて5で割った余りを求め、switch文で占い結果を表示する
	占い結果は、大吉、中吉、末吉、凶、大凶の5つ

キーワード：switch,case, defautl, enum
最終更新日：2016.03.28
*/
#define _CRT_SECURE_NO_WARNINGS  // 余計な警告が出ないようにする
#include	<stdio.h>
#include	<stdlib.h>
#include	<time.h>

// 列挙型の定義
enum FORTUNE { DAIKITI, TYUUKITI, SUEKITI, KYOU, DAIKYOU };
const int	FORTUNE_NO = 5;

int	main( void )
{
	char	name[ 100 ];
	int		next = 1;
	while ( next == 1 )
	{
		printf( "\nあなたの名前を入力してください（間にスペースを入れないこと） > " );
		scanf( "%s", name );
		
		// 名前の文字コードを合計する
		int	fortune = 0;
		for ( int i = 0; name[ i ] != '\0'; i ++ )
		{
			fortune += name[ i ];
		}
		// 乱数を初期化する
		srand( fortune + (unsigned int)time( NULL ) );
		int	no = rand() % FORTUNE_NO;
		printf( "あなたの今日の運命は" );

		//// switch 文で占い結果を表示する（caseでは enum FORTUNEのシンボルを使うこと）


		printf( "\n続けますか？(1:続ける)" );
		scanf( "%d", &next );
	}
	return 0;
}
