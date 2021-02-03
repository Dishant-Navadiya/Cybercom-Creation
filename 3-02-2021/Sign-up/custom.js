const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
const date = document.getElementById("date");
const month = document.getElementById("month");
const year = document.getElementById("year");
const country = document.getElementById("country");
const errMsg = document.getElementById("err-msg");

const errMsgFunction = (msg) => {
  errMsg.classList.add("alert");
  errMsg.innerText = msg;
};

const check = () => {
  if (password.value !== confirmPassword.value) {
    errMsgFunction("Password missmatch");
    return false;
  } else if (date.value == "") {
    errMsgFunction("Date required");
    return false;
  } else if (month.value == "") {
    errMsgFunction("Month required");
    return false;
  } else if (year.value == "") {
    errMsgFunction("year required");
    return false;
  } else if (country.value == "") {
    errMsgFunction("country required");
    return false;
  }
  return true;
};
