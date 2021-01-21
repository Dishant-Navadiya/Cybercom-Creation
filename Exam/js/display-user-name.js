const currentUser = JSON.parse(sessionStorage.getItem("activeUser"));
const userName = document.getElementById("userName");

const printAcitveUserName = () => {
  userName.innerHTML = `Hello [${currentUser.name}]`;
};
if (currentUser) {
  printAcitveUserName();
}
