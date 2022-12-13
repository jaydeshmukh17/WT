var array = new Array();
var output = new Array();

function onClick() {
  var element1 = document.getElementById("first").value;
  array.push(element1);

  var element2 = document.getElementById("second").value;
  array.push(element2);

  var element3 = document.getElementById("third").value;
  array.push(element3);

  var element4 = document.getElementById("fourth").value;
  array.push(element4);

  var element5 = document.getElementById("fifth").value;
  array.push(element5);

  for (index = 0; index < array.length; index++) {
    console.log(array[index]);
  }

  for (let i = array.length - 1; i >= 0; i--) {
    console.log(array[i]);
    output.push(array[i]);
  }

  alert("Reversed Array is : \n" + output);
}

function bubbleSort() {

  var numberArray = [];

  var element1 = document.getElementById("first").value;
  array.push(element1);

  var element2 = document.getElementById("second").value;
  array.push(element2);

  var element3 = document.getElementById("third").value;
  array.push(element3);

  var element4 = document.getElementById("fourth").value;
  array.push(element4);

  var element5 = document.getElementById("fifth").value;
  array.push(element5);

  console.log(array);

  var numberArray = array.map(Number);
  console.log(numberArray);

  for (var i = 0; i < numberArray.length; i++) {
    for (var j = 0; j < numberArray.length - i - 1; j++) {
      if (numberArray[j] > numberArray[j + 1]) {
        var temp = numberArray[j];
        numberArray[j] = numberArray[j + 1];
        numberArray[j + 1] = temp;
      }
    }
  }

  console.log(numberArray);

  alert("Sorted Array is : \n" + numberArray);
}

function linearSearch() {

  var key = document.getElementById("key").value;
  var flag = false;

  var element1 = document.getElementById("first").value;
  array.push(element1);

  var element2 = document.getElementById("second").value;
  array.push(element2);

  var element3 = document.getElementById("third").value;
  array.push(element3);

  var element4 = document.getElementById("fourth").value;
  array.push(element4);

  var element5 = document.getElementById("fifth").value;
  array.push(element5);

  for (var i = 0; i < array.length; i++) {

    if (array[i] === key) {
      alert("Key is present in array !!");
      flag = true;
    }
    
  }

  if (flag == false) {
    alert("Key is not present in array !!");
  }

}
