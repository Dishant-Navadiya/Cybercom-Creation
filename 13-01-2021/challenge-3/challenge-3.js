// we can get a object from all the dom elements. later on we can use it for operation.
const button = document.querySelector("#enter");
const input = document.querySelector("#amount");
const output = document.querySelector("#output");

//defining function for calculating the tip based on the bill amount.
const tipCalculater = (billAmount) => {
  if (billAmount < 50) {
    return (billAmount * 20) / 100;
  } else if (billAmount >= 50 && billAmount <= 200) {
    return (billAmount * 15) / 100;
  } else if (billAmount > 200) {
    return (billAmount * 10) / 100;
  }
};

//when the use clicks the button this even should be run. and we can calculate the tip and output the result into html.

button.addEventListener("click", () => {
  // we cam convert int from string so that we can perform numeric operation.
  // we took the type text so by default it gives the string value.
  const amount = parseInt(input.value);
  // calling the function for result
  const result = tipCalculater(amount);
  //   finally we are printing the result to the dom element.
  output.innerHTML = `Tip is = ${result} and Total amount is ${
    amount + result
  }`;
});
