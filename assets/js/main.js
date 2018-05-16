
$(document).ready(function () {
  $('#postForm').submit(function(){
     if($.trim($('#message').val()) == ""){
        alert('Post can not be left blank');
        return false;
     } else {
       return true;
     }
 })
});

function validateEmail(x) {
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    } else {
      return true;
    }

}

$(document).ready(function() {
  $('#loginForm').submit(function(){
    if(!validateEmail($.trim($('#email').val())))  {

      alert('Please enter a valid email!');
      return false;
    }
     else if($.trim($('#password').val()) == "") {
        alert('Please enter a password!');
        return false;
      }

    })
});
