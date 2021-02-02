const name = document.getElementById("name");
const email = document.getElementById("email");
const subject = document.getElementById("subject");
const message = document.getElementById("message");
const msgErr = document.getElementById("err-message");
const errMsg = document.getElementById("err-msg");

const errMsgFunction = (msg) => {
  errMsg.classList.add("alert");
  errMsg.innerText = msg;
};

const validation = () => {
  if (name.value == "") {
    errMsgFunction("Name filed require");
    return false;
  } else if (email.value == "") {
    errMsgFunction("Email filed require");
    return false;
  } else if (subject.value == "") {
    errMsgFunction("Subject filed require");
    return false;
  } else if (message.value == "") {
    errMsgFunction("Message filed require");
    return false;
  }
  return true;
};
