#!/bin/bash

#expect -c "
#set timeout 5
#spawn su - tto
#expect \"パスワード: \"
#send \"kambayashi\n\"
#expect \"\[Oh My Zsh\] Would you like to check for updates? \[Y/n\]: \"
#send \"n\n\"
#expect \"? ~\"
#exit 0;
#"

compiler=gcc

#usage="usage: $0 [FILE] [ARGUMENTS]"
usage="usage: ${0} [FILE] [USERID] [KADAINO]"
if [ $# = 2 ]; then
  echo "${usage}" >&2
  exit
fi

# 実行ファイルの出力先ディレクトリ
out_dir=/home/tto/public_html/kadai/complete_box/${2}/${3}

install -m 0777 ${out_dir}/${1} ${out_dir}/${3}.cpp

# 第一引数をソースファイルとする
source_file=${3}.cpp
userid=${2}
kadai_no=${3}
shift

# ファイルの存在チェック
if [ ! -e ${out_dir}/${source_file} ]; then
  echo "file does not exist." >&2
  exit 1
fi

# 拡張子をもとにコンパイラを設定
extension=${source_file##*.}

if [ ${extension} = "cpp" ]; then
  compiler=g++
fi

# 前回コンパイル時よりソースファイルが更新されていなければコンパイルしない
if [ -e ${out_dir}/${kadai_no} ] && [ ${out_dir} -nt ${source_file} ]; then
  echo "${out_dir}/${kadai_no} is up to date." >&2
else

  # コンパイル
  echo "${compiler} ${out_dir}/${source_file} -o ${out_dir}/${kadai_no}" >&2
  ${compiler} "${out_dir}/${source_file}" -o "${out_dir}/${kadai_no}"
  # コンパイルエラー時は終了
  if [ ${?} != 0 ]; then
    echo "failed to compile." >&2
    exit 1
  fi
fi

# 実行
echo "${out_dir} ${*}" >&2
${out_dir}/${kadai_no}
echo "exit status: ${?}" >&2

#結果
#g++ /home/tto/public_html/kadai/complete_box/1155148/8/8.cpp -o /home/tto/public_html/kadai/complete_box/1155148/8/8 /home/tto/public_html/kadai/complete_box/1155148/8 1155148 8 合計は 55 です exit status: 0