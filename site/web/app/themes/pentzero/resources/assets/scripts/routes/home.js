export default {
  init() {
  window.addEventListener("DOMContentLoaded", function(e) { // eslint-disable-line no-unused-vars

    var slideShow = document.getElementById("module-media-slideshow");
    var fadeComplete = function(e) { slideShow.appendChild(arr[0]); }; // eslint-disable-line no-unused-vars
    var arr = slideShow.getElementsByTagName('div');
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
