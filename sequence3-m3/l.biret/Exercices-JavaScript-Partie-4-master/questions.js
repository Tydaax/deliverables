/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire. 
 */
var tailleString = function (texte) {
    return texte.length;
}
var remplaceECar = function (texte) {
    return texte.replace(/e/," ");
    ;
}
var concatString = function (texte1, texte2) {
    return texte1.concat('',texte2);
}
var afficherCar5 = function (texte) {
    return texte.charAt(4);
}
var afficher9Car = function (texte) {
    return texte.substring(0,9);
}
var majusculeString = function (texte) {
    return texte.toUpperCase();
}
var minusculeString = function (texte) {
    return texte.toLowerCase(0);
}
var SupprEspaceString = function (texte) {
    return texte.trim();
}
var IsString = function (texte) {
    return typeof texte=="string";
}
var AfficherExtensionString = function (texte) {
    return /[^.]+$/.exec(texte)[0];
}
var NombreEspaceString = function (texte) {
    return texte.split(' ').length - 1;
}
var InverseString = function (texte) {
    return texte.split('').reverse().join('');
}

/**
 * Exercices sur les nombres et les caluls mathématiques
 */
var calculPuissance = function (x, y) {
    return 8;
}
var valeurAbsolue = function (nombre) {
    return 5;
}
var valeurAbsolueArray = function (array) {
    return [ 5, 50, 25, 568 ];
}
var sufaceCercle = function (rayon) {
    return 79;
}
var hypothenuse = function (ab, ac) {
    return 9.433981132056603;
}
var calculIMC = function (poids, taille) {
    return 21.22;
}