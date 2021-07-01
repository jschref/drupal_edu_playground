function convertToRoman(num) {
  event.preventDefault();
  if (num <= 3999 && /^\d+$/.test(num)) {

    let inputArr = num //split your input into a an array for easy processing
      .toString()
      .split(""); //establish your possible outputs and variable

    let ones = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];
    let tens = ["X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];
    let hundreds = ["C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"];
    let thousands = ["M", "MM", "MMM"];
    let outputArr = [];

    //cycle through and build your roman numeral
    for (let i = inputArr.length; i > 0; i--) {
      switch (i) {
        case 4:
          outputArr.push(thousands[inputArr[inputArr.length - i] - 1]);
          break;
        case 3:
          outputArr.push(hundreds[inputArr[inputArr.length - i] - 1]);
          break;
        case 2:
          outputArr.push(tens[inputArr[inputArr.length - i] - 1]);
          break;
        case 1:
          outputArr.push(ones[inputArr[inputArr.length - i] - 1]);
          break;
        default:
          console.log("mistakes were made");
          return document.getElementById("romanOutput").innerHTML = "mistakes were made"
          break;
      }
    } //glue it together into the syntax which made rome famous for its mathematicians 
    return document.getElementById("romanOutput").innerHTML = outputArr.join("")
  } else {
    return document.getElementById("romanOutput").innerHTML = "Please enter a positive integer less than 4,000."
  }
}


