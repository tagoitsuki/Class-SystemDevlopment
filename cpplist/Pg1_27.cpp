/*/////////////////////////////////////////////////////////////////////////////////////
�ۑ�27.	switch����enum�^
	�����ɂ��肢������v���O�������쐬���Ȃ����B
	�񋓌^ FORTUNE ���g����switch���ō쐬���邱�ƁB

	���O����͂��A�����R�[�h�̍��v�ƌ��ݎ����ŗ���������������
	���������߂�5�Ŋ������]������߁Aswitch���Ő肢���ʂ�\������
	�肢���ʂ́A��g�A���g�A���g�A���A�勥��5��

�L�[���[�h�Fswitch,case, defautl, enum
�ŏI�X�V���F2016.03.28
*/
#define _CRT_SECURE_NO_WARNINGS  // �]�v�Ȍx�����o�Ȃ��悤�ɂ���
#include	<stdio.h>
#include	<stdlib.h>
#include	<time.h>

// �񋓌^�̒�`
enum FORTUNE { DAIKITI, TYUUKITI, SUEKITI, KYOU, DAIKYOU };
const int	FORTUNE_NO = 5;

int	main( void )
{
	char	name[ 100 ];
	int		next = 1;
	while ( next == 1 )
	{
		printf( "\n���Ȃ��̖��O����͂��Ă��������i�ԂɃX�y�[�X�����Ȃ����Ɓj > " );
		scanf( "%s", name );
		
		// ���O�̕����R�[�h�����v����
		int	fortune = 0;
		for ( int i = 0; name[ i ] != '\0'; i ++ )
		{
			fortune += name[ i ];
		}
		// ����������������
		srand( fortune + (unsigned int)time( NULL ) );
		int	no = rand() % FORTUNE_NO;
		printf( "���Ȃ��̍����̉^����" );

		//// switch ���Ő肢���ʂ�\������icase�ł� enum FORTUNE�̃V���{�����g�����Ɓj


		printf( "\n�����܂����H(1:������)" );
		scanf( "%d", &next );
	}
	return 0;
}
