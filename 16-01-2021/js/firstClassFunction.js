//we are creating function and this function will
//return a new function which we are storing in a another variable

function parent() {
  return function () {
    console.log("This is chiled function.");
  };
}
//we calling the function which return a new function with his scop

//so we can access all variable.
const test = parent();
test();
