#!/bin/bash

#ask for the csv file directory you want to import in the table D_Books
read -p "Enter csv directory and file: " csvfile

#executes the import query
mysql -u root -p Library -e 'LOAD DATA LOCAL INFILE "'$csvfile'" INTO TABLE D_Books FIELDS TERMINATED BY "," ENCLOSED BY "''''" LINES TERMINATED BY '"'\n'"' IGNORE 1 ROWS (Li_Title, Cd_Author, Cd_Genre, Li_Height, Cd_Publisher);'


