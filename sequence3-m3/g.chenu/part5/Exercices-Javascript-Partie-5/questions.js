var languagesArrayCreation = function () {

  return ["Html","CSS","Java","PHP"];
}

var numbersArrayCreation = function () {

    return [0,1,2,3,4,5];
}

var ElementReplacement = function (languages) {
  languages[2] = 'Javascript'
  return languages;
}

var AddElementToLanguagesArray = function (languages) {
  languages.push('Ruby');
  languages.push('Python');
  return languages;
}

var AddElementToNumbersArray = function (numbers) {
  numbers.unshift(-2, -1)
  return numbers;
}

var deleteArrayFirstElement = function (languages) {
  languages.shift()
  return languages;
}

var deleteArrayLastElement = function (languages) {
  languages.pop()
  return languages;
}

var stringToArray = function (socialMediaInString) {

  return socialMediaInString.split(',');
}

var arrayToString = function (languages) {

  return languages.join(',');
}

var arraySort = function (socialMedia) {

  return socialMedia.sort();
}

var arrayInvert = function (languages){


  return languages.reverse();
}
