/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire. 
 */

var tailleString = function (texte) {
    return texte.length;
}
var remplaceECar = function (texte) {
    return texte.replace('e', ' ');
}
var concatString = function (texte1, texte2) {
    return texte1+texte2;
}
var afficherCar5 = function (texte) {
    return texte.charAt(4);
}
var afficher9Car = function (texte) {
    return texte.slice(0, 9);
}
var majusculeString = function (texte) {
    return texte.toUpperCase();
}
var minusculeString = function (texte) {
    return texte.toLowerCase();
}
var SupprEspaceString = function (texte) {
    return texte.trim();
}
var IsString = function (texte) {
    if(typeof texte === 'string') {
        return true;
    } else {
        return false;
    }
}
var AfficherExtensionString = function (texte) {
    return texte.match(/\.([0-9a-z]+)/i)[1];
}
var NombreEspaceString = function (texte) {
    var sum = 0;
    for(var i = 0; i <= texte.length-1; i++) {
        if(texte[i] === ' ') {
            sum = sum + 1;
        }
    }

    return sum;
}
var InverseString = function (texte) {

    var sentence = '';

    for(var i = texte.length-1; i >= 0 ; i--) {
        sentence = sentence + texte[i];
    }

    return sentence;
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
    var arr = array.map( x => Math.abs(x));
    return arr;
}
var sufaceCercle = function (rayon) {
    return Math.round(Math.PI*Math.pow(rayon, 2));
}
var hypothenuse = function (ab, ac) {
    return Math.sqrt((Math.pow(ab, 2)+Math.pow(ac, 2)));
}
var calculIMC = function (poids, taille) {
    var imc = poids/(Math.pow(taille, 2));
    return Math.round(imc*100)/100;
}