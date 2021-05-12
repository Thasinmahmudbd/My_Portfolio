window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
    document.getElementById("anchor").className = "navbar_container_on_scroll";
    document.getElementById("anchor2").className = "sub_page_search_bar_on_scroll";
    document.getElementById("anchor3").className = "search_input_on_scroll";
  } else {
    document.getElementById("anchor").className = "navbar_container";
    document.getElementById("anchor2").className = "sub_page_search_bar";
    document.getElementById("anchor3").className = "search_input";
  }
}
