/*/////////////////////////////////////////////////////////////////////////////////////
�ۑ�21�@�z��̓���ւ�
�@for�����g���āA�����ɐ��l�������Ă���z��data�̒��g�����ւ��č~���ɕ��בւ���v���O�������쐬���Ȃ����B
	�v���O�������Ŕz��̗v�f�����g���ꍇ�A100�ł͂Ȃ� DATA_NO ���g�����ƁB

�L�[���[�h�F����ւ��A�萔��`�Aconst
�ŏI�X�V���F2016.03.28
*/
#define _CRT_SECURE_NO_WARNINGS  // �]�v�Ȍx�����o�Ȃ��悤�ɂ���
#include	<stdio.h>
#include	<stdlib.h>
#include	<time.h>

int	main( void )
{
	const int	DATA_NO = 100;	// �萔��` 100�ł͂Ȃ� DATA_NO ���g������
	int	data[ DATA_NO ];
	int	i, j, temp;

	// �z��������ɗ����ŏ���������
	srand( (unsigned int)time( NULL ) );
	data[ 0 ] = rand() % 10;
	for ( i = 1; i < DATA_NO; i ++ )
	{
		data[ i ] = data[ i - 1 ] + rand() % 10;
		if ( data[ i ] == data[ i - 1 ] )	data[ i ] ++;
	}

	// �z��̏����l��10����10�s�ɕ\������
	for ( i = 0; i < DATA_NO; i ++ )
	{
		if ( i % 10 == 0 )	printf( "\n" );
		printf( "%4d", data[ i ] );	// %4d ��4���\���i5���ȏ�͂��̂܂܁A4�������̏ꍇ�̓X�y�[�X������j
	}
	printf( "\n" );

	//// �ȉ��ɔz����t���ɓ���ւ���v���O�������쐬����



	// ����ւ����z���10����10�s�ɕ\������
	for ( i = 0; i < DATA_NO; i ++ )
	{
		if ( i % 10 == 0 )	printf( "\n" );
		printf( "%4d", data[ i ] );
	}
	printf( "\n" );

	return 0;
}
