export PATH=/bin:/usr/bin:/usr/local/bin

DB_BACKUP_PATH='/backup/dbbackup'
MYSQL_HOST='localhost'
MYSQL_PORT='3306'
MYSQL_USER='root'
DATABASE_NAME=$2
 
echo "Restoration started for database - ${DATABASE_NAME}"
 
gunzip ${DB_BACKUP_PATH}/mydb-$3.sql.gz
mysql -u ${MYSQL_USER} -p$1 ${DATABASE_NAME} < ${DB_BACKUP_PATH}/mydb-$3.sql
 
if [ $? -eq 0 ]; then
  echo "Restoration backup successfully completed"
else
  echo "Error found during restoration"
  exit 1
fi

