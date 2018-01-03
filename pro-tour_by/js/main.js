$(document).ready(function() {

// mobile menu

var menuNav = document.querySelector('.left-panel');
var toggleBtn = menuNav.querySelector('#js-toggle');
var toggleArrow = toggleBtn.querySelector('.header-menu-toggle');
var float_header = document.querySelector('.float-header');

toggleBtn.addEventListener('click', moveMenu);

function moveMenu(){
  if(menuNav.classList.contains('nav-show')) {
      toggleArrow.classList.remove('btn-arrow-top');
      toggleArrow.classList.remove('btn-arrow-bottom');
      menuNav.classList.remove('nav-show');
      float_header.classList.remove('nav-show');
     } else {
      toggleArrow.classList.add('btn-arrow-top');
      toggleArrow.classList.add('btn-arrow-bottom');
      menuNav.classList.add('nav-show');
      float_header.classList.add('nav-show');
      }
};

//scroll

$("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });

// phonemask

$("#phone").mask("+375(99) 999-99-99");

// diamonds
$(".diamondswrap").diamonds({
 size: 250, // Size of the squares
 gap: 5 // Pixels between squares
 });
$('#dg-container').gallery();

// popup windows

var popup = document.querySelector(".popup-question")
var close = document.querySelector(".popup-question-close");
var winPopup = document.querySelector(".wrap");
var videoLink = document.querySelectorAll(".popup-link");
var i = 0;
var k = 0;
var x = 0;
var y = 0;
var w = videoLink.length;

for (var k = 0; k < w; k++) {
  videoLink[k].addEventListener('click', function(evt) {
     evt.preventDefault();
     var current = evt.currentTarget;
     if (current.classList.contains("popup-link")) {
     var m = w;
     while(m--) {
        if(videoLink[m] == current) {
           var y = m;
           break;
        }
     }
     popup.classList.add("modal-content-show");
     winPopup.classList.add("modal-content-show");
     videoBox = '<video class="popup__video" autoplay controls><source src="' + videoLink[y].href + '" type="video/mp4"><source src="' + videoLink[y].href + '"type="video/webm"></video>';
     popup.insertAdjacentHTML('afterbegin', videoBox);
   } else {
      evt.preventDefault();
     }
  });
};

function showThank() {
  winPopup.classList.add("modal-content-show");
  popup.classList.add("modal-content-show");
  setTimeout(function() {
    popup.classList.add("modal-content-hide");
    winPopup.classList.add("modal-content-hide");
  }, 5000);
  setTimeout(function() {
    popup.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popup.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 5500);
};

function removePopup() {
  popup.classList.add("modal-content-hide");
  winPopup.classList.add("modal-content-hide");
  setTimeout(function() {
    popup.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popup.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 600);

};



  close.addEventListener("click", function(event) {

    event.preventDefault();

    removePopup();

  });


window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();

    }

  }

});

winPopup.addEventListener("click", function(event) {

  if (winPopup.classList.contains("modal-content-show")) {

    removePopup();

  }

});


	//E-mail Ajax Send
	$(".order-form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			showThank();
      setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
