$ = jQuery.noConflict();


/* ============== Mobile Navigation =====================
=======================================================*/

// Variables
const header = document.querySelector('#header'),
      nav = document.querySelector(".header_menu"),
      navBg = document.querySelector(".menu_toggle"),
	    navToggle = document.querySelector(".hamburger"),
	    specifiedElement = document.querySelector('.site_header'),
	    breakpoint = 768,
      downArrow = document.querySelector('.hero_arrow');

// Opening and closing mobile navigation
if (navToggle) {
	navToggle.addEventListener("click", (e) => {
		if (nav.className == "active") {
    		nav.classList.toggle('active');
        navToggle.classList.toggle('open');

  		} else {
   	 		nav.classList.toggle('active');
        navToggle.classList.toggle('open');
  			}
  		e.preventDefault();
  	}, false);
}

// Adding background gradient around the hamburger menu and turning it off when sidebar opens
navBg.style.background = 'linear-gradient('
     + 'rgba(90, 45, 12, .99)' + ', ' + 'rgba(144, 91, 56, .99)' 
     + ', ' + 'rgba(144, 91, 56, .99)' + ',' + 'rgba(90, 45, 12, .99)' + ')';

navToggle.addEventListener("click", (e) => {
  if(nav.className == "header_menu active") {
      navBg.style.background = 'transparent';
  } else {
    navBg.style.background = 'linear-gradient('
     + 'rgba(90, 45, 12, .99)' + ', ' + 'rgba(144, 91, 56, .99)' 
     + ', ' + 'rgba(144, 91, 56, .99)' + ',' + 'rgba(90, 45, 12, .99)' + ')';
  }
}, false);

// Any click outside of the nav element will close the menu if it's open
document.addEventListener('click', (e) => {
	 const isClickInside = specifiedElement.contains(e.target);
    if (!isClickInside && nav.className == "header_menu active") {
    nav.classList.toggle('active');
    navToggle.classList.toggle('open');
    navBg.style.background = 'linear-gradient('
     + 'rgba(90, 45, 12, .99)' + ', ' + 'rgba(144, 91, 56, .99)' 
     + ', ' + 'rgba(144, 91, 56, .99)' + ',' + 'rgba(90, 45, 12, .99)' + ')';
    } 
});

// Tablet and desktop navigation will become fixex after 50px pageYOffset
window.addEventListener('scroll', (e) => {
    if(window.pageYOffset > 50) {
          header.style.position = 'fixed';
          header.style.width = '100%'
          header.style.zIndex = 1000;
          header.style.top = 0;
      } else {
          header.style.position = 'static';
          
      }
});



/* ============ Scroll arrows  ========================
=====================================================================*/

// Sets the eventlistener to "down_arrow" icon with click and touchstart events
if(downArrow) {
  const moveUpDown = downArrow.style.animation = "MoveUpDown 1s ease infinite";
  function smoothScrollDown() {
    const scroll_to_about = document.getElementById("about");
    scroll_to_about.scrollIntoView({behavior: "smooth", block: "start"});
  }
  downArrow.addEventListener("click", smoothScrollDown);
  downArrow.addEventListener("touchstart", smoothScrollDown);

  // mouseover & mouseleave, touchstart & touchleave stops moving arrow icon and sets it to move again respectively
  downArrow.addEventListener('mouseover', (e) => {
    downArrow.style.animation = '';
    e.preventDefault();
  });

  downArrow.addEventListener('mouseleave', (e) => {
    downArrow.style.animation = 'MoveUpDown 1s ease infinite';
    e.preventDefault();
  });

  downArrow.addEventListener('touchstart', (e) => {
    downArrow.style.animation = '';
    e.preventDefault();
  });

  downArrow.addEventListener('touchend', (e) => {
    downArrow.style.animation = 'MoveUpDown 1s ease infinite';
    e.preventDefault();
  });
}

// Sets the eventlistener to "up_arrow" icon with click and touchstart events
const upArrow = document.querySelector('.footer_arrow');
let hero = document.getElementsByClassName('hero');

for(let i = 0; i < hero.length; i++) {

    function smoothScrollUp() {
      
      hero[i].scrollIntoView({behavior: "smooth", block: "start"});
    }
    upArrow.addEventListener("click", smoothScrollUp);
    upArrow.addEventListener("touchstart", smoothScrollUp);

}

/* ============ Fluidbox Plugin for galleries  ========================
=====================================================================*/
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

