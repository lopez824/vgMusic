
$(function() {
    $("#redButton, #blueButton, #yellowButton").click(function(e) {
        e.preventDefault();
        changeBackground($(this).val());
        $.ajax({
            url: "https://vgmusic.herokuapp.com/vgm_handler.php",
            data: {mood: $(this).val()},
            dataType: "json",
            success: function(result) {
              createSongList(result);
            },
             error: function () {
              alert("FAILURE");
            }
        });
        });
    });

    function changeBackground(color) {
      if (color === "red") {
        $("body").css("background-color","#FFE5E5");
        $("h1").css("color", "#009000");
      }
      else if (color === "blue") {
        $("body").css("background-color","#E5E5FF");
        $("h1").css("color", "#bd02bd");
      }
      else if (color === "yellow") {
        $("body").css("background-color","#FFFFE5");
        $("h1").css("color", "#0277bd");
      }
    }

    function createSongList(songids) {
      $("li").each(function(index) {
        $(this).replaceWith("<li><iframe class = 'hidden fadein' src='https://open.spotify.com/embed/track/" + songids[index] + "'" + "' width = '300' height= '80' frameborder='0' allowtransparency='true' allow='encrypted-media'></iframe></li>");
      });
      $("li").each(function() {
        $(this).find("iframe").on("load", function() {
          $(this).removeClass("hidden");
        });
      });
    }
