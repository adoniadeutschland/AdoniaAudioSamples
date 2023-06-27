import Plugin from "src/plugin-system/plugin.class";

const player = new Plyr('#audioplayer');
export default class AdoniaAudioSamples extends Plugin {
  constructor(...args) {
    super(...args);
  }

  init() {
    this.player = document.getElementById("audioplayer");
    this.playlistButtons = document.querySelectorAll(".playlistButton");
    this.isPlaying = 0;
    this.player.setAttribute(
      "src",
      this.playlistButtons[this.isPlaying].getAttribute("data-url")
    );


    this.playThis = (button) => {
      const url = button.getAttribute("data-url");
      const index = button.getAttribute("data-index");
      this.player.setAttribute("src", url);
      this.player.play();
      this.showActive();
      this.isPlaying = index;
    };

    this.playNext = () => {
      this.isPlaying++;
      if (this.isPlaying < this.playlistButtons.length) {
        this.playThis(this.playlistButtons[this.isPlaying]);
      } else {
        this.isPlaying = 0;
        this.playThis(this.playlistButtons[this.isPlaying]);
      }
    };


    this.showActive = () => {
      this.playlistButtons.forEach((button) => {
        button.classList.remove("active");
      });
      this.playlistButtons[this.isPlaying].classList.add("active");
      // TODO: Add Speaker-Icon to Class paying
    };
    this.player.addEventListener("ended", this.playNext);
    this.player.addEventListener("play", this.showActive);
    this.playlistButtons.forEach((button) => {
      button.addEventListener("click", () => this.playThis(button));
    });
  }
}
