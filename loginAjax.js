$(function() {
    $("#loginForm").submit(function(e) {
      e.preventDefault();
      e.stopPropagation();
      var values = $("#loginForm").serialize();
      $.ajax({
        type: "POST",
        url: "https://vgmusic.herokuapp.com/login/login_handler.php",
        data: values,
        dataType: "json",
        success: function(result) {
            if (typeof result['name'] == 'undefined' || typeof result['password'] == 'undefined') {
              window.location.replace("https://vgMusic.herokuapp.com/misc/secret.html");
            }
            else {
              window.location.replace("https://vgMusic.herokuapp.com");
            }
        },
         error: function () {
          alert("FAILURE");
        }
      });
      return false;
    });
  });