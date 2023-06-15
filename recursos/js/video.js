var idVideo = obtenerIdVideo("https://www.youtube.com/watch?v=zzrtibsktxA&ab_channel=DAVIDALEXANDERFONSECAPEREZ"); 

    function obtenerIdVideo(url) {
      var idVideo = "";
      var regex = /[?&]v=([^&#]*)/i;
      var coincidencia = regex.exec(url);
      if (coincidencia && coincidencia[1]) {
        idVideo = coincidencia[1];
      }
      return idVideo;
    }

    var urlVideo = "https://www.youtube.com/embed/" + idVideo + "?autoplay=1";
    var iframe = document.createElement("iframe");
    iframe.setAttribute("width", "560");
    iframe.setAttribute("height", "315");
    iframe.setAttribute("src", urlVideo);
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "");
    iframe.setAttribute("autoplay", "");

document.getElementById("videoPlayer").appendChild(iframe);