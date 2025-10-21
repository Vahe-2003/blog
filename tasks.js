function roundToTwo(num) {
  return Number(num.toFixed(2));
}

function isNumber(value) {
  return typeof value === 'number' && !isNaN(value);
}

function numberLength(num) {
  return num.toString().length;
}

function getIntegerPart(num) {
  return Math.floor(num);
}

function toUpperCase(str) {
  return str.toUpperCase();
}

function containsWord(str, word) {
  return str.includes(word);
}

function replaceSpaces(str) {
  return str.replaceAll(' ', '_');
}

function firstAndLastThree(str) {
  return str.slice(0, 3) + str.slice(-3);
}

function trimString(str) {
  return str.trim();
}

function stringLength(str) {
  return str.length;
}

function addElement(arr, elem) {
  arr.push(elem);
  return arr;
}

function removeLastElement(arr) {
  arr.pop();
  return arr;
}

function firstGreaterThanTenIndex(arr) {
  return arr.findIndex(num => num > 10);
}

function filterEvenNumbers(arr) {
  return arr.filter(num => num % 2 === 0);
}

function multiplyByTwo(arr) {
  return arr.map(num => num * 2);
}

function sumArray(arr) {
  return arr.reduce((sum, num) => sum + num, 0);
}

function containsElement(arr, elem) {
  return arr.includes(elem);
}

function mergeArrays(arr1, arr2) {
  return arr1.concat(arr2);
}

function sliceArray(arr) {
  return arr.slice(1, 4);
}

function sortAscending(arr) {
  return arr.sort((a, b) => a - b);
}

function getObjectKeys(obj) {
  return Object.keys(obj);
}

function getObjectValues(obj) {
  return Object.values(obj);
}

function hasKey(obj, key) {
  return obj.hasOwnProperty(key);
}

function mergeObjects(obj1, obj2) {
  return Object.assign({}, obj1, obj2);
}

function getEntries(obj) {
  return Object.entries(obj);
}
