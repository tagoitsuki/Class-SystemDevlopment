/*/////////////////////////////////////////////////////////////////////////////////////
�ۑ�P�W�D���`�T���i�擪���珇�ԂɒT���T���@�j
	for�����g���āA�����̓����Ă���z�񂩂�w�肳�ꂽ����T���A���������炻�̈ʒu�̗v�f�ԍ��������邽�тɕ\�����A�Ō�ɂ��̌���\������v���O�������쐬���Ȃ����B
	������Ȃ���΁u������Ȃ��v�ƕ\�����邱�ƁB

�L�[���[�h�F���`�T���A�����A�^�������Asrand, rand, time
�ŏI�X�V���F2016.03.28
*/
#define _CRT_SECURE_NO_WARNINGS  // �]�v�Ȍx�����o�Ȃ��悤�ɂ���
#include	<stdio.h>
#include	<stdlib.h>
#include	<time.h>

int	main( void )
{
	int	data[ 100 ];
	int	num, i;

	// �����Ŕz�������������
	srand( (unsigned int)time( NULL ) );
	for ( i = 0; i < 100; i ++ )
	{
		data[ i ] = rand() % 100 - 50;
		printf( "%3d: %3d\t", i, data[ i ] );
	}
	printf( "\n" );

	// �T���l����͂���
	printf( "�T���l > " );
	scanf( "%d", &num );

	// �l��T��
	int	cnt = 0;


	// ���ʂ�\������
	if ( cnt <= 0 )
	{
		printf( "%d�͌�����܂���\n", num );
	}
	else
	{
		printf( "%d��%d������܂����B\n", num, cnt );
	}

	return 0;
}
