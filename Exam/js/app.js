const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const city = document.getElementById("city");
const state = document.getElementById("state");
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");
const adminData = [];
const userData = [];

const registerAdmin = () => {
  if (password.value !== confirmPassword.value) {
    alert("Password missmatch");
    return false;
  }

  var adminCredentials = {
    name: name.value,
    email: email.value,
    password: password.value,
    confirmPassword: confirmPassword.value,
    city: city.value,
    state: state.value,
  };
  adminData.push(adminCredentials);
  localStorage.setItem("admin", JSON.stringify(adminData));
  return true;
};

const checkLogin = () => {
  const email = loginEmail.value;
  const password = loginPassword.value;

  if (localStorage.getItem("users")) {
    userData = localStorage.getItem("users");
    let currentUser = userData.find(
      (item) => item.email === email && item.password === password
    );
    if (currentUser) {
      sessionStorage.setItem("activeUser", JSON.stringify(currentUser));
      return true;
    } else {
      alert("user doese not exists");
      return false;
    }
  } else {
    alert("user does not exists");
    return false;
  }
};
