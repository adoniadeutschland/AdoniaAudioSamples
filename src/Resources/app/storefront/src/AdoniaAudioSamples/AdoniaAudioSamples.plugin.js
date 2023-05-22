import Plugin from "src/plugin-system/plugin.class";
export default class AdoniaAudioSamples extends Plugin {
  constructor() {
    super();
    this.player = document.getElementById("audioplayer");
    this.playlistButtons = document.querySelectorAll(".playlistButton");
    this.isPlaying = 0;
  }

  init() {
    this.player.setAttribute(
      "src",
      this.playlistButtons[this.isPlaying].getAttribute("data-url")
    );

    const playThis = (button) => {
      const url = button.getAttribute("data-url");
      const index = button.getAttribute("data-index");
      this.player.setAttribute("src", url);
      this.player.play();
      this.showActive();
      this.isPlaying = index;
    };

    const playNext = () => {
      this.isPlaying++;
      if (this.isPlaying < this.playlistButtons.length) {
        playThis(this.playlistButtons[this.isPlaying]);
      } else {
        this.isPlaying = 0;
        playThis(this.playlistButtons[this.isPlaying]);
      }
    };


    const showActive = () => {
      this.playlistButtons.forEach((button) => {
        button.classList.remove("active");
      });
      this.playlistButtons[this.isPlaying].classList.add("active").add('speaker-icon');
      // TODO: Add Speaker-Icon to Class paying
    };

    this.player.addEventListener("ended", playNext);
    this.player.addEventListener("play", showActive);
    this.playlistButtons.forEach((button) => {
      button.addEventListener("click", () => playThis(button));
    });
  }
}
