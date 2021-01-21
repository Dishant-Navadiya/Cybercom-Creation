const outputTableRaws = document.getElementById("outputTableRaws");
const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const date = document.getElementById("date");
const heading = document.getElementById("heading");
const button = document.getElementById("button");

let data = JSON.parse(localStorage.getItem("users"));
const todayDate = new Date().getFullYear();

const clearFormInput = () => {
  name.value = "";
  email.value = "";
  password.value = "";
  data.value = "";
};

const updateUser = (email) => {
  heading.innerHTML = "Update User";
  button.innerText = "Update";

  // data.forEach((user)=>{
  //     if(user.email === email){

  //     }
  // })
};

const deleteUser = (email) => {
  var newData = data.filter((user) => user.email !== email);
  data = newData;
  localStorage.setItem("users", JSON.stringify(data));
  displayingRawintoTable();
};

const insertUser = () => {
  //   console.log(date.value);
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
  data.forEach((user) => {
    temp += `
        <tr>
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.password}</td>
        <td>${user.birthdayDate}</td>
        <td>${user.age}</td>
        <td ><button type="button" class="btn btn-light btn-sm" onclick="updateUser('${user.email}');">Update</button></td>
        <td ><button type="button" class="btn btn-light btn-sm" onclick="deleteUser('${user.email}');">Delete</button></td>
      </tr>
        `;
  });

  outputTableRaws.innerHTML = temp;
};
displayingRawintoTable();
