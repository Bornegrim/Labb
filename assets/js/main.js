$(document).ready(function () {
  $('#post_btn').click(function() {
    if($.trim($('#message').val()) == ""){
      alert('Post can not be left blank');
    }  else {
      $.ajax ({
        type: "POST",
        url: "posts-create.php",
        data: $("#postForm").serialize(),
        success: function (data) {
          $.ajax({
            url: "index.php",
            data: {},
            type: "POST",
            dataType: "html",
            success: function (data) {
              var result = $('<div />').append(data).find('.postbox').html();
              $('.postbox').html(result);
            },
          });
        }
      });
    }
  })
});

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

function validateEmail(x) {
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    return false;
  } else {
    return true;
  }

}
