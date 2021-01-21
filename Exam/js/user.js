const outputTableRaws = document.getElementById("outputTableRaws");
const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const date = document.getElementById("date");
const heading = document.getElementById("heading");
const insertButton = document.getElementById("insertButton");
const updateButton = document.getElementById("updateButton");

updateButton.hidden = true;

let data = JSON.parse(localStorage.getItem("users"));
const todayDate = new Date().getFullYear();
let updateIndex = null;

const clearFormInput = () => {
  name.value = "";
  email.value = "";
  password.value = "";
  data.value = "";
};

const toggle = (index) => {
  updateIndex = index;
  name.value = data[index].name;
  email.value = data[index].email;
  password.value = data[index].password;
  date.value = data[index].birthdayDate;

  insertButton.hidden = true;
  updateButton.hidden = false;
};

const updateUser = () => {
  data[updateIndex].name = name.value;
  data[updateIndex].email = email.value;
  data[updateIndex].password = password.value;
  data[updateIndex].birthdayDate = date.value;
  data[updateIndex].age = todayDate - new Date(date.value).getFullYear();
  updateIndex = null;
  localStorage.setItem("users", JSON.stringify(data));
  displayingRawintoTable();
};

const deleteUser = (index) => {
  data.splice(index, 1);
  localStorage.setItem("users", JSON.stringify(data));
  displayingRawintoTable();
};

const insertUser = () => {
  let userInfo = {
    name: name.value,
    email: email.value,
    password: password.value,
    birthdayDate: date.value,
    age: todayDate - new Date(date.value).getFullYear(),
  };

  data.push(userInfo);
  localStorage.setItem("users", JSON.stringify(data));
  clearFormInput();
  displayingRawintoTable();
};

const displayingRawintoTable = () => {
  var temp = "";
  data.forEach((user, index) => {
    temp += `
        <tr>
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.password}</td>
        <td>${user.birthdayDate}</td>
        <td>${user.age}</td>
        <td ><button type="button" class="btn btn-light btn-sm" onclick="toggle(${index});">Update</button></td>
        <td ><button type="button" class="btn btn-light btn-sm" onclick="deleteUser('${index}');">Delete</button></td>
      </tr>
        `;
  });

  outputTableRaws.innerHTML = temp;
};
displayingRawintoTable();
