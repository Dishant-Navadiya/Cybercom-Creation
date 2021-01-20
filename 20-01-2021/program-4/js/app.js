//first we declaring global array
let data = [];

//this is for getting reference of form controls.
var inputName = document.getElementById("name");
var inputEmail = document.getElementById("email");
var inputDob = document.getElementById("dob");
var tableBody = document.getElementById("result");

// This function for printing the data into view.html page.
function printData() {
  // We are checking if data key exits in a locastorage if yes then we get the all value.
  if (localStorage.getItem("data")) {
    // We are coverting string data into Json object. so that we can use methods and properties.
    data = JSON.parse(localStorage.getItem("data"));

    // We took a variavble for storing the html string from an array one by one.
    var output = "";

    // We use forEach loop for iterating of array. we do not have to use condition.
    data.forEach(function (ele) {
      output += `<tr>
        <td>${ele.name}</td>
        <td>${ele.email}</td>
        <td>${ele.dob}</td>
      </tr>`;
    });
    // Finally we use innerHtml property for putting our string into the tableBody object. Which is a reference of tbody tag.
    tableBody.innerHTML = output;
  }
}

// This function called for printing the data into a table.
printData();

//getting input box values and return the object.
function gettingValues() {
  // We took the vlues form our DOM reference and returning a object.
  return {
    name: inputName.value,
    email: inputEmail.value,
    dob: inputDob.value,
  };
}

//clearing the form inputs
function clearForm() {
  // We are clearing a form inputes
  inputName.value = "";
  inputEmail.value = "";
  inputDob.value = "";
}

// This function is for insert data into localstorage.
function insertData() {
  // We are checking if data key is already stored in localStorage or not.
  if (localStorage.getItem("data")) {
    data = JSON.parse(localStorage.getItem("data"));

    var student = gettingValues();
    console.log(student);
    data.push(student);
    localStorage.setItem("data", JSON.stringify(data));
    // clearForm();
  } else {
    //   console.log(data);
    var student = gettingValues();
    console.log(student);
    data.push(student);
    localStorage.setItem("data", JSON.stringify(data));
    clearForm();
  }
}
