$ = jQuery.noConflict();

// Opening and closing mobile navigation
const nav = document.querySelector(".header_menu"),
	  navToggle = document.querySelector(".hamburger"),
	  specifiedElement = document.querySelector('.site_header'),
	  breakpoint = 768;

if (navToggle) {
	navToggle.addEventListener("click", (e) => {
		if (nav.className == "active") {
    		nav.classList.toggle('active');
  		} else {
   	 		nav.classList.toggle('active');
  			}
  		e.preventDefault();
  	}, false);
}

navToggle.addEventListener('click', (e) => {
	navToggle.classList.toggle('open');
});
// Any click outside of the nav element will close the menu if it's open
document.addEventListener('click', (e) => {
	 const isClickInside = specifiedElement.contains(e.target);
    if (!isClickInside && nav.className == "header_menu active") {
    nav.classList.toggle('active');
    } 
});

// Fluidbox Plugin for about gallery  
jQuery('.blocks-gallery-item figure a').each(function() {
  jQuery(this).attr({'data-fluidbox': ''});
});

if(jQuery('[data-fluidbox]').length > 0 ) {
  jQuery('[data-fluidbox]').fluidbox();
}

// Fluidbox Plugin for sidebar gallery  
jQuery('.gallery a').each(function() {
  jQuery(this).attr({'data-fluidbox': ''});
});

if(jQuery('[data-fluidbox]').length > 0 ) {
  jQuery('[data-fluidbox]').fluidbox();
}


 
// Google Maps
var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
      });
    }