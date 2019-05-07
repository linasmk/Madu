// $ = jQuery.noConflict();

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


 

// document.addEventListener('DOMContentLoaded', function() {
// 	if(window.innerWidth > breakpoint) {
// 		nav.classList.toggle('active');
// 	}
// });


// Configuring the navigation
// $(document).ready( function() {
// 	$('.menu_toggle').on('click', function() {
// 		$('.top_nav').toggle(700, 'swing');
// 		$(this).toggleClass('open');
// 	});

// 	const breakpoint = 768;
// 	$(window).resize(function() {
// 		if($(document).width() >= breakpoint) {
// 			$('.top_nav').show();
// 		} else {
// 			$('top_nav').hide();
// 		}
// 	});

// });
//# sourceMappingURL=main.js.map
