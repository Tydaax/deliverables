#!/bin/bash

#ask for the directory and file where you want to write the backup
read -p "Enter backup directory and file:" bdir

#mysql command for writing the backup of tables and content in the file
mysqldump -u root -p Library > $bdir;