const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const city = document.getElementById("city");
const state = document.getElementById("state");
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");
let data = [];

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
  data.push(adminCredentials);
  localStorage.setItem("users", JSON.stringify(data));
  return true;
};

const checkLogin = () => {
  const email = loginEmail.value;
  const password = loginPassword.value;

  if (localStorage.getItem("users")) {
    data = JSON.parse(localStorage.getItem("users"));
    let currentUser = data.find(
      (item) => item.email === email && item.password === password
    );
    if (currentUser && currentUser.email == "dishant@gmail.com") {
      sessionStorage.setItem("activeUser", JSON.stringify(currentUser));
      window.location.href = "./dashboard.html";
    } else if (currentUser) {
      sessionStorage.setItem("activeUser", JSON.stringify(currentUser));
      window.location.href = "./sub-user.html";
    } else {
      alert("user does not exists");
    }
  } else {
    alert("user does not exists");
  }
};
