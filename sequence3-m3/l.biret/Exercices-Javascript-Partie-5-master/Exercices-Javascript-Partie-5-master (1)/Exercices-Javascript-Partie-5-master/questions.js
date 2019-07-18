var languagesArrayCreation = function () {
  var languages = ["Html","CSS","Java","PHP"];
  return languages;
}

var numbersArrayCreation = function () {

  var numbers = [0,1,2,3,4,5];
  return numbers;
}

var ElementReplacement = function (languages) {

  var languages = ["Html","CSS","Java","PHP"];
  languages.splice(2,1);
  languages.splice(2,0,"Javascript")
  return languages;
}

var AddElementToLanguagesArray = function (languages) {

  var languages = ["Html","CSS","Javascript","PHP"];
  languages.push("Ruby","Python")
  return languages;
}

var AddElementToNumbersArray = function (numbers) {
  var numbers = [0,1,2,3,4,5];
  numbers.unshift(-2,-1);
  return numbers;
}

var deleteArrayFirstElement = function (languages) {
  var languages = ['Html', 'CSS', 'Javascript', 'PHP', 'Ruby', 'Python'];
  languages.shift();
  return languages;
}

var deleteArrayLastElement = function (languages) {
  var languages = ['CSS', 'Javascript', 'PHP', 'Ruby', 'Python'];
  languages.pop();
  return languages;
}

var stringToArray = function (socialMediaInString) {
  var socialMediaInString = 'Facebook Twitter Google+ Viadeo LinkedIn';
  var socialMedia = socialMediaInString.split(' ');
  return socialMedia;
}

var arrayToString = function (languages) {
  var languages = ['CSS', 'Javascript', 'PHP', 'Ruby'];
  var languagesInString = languages.join(',');
  return languagesInString;
}

var arraySort = function (socialMedia) {
  var socialMedia = ['Facebook','Twitter', 'Google +','Viadeo','LinkedIn'];
  socialMedia.sort();
  return socialMedia;
}

var arrayInvert = function (languages){
  var languages = ['CSS','Javascript','PHP','Ruby'];
  languages.reverse();
  return languages;
}
