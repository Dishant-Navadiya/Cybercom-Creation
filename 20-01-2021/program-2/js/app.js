//Creatinng a new array of objects.
const data = [
  {
    Name: "Dishant",
    Age: 22,
    Email: "dishant@gmail.com",
    TelephoneNumber: 9797979797,
  },
  {
    Name: "Keval",
    Age: 23,
    Email: "keval@gmail.com",
    TelephoneNumber: 9696969696,
  },
  {
    Name: "Dharmik",
    Age: 21,
    Email: "dharmik@gmail.com",
    TelephoneNumber: 9595959595,
  },
  {
    Name: "Ayush",
    Age: 20,
    Email: "ayush@gmail.com",
    TelephoneNumber: 9494949494,
  },
  {
    Name: "Bhautik",
    Age: 25,
    Email: "bhautik@gmail.com",
    TelephoneNumber: 9393939393,
  },
];

// Every time web page load this localStorage overloads this data.
localStorage.setItem("myData", JSON.stringify(data));

//This is function for displaying the data into a webpage.
function display() {
  //this is for getting reference of form controls.
  const tableBody = document.getElementById("result");

  // We are coverting string data into Json object. so that we can use methods and properties.
  const getData = JSON.parse(localStorage.getItem("myData"));

  let output = "";
  // We use forEach loop for iterating of array. we do not have to use condition.
  getData.forEach(function (ele) {
    output += `<tr>
        <td>${ele.Name}</td>
        <td>${ele.Age}</td>
        <td>${ele.Email}</td>
        <td>${ele.TelephoneNumber}</td>
      </tr>`;
  });
  // Finally we use innerHtml property for putting our string into the tableBody object. Which is a reference of tbody tag.

  tableBody.innerHTML = output;
}
// This function id called when webpage loads or refresh.
display();
