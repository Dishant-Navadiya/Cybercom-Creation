const name = document.getElementById("name");
const email = document.getElementById("email");
const title = document.getElementById("title");
const phone = document.getElementById("Phone");
const errMsg = document.getElementById("err-msg");

const handleErr = (msg) => {
  var errorMsg = `<div class="alert alert-danger" role="alert">
                      ${msg}
                    </div>`;
  errMsg.innerHTML = errorMsg;
};

const validate = () => {
  emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (name.value === "") {
    handleErr("Name is required.");
    return false;
  } else if (email.value === "") {
    handleErr("Email is required.");
    return false;
  } else if (!emailPattern.test(email.value)) {
    handleErr("Email is not valid");
    return false;
  } else if (phone.value === "") {
    handleErr("Phone number is required.");
    return false;
  } else if (title.value === "") {
    handleErr("Title is required.");
    return false;
  }
  return true;
};

$(".delete").click(function () {
  element = $(this);
  id = element.attr("id");
  $.ajax({
    type: "POST",
    data: {
      category: "delete",
      cid: id,
    },
    url: "connection/connection.php",
    success: (data) => {
      if (data == 1) {
        element.parents("tr").fadeOut();
      }
    },
  });
});
