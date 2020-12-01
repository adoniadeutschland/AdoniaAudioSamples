var url = [
    "https://webdesign.weisshart.de/audios/diemusikistgemafrei.mp3",
    "https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_700KB.mp3"
  ];
  i = 0;
  const player = document.getElementById("audioplayer");
//   player.setAttribute("src", url[i]);
  
  function playNext() {
    if (i < (url.length - 1)){
      i++;  
      playThis(i);
      console.log("next");
    }
  }
  
  function playThis(el) {
    player.setAttribute("src", el);
    player.play();
  }