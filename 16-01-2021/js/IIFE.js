(function () {
  console.log("Immediately invoked function");
})();

//Also we can pass parameter to this function

(function (number) {
  return number;
})(10);
