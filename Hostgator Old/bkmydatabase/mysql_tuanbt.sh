#!/bin/bash
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcafe_coirieng | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcafe_coirieng_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcafe_mientay | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcafe_mientay_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcafe_mua | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcafe_mua_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcafe_themxua | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcafe_themxua_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcuahang_anhnguyet | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcuahang_anhnguyet_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcuahang_haiau | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcuahang_haiau_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcuahang_minhtai | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcuahang_minhtai_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
mysqldump --opt -hlocalhost -utuanbt_admindb -padmin368189 tuanbt_qlcuahang_yoyoshop | zip > /home2/tuanbt/bkmydatabase/tuanbt_qlcuahang_yoyoshop_$(date +"%d-%m-%Y_%I-%M-%S").sql.zip
echo "Da backup thanh cong all db tuanbt !"