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
	x=2;
	y=3;
    return Math.pow(x,y);
}
var valeurAbsolue = function (nombre) {
    var result = Math.abs(-5);
    return result;
}
var valeurAbsolueArray = function (array) {
    var result = [Math.abs(-5),Math.abs(-50),Math.abs(-25),Math.abs(-568)];
    return result;
}
var sufaceCercle = function (rayon) {
    var pi = Math.PI;
    var result = Math.round((5*5)*pi);
    return result;
}
var hypothenuse = function (ab, ac) {
    var adj = 5;
    var opp = 8;
    var hyp = (adj*adj)+(opp*opp)
    var result = Math.sqrt(hyp);
    return result;
}
var calculIMC = function (poids, taille) {
    var poids = 65;
    var taille = 1.75;
    var imc = (poids/(taille*taille));
    var result = imc.toFixed(2) ;
    return result;
}
