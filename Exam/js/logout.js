let sessionLogs = JSON.parse(localStorage.getItem("sessionLogs"));
let activeUser = JSON.parse(sessionStorage.getItem("activeUser"));
const logoutUser = () => {
  sessionLogs.forEach((user) => {
    if (user.name == activeUser.name) {
      user.logoutDate = new Date();
    }
  });
  sessionStorage.removeItem("activeUser");
  window.location.href = "./login.html";
};
