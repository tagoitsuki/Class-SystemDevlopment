#! /bin/sh

if [ "$#" -ne 1 ]; then
  echo "引数は1つです。"
  exit 1
fi

fps=`echo $(basename ${1})`
fnm=`echo ${fps%%.*}`

gcc ${fps} -o ${fnm} 2> debug.txt

if [ -s ./debug.txt ]; then
  cat ./debug.txt
else
  ./${fnm}
fi

#←シェルにおけるコメント
# $#：引数の数  $1：引数の一つ目 2,3,...{10},{11}...
# ${…}：文字と識別されないために変数名の範囲を明示
# -s：文字の数を調べる  -ne：!=の意。比較演算子が特殊
# basename：パスからディレクトリを除いてファイル名を取得するコマンド
# ${変数%%.*}：拡張子の削除を行う(パラメータ展開)
# `echo ~~`  ``：コマンドを評価。今回はechoで表示される文字列を格納
# gcc ... 2> 2：標準エラー出力  >：ファイルに上書き(>>：下に追加)
