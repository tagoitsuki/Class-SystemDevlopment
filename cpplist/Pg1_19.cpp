/*/////////////////////////////////////////////////////////////////////////////////////
�ۑ�20. �񕪒T���@�i�o�C�i���T�[�`�j
    for�����g���āA�����ɕ��ׂ�ꂽ���l�̓����Ă���100�̔z�񂩂�A
    �񕪒T���@�Ŏw�肳�ꂽ����T���v���O�������쐬���Ȃ����B
	�v���O�������Ŕz��̗v�f�����g���ꍇ�A100�ł͂Ȃ� DATA_NO ���g�����ƁB

	������Ȃ���΁u�݂���Ȃ��v�A���������炻�̈ʒu�̔z��̗v�f�ԍ��ƒT�����񐔂�\������B
	�r���o�߂�min,m,max,data[m]��\������B�l�̊Ԃ��J����ɂ́A\t�i�^�u�j���g���Ƃ悢�B

�L�[���[�h�F�񕪒T���A�o�C�i���T�[�`�A����
�ŏI�X�V���F2016.03.28
*/
#define _CRT_SECURE_NO_WARNINGS  // �]�v�Ȍx�����o�Ȃ��悤�ɂ���
#include	<stdio.h>
#include	<stdlib.h>
#include	<time.h>

int	main( void )
{
	const int	DATA_NO = 100;	// �萔��` 100�ł͂Ȃ� DATA_NO ���g������
	int	num;		// �T���l
	int	cnt = 0;	// �T������
	int	data[ DATA_NO ];	// �T���l�������ɓ������z��
	int	min, m, max;
	int	i;

	// �z��𗐐��ŏ���������
	srand( (unsigned int)time( NULL ) );
	data[ 0 ] = rand() % 10;
	printf( "%3d: %d\t", 0, data[ 0 ] );	// %3d ��3���\���i4���ȏ�͂��̂܂܁A3�������̏ꍇ�̓X�y�[�X������j
	for ( i = 1; i < DATA_NO; i ++ )
	{
		data[ i ] = data[ i - 1 ] + rand() % 10;
		if ( data[ i ] == data[ i - 1 ] )	data[ i ] ++;
		printf( "%3d: %d\t", i, data[ i ] );
	}
	printf( "\n" );

	// �T���l����͂���
	printf( "�T���l > " );
	scanf( "%d", &num );

	//// �ȉ��ɓ񕪒T���@�Ŏw�肳�ꂽ����T���v���O�������쐬����

	// ������Ȃ������ꍇ�̒T�����񐔂�\������
	printf( "%d��T���܂������A%d�͌�����܂���\n", cnt, num );

	return 0;
}
