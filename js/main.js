'use strict'

window.addEventListener("scroll",function(){
    let scroll = document.documentElement.scrollTop;
    if(scroll > 140) {
      document.getElementById("js-header").classList.add("js-header_fixed");
    } else {
      document.getElementById("js-header").classList.remove("js-header_fixed");
    }
    if(scroll > 140) {
      document.getElementById("js-header_wrapper").classList.add("js-header_wrapper01");
    } else {
      document.getElementById("js-header_wrapper").classList.remove("js-header_wrapper01");
    }
    if(scroll > 140) {
      document.getElementById("js-header_wrapper01").classList.add("js-header_wrapper02");
    } else {
      document.getElementById("js-header_wrapper01").classList.remove("js-header_wrapper02");
    }
  });