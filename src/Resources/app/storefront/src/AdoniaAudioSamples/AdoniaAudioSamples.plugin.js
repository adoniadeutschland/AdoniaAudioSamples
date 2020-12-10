import Plugin from "src/plugin-system/plugin.class";

export default class AdoniaAudioSamples extends Plugin {
  init() {
    var i = 0;
    const player = document.getElementById("audioplayer");
    const playlistButtons = document.querySelectorAll(".playlistButton");
    var isPlaying = 0;
    player.setAttribute(
      "src",
      playlistButtons[isPlaying].getAttribute("data-url").url
      // TODO: Set Attribute to source-Element not audio
    );

    function playThis() {
      var url = this.getAttribute("data-url");
      var index = this.getAttribute("data-index");
      // Add Speaker-Icon to Class paying
      playlistButtons.forEach(function (el) {
        el.classList.remove("active");
      });
      this.classList.add("active");
      player.setAttribute("src", url);
      // TODO: Set Attribute to source-Element not audio
      player.play();
      isPlaying = index;
    }

    function playNext() {
      if (isPlaying <= playlistButtons.length) {
        playThis.call(playlistButtons[isPlaying]);
        isPlaying++;
      } else {
        isPlaying = 0;
        playThis.call(playlistButtons[isPlaying]);
      }
    }

    player.addEventListener("ended", playNext);
    playlistButtons.forEach(function (button) {
      button.addEventListener("click", playThis);
    });
  }
}
