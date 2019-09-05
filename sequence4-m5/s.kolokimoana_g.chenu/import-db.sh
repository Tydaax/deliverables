export PATH=/bin:/usr/bin:/usr/local/bin

MYSQL_HOST='localhost'
MYSQL_PORT='3306'
MYSQL_USER='root'
DATABASE_NAME='mydb'

echo "Import started for database - ${DATABASE_NAME}" 

mysql -u root -p$1 < script.sql

mysql -u root -p$1 << EOF
USE mydb
LOAD DATA LOCAL INFILE 'books.csv' INTO TABLE livres FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (titre,auteur,genre,nombre_page,editeur);
EOF

if [ $? -eq 0 ]; then
  echo "Import database ${DATABASE_NAME} successfully completed"
else
  echo "Error found during import"
  exit 1
fi
