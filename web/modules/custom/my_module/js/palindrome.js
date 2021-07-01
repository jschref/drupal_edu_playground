function palindromeTester(str) {
  let counter = 0;
  let stripped = str // cut the extra characters out of the string
    .toLowerCase()
    .replace(/[^\w\d]|_/g, "");
  event.preventDefault();

  for (let i = 0; i < stripped.length / 2; i++) { //cycle through the string
    if (stripped[i] === stripped[stripped.length - 1 - i]) { //check match between first and last, if yes add to counter. 
      counter++;
      // console.log(stripped[i], stripped[stripped.length - 1 - i], counter);
      if (counter >= stripped.length / 2) { //if the matches equal half the string length, it is a palindrome. 
        return document.getElementById("palindromeOutput").innerHTML = "It is a palindrome!";
      }
    }
  }
  return document.getElementById("palindromeOutput").innerHTML = "Not a palindrome.";

};




