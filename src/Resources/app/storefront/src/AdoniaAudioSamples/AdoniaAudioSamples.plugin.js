import Plugin from "src/plugin-system/plugin.class";

export default class AdoniaAudioSamples extends Plugin {
  init() {
    var i = 0;
    const player = document.getElementById("audioplayer");
    const playlistButtons = document.querySelectorAll(".playlistButton");
    var isPlaying = 0;
    player.setAttribute(
      "src",
      playlistButtons[isPlaying].getAttribute("data-url")
    );

    function playThis() {
      var url = this.getAttribute("data-url");
      var index = this.getAttribute("data-index");
      player.setAttribute("src", url);
      player.play();
      showActive();
      isPlaying = index;
    }

    function playNext() {
      isPlaying++;
      if (isPlaying < playlistButtons.length) {
        playThis.call(playlistButtons[isPlaying]);
      } else {
        isPlaying = 0;
        playThis.call(playlistButtons[isPlaying]);
      }
    }

    function showActive() {
      playlistButtons.forEach(function (el) {
        el.classList.remove("active");
      });
      playlistButtons[isPlaying].classList.add("active");
      // TODO: Add Speaker-Icon to Class paying
    }

    player.addEventListener("ended", playNext);
    player.addEventListener("play", showActive);
    playlistButtons.forEach(function (button) {
      button.addEventListener("click", playThis);
    });
  }
}
