function checkValidation() {
  var email = document.getElementById("email").value;
  var reEmail = document.getElementById("reEmail").value;

  var password = document.getElementById("password").value;
  var rePassword = document.getElementById("rePassword").value;

  var phone = document.getElementById("phone").value;
  if (email !== reEmail) {
    return false;
  }
  if (password !== rePassword) {
    return false;
  }
  if (phone.includes(" ") || phone.includes("-")) {
    return false;
  }

  return true;
}
