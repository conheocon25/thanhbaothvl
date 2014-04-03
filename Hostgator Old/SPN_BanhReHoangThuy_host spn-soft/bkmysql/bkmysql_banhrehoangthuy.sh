#!/bin/bash

/usr/bin/mysqldump --opt -hlocalhost -ubanhreht_userdb -padmin068198 banhreht_db | gzip > ~/public_html/bkmysql/Mysql_BanhReHoangThuy_$(date +"%d-%m-%Y_%I-%M-%S").sql.gz


echo "backup thanh cong"
