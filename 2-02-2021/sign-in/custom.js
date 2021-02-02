const email = document.getElementById("email");
const password = document.getElementById("password");
const errMsg = document.getElementById("err-msg");

const errMsgFunction = (msg) => {
  errMsg.classList.add("alert");
  errMsg.innerText = msg;
};

const validation = () => {
  if (email.value == "") {
    errMsgFunction("Email filed require");
    return false;
  } else if (password.value == "") {
    errMsgFunction("Password filed require");
    return false;
  }
  return true;
};
