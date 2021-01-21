const printHappy = document.getElementById("printHappy");

const gettingActive = JSON.parse(sessionStorage.getItem("activeUser"));
if (
  new Date(gettingActive.birthdayDate).toDateString() ==
  new Date().toDateString()
) {
  printHappy.innerText = "Happy Birthday";
}
