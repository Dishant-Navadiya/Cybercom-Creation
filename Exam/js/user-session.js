const outputTableRaws = document.getElementById("outputTableRaws");
let printSessionLogs = JSON.parse(localStorage.getItem("sessionLogs"));

function printSession() {
  var temp = "";
  printSessionLogs.forEach((user) => {
    temp += `
        <tr>
        <td>${user.name}</td>
        <td>${user.loginTime}</td>
        <td>${user.logoutTime}</td>
      </tr>
        `;
  });
  outputTableRaws.innerHTML = temp;
}
printSession();
