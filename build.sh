#!/bin/bash

FILE_DIR=$(pwd)/data/xonotic/
XONOTIC_USERDIR=~/.xonotic-new
XONOTIC_DATADIR=${XONOTIC_USERDIR}/data

echo 'defer 4 "log_file \"cmd.txt\"; cmdlist"
defer 4 "log_file \"cvar.txt\"; cvarlist"
defer 4 "log_file \"alias.txt\"; alias"  
defer 4 "log_file \"\"; quit"' > ~/.xonotic-new/cacs.cfg

xonotic() {
    cd ~/xonotic/xonotic/
    ./all run sdl $@
}

rm -rf ${XONOTIC_DATADIR}/*.txt
xonotic -userdir ${XONOTIC_USERDIR} +exec cacs.cfg
cp -R ${XONOTIC_DATADIR}/*.txt ${FILE_DIR}
awk 'NR>2' ${FILE_DIR}alias.txt |head -n -2 > ${FILE_DIR}aliaslist.txt
awk 'NR>1' ${FILE_DIR}cmd.txt |head -n -4 > ${FILE_DIR}cmdlist.txt
awk 'NR>1' ${FILE_DIR}cvar.txt |head -n -3 > ${FILE_DIR}cvarlist.txt
rm -rf ${XONOTIC_DATADIR}/*.txt
