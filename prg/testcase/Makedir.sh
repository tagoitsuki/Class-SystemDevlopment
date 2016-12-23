#! /bin/sh

if [ "$#" -ne 3 ]; then
  echo "引数は3つです。"
  exit 1
fi
# ${2} 学番 ${3} 課題番想定
dir=`echo /home/tto/complete_box/${2}/${3}`;
if [ ! -e ${dir} ]; then
  mkdir -p ${dir}
fi
