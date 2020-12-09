import Plugin from "src/plugin-system/plugin.class";

export default class AdoniaAudioSamples extends Plugin {
  init() {
    var i = 0;
    const player = document.getElementById("audioplayer");
    const playlistButtons = document.querySelectorAll(".playlistButton");

    function playNext() {
      if (i < playlistButtons.length - 1) {
        i++;
        playThis();
        // how to say which track is playing?
        console.log("next");
      } else {
        i = 0;
      }
    }

    function playThis() {
      var url = this.getAttribute("data-url");
      player.setAttribute("src", url);
      player.play();
    }

    player.addEventListener("ended", playNext);
    playlistButtons.forEach(function (button) {
      button.addEventListener("click", playThis);
    });
  }
}
