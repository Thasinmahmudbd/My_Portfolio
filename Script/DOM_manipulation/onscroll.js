window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
    document.getElementById("anchor").className = "navbar_container_on_scroll";
  } else {
    document.getElementById("anchor").className = "navbar_container";
  }
}