//Immediately invoked function
(function () {
  //getting the file input element using query selector
  const file = document.querySelector("#pdf");

  //add the change event listener for the file input control.
  file.addEventListener("change", (e) => {
    //we can get all information from event object
    //get the type form event
    const type = e.target.files[0].type;
    // we check the type of file whether the file is pdf or not.
    if (type !== "application/pdf") {
      alert("Please select pdf file.");
      //we reinitialize to empty so user can select file again.
      file.value = "";
    }
  });
})();
