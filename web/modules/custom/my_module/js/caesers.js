//One of the simplest and most widely known ciphers is a Caesar cipher, also known as a shift cipher. In a shift cipher the characters are shifted up/down the alphabet by a set amount. This is a simple function and UI to accomplish that. You may enter a word or phrase as well as your key, the shift your characters will undergo. Your output will appear at the bottom. To decrypt, simply enter the encoded phrase, your key, and click decrypt. Because the shift is assymetric for all values aside from 0, 26, and 13, the encrypt and decrypt actions must necessarily be different. More info is, of course, available on wikipedia:
//wikipedia.org/wiki/Caesar_cipher 


function shiftCipher(str, shft) {
  event.preventDefault();
  let alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ";
  let output = [];
  let string = str.toUpperCase()
  if (document.getElementById("caesersShift").value > 26 || !/^\d+$/.test(document.getElementById("caesersShift").value)) { //make sure your shift input is valid
    return document.getElementById("caesersOutput").innerHTML = "your key must be an integer between 0 and 26"
  }
  let shift = Number(shft) + 26; //easy change shift
  for (let i = 0; i < string.length; i++) {
    if (/[A-Z]/.test(string[i])) {
      output.push(alphabet.charAt(alphabet.indexOf(string[i]) + shift));
    } else {
      output.push(string[i]);
    }
  }

  return document.getElementById("caesersOutput").innerHTML = output.join("");
}

  //cycle through the string, pushing everything to a new array, and replacing only the letters. "Alphabet" serves as your key. Shift starts at index point 26 for decrypting cyphers. 