const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
const date = document.getElementById("date");
const month = document.getElementById("month");
const year = document.getElementById("year");
const country = document.getElementById("country");
const check = () => {
  if (password.value !== confirmPassword.value) {
    alert("Password missmatch");
    return false;
  } else if (date.value == "") {
    alert("Date required");
    return false;
  } else if (month.value == "") {
    alert("Month required");
    return false;
  } else if (year.value == "") {
    alert("year required");
    return false;
  } else if (country.value == "") {
    alert("country required");
    return false;
  }
  return true;
};
