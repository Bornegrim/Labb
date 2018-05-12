function checkPost() {
  var checkIfEmpty = document.getElementById("post").value;
  var checkIfEmpty = checkIfEmpty.trim();

  if (checkIfEmpty === null || checkIfEmpty === " " || checkIfEmpty === "") {
    alert("Please write someting in your message");
    return false;
  }
    else {
      return true;
    }
}

function checkLogin() {
  var email = document.getElementById("emailreg").value;
  var password = document.getElementById("passwordreg").value;
  var checkEmail = email.trim();
  var checkpassword = password.trim();
  var atpos = email.indexOf("@");
  var dotpos = email.lastIndexOf(".");

  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
    alert("Not a valid e-mail address");
    return false;
  }
  else if (checkpassword === null || checkpassword === " " || checkpassword === "") {
    alert("Please Fill in a password");
    return false;
  } else {
    return true;
  }
}
