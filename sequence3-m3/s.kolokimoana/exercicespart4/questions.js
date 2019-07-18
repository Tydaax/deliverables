/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire. 
 */
var tailleString = function (texte) {
    return texte.length;
}
var remplaceECar = function (texte) {
    return texte.replace(/e/,' ');
}
var concatString = function (texte1, texte2) {
    return texte1+texte2 ;
}
var afficherCar5 = function (texte) {
    return texte.charAt(4);
}
var afficher9Car = function (texte) {
    return texte.substring(0,9); 
}
var majusculeString = function (texte) {
    return texte.toUpperCase(); // mettre en majuscules
}
var minusculeString = function (texte) {
    return texte.toLowerCase(); //mettre en minuscule
}
var SupprEspaceString = function (texte) {
    return texte.trim(); //supprimer les espaces
}
var IsString = function (texte) {
    return typeof texte == 'string'; 
}
var AfficherExtensionString = function (texte) {
    return /[^.]+$/.exec(texte) [0]; //regex 
}
var NombreEspaceString = function (texte) {
    return texte.match(/([\s]+)/g).length //nombre d'espaces
}
var InverseString = function (texte) {
    return  texte.split("").reverse().join("");
}

/**
 * Exercices sur les nombres et les caluls mathématiques
 */
var calculPuissance = function (x, y) {
    return Math.pow(x, y);
}
var valeurAbsolue = function (nombre) {
    return Math.abs(nombre);
}
var valeurAbsolueArray = function (array) {
    return 'A completer';
}
var sufaceCercle = function (rayon) {
    return Math.round(PI*rayon);
}
var hypothenuse = function (ab, ac) {
    return Math.hypot(ab, ac);
}
var calculIMC = function (poids, taille) {
    return 'A completer';
}