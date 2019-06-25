/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire. 
 */
var tailleString = function (texte) {
    return texte.length;
}
var remplaceECar = function (texte) {
    return "C " + texte.slice(2, texte.length);
}
var concatString = function (texte1, texte2) {
    return texte1 + texte2;
}
var afficherCar5 = function (texte) {
    return texte.slice(4, 5);
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
    return texte.slice(1, (texte.length - 1));
}
var IsString = function (texte) {
    if(typeof texte === 'string') {
        return true;
    }
}
var AfficherExtensionString = function (texte) {
    let regex =/(?:\.([^.]+))?$/;
    return regex.exec(texte)[1];
}
var NombreEspaceString = function (texte) {
    return texte.split(" ").length-1;
}
var InverseString = function (texte) {
    let newString = "";
    for (let i = texte.length-1; i >= 0; i--) {
        newString += texte[i];
    }
    return newString;
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
    let ar = [];
    array.forEach(nb => {
        ar.push(Math.abs(nb));
    });
    return ar;
}
var sufaceCercle = function (rayon) {
    return Math.round(Math.PI * Math.pow(rayon, 2));
}
var hypothenuse = function (ab, ac) {
    return Math.sqrt(Math.pow(ab, 2) + Math.pow(ac, 2));
}
var calculIMC = function (poids, taille) {
    let result = (poids / (taille * taille)).toFixed(2);
    return parseFloat(result);
}