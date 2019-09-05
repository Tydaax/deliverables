#!/bin/bash
read -s -p "Enter your password:" pswd
mysql -u root -p$pswd -e "create database Library"
read -p "Backup directory and file:" bdir
mysql -u root -p$pswd Library < $bdir
