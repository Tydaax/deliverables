#! /bin/sh

# ----- VARIABLES DE COULEURS / COLOR VARIABLES -----

# Reset
Color_Off='\033[0m'       # Text Reset

# Bold High Intensity
BIBlack='\033[1;90m'      # Black
BIRed='\033[1;91m'        # Red 
BIGreen='\033[1;92m'      # Green
BIYellow='\033[1;93m'     # Yellow
BIBlue='\033[1;94m'       # Blue
BIPurple='\033[1;95m'     # Purple
BICyan='\033[1;96m'       # Cyan
BIWhite='\033[1;97m'      # White


# ARRET DU SCRIPT EN CAS D'ERREUR / STOPS SCRIPT IF THERE IS AN ERROR

set -e


# MOT DE PASSE / PASSWORD

read -p "Entrez votre mot de passe: " pswd


# CREATION DE LA BASE DE DONNEES / DATABASE INITIALIZATION

echo "${BIBlue}Création de la base de données en cours ...${BIBlack}"

mysql -u root -p$pswd sys < /home/marion/Documents/script-creation.sql

echo "${BIGreen}La base de donnée a été créée !${BIBlack}"

echo "${BIBlue}Importation des données dans la table ...${BIBlack}"

mysqlimport --ignore-lines=1 --ignore --lines-terminated-by='\n' --fields-terminated-by=',' --fields-enclosed-by='"' --verbose --local -u root -p$pswd library /home/marion/Documents/Livres.csv

echo "${BIGreen}Les données ont été importées !${BIBlack}"

echo "${BIBlue}Veuillez entrer votre mot de passe pour effectuer une sauvegarde :${BIBlack}"

mysqldump --databases --user=root --password=$pswd library > export_db_library.sql

echo "${BIGreen}Le fichier a été exporté !${BIBlack}"

echo "${BIYellow}Fin de l'exécution du script${BIBlack}"
