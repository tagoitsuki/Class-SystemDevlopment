#! /bin/sh
#mv hey.txt hey.c

for nm in *.txt;
do
  mv $nm ${nm%.txt}.c;
done
