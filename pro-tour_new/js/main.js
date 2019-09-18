$(document).ready(function() {

// mobile menu

var menuNav = document.querySelector('.header__menu');
var toggleBtn = document.querySelector('.mobile-header__hamburger');
var menuParentBtn = document.querySelectorAll('.menu-item-has-children');
var plusBtn = '<span class="plus-btn"></span>';
zzz = menuParentBtn.length;

toggleBtn.addEventListener('click', moveMenu);

function moveMenu(){
  if(toggleBtn.classList.contains('is-active')) {
      toggleBtn.classList.remove('is-active');
      menuNav.classList.remove('active');
     } else {
       toggleBtn.classList.add('is-active');
       menuNav.classList.add('active');
      }
};

for (var i = 0; i < zzz; i++) {
menuParentBtn[i].insertAdjacentHTML('afterbegin', plusBtn);
}

var plusBtnAr = document.querySelectorAll('.plus-btn');

for (var i = 0; i < zzz; i++) {
  plusBtnAr[i].addEventListener('click', function(evt) {
    //debugger
     evt.preventDefault();
     var current = evt.currentTarget;
     if (current.classList.contains("plus-btn")) {
     var n = zzz;
     while(n--) {
        if(plusBtnAr[n] == current) {
           var x = n;
           break;
        }
     }
     for (var i = 0; i < zzz; i++) {
       menuParentBtn[i].querySelector('.sub-menu').classList.remove('active');
       plusBtnAr[i].classList.remove('active');
     }
     menuParentBtn[x].querySelector('.sub-menu').classList.add('active');
     plusBtnAr[x].classList.add('active');
   } else {
      evt.preventDefault();
     }
  });
};

//Слайдер партнеров на главной

$('.main-opers__slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
});

//scroll

/*
$("a[href*=#*]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });
*/
// Прилипание верхнего меню + кнопка наверх

window.onscroll = function() {
  let scroll  = window.pageYOffset || document.documentElement.scrollTop;
  //if(scroll < 500) $('.back_to_top').removeClass('active');
  //if(scroll > 500) $('.back_to_top').addClass('active');
  if(scroll > 162) {$('.header__menu').addClass('fixed');}
  if(scroll < 162) {$('.header__menu').removeClass('fixed');}
};

// галерея в "О нас"

var contentGallery = document.querySelector('.content-box__img');
var imgSmall = document.querySelectorAll('.content-box__img > li');
var count = imgSmall.length;
var arg = [];

for (var i = 0; i < count; i++) {
  imgSmall[i].addEventListener('click', changeImg);

}

function changeImg(evt) {
  evt.preventDefault();
  if (!(this.classList.contains('current'))) {
    for (var i = 0; i < count; i++) {
      imgSmall[i].classList.remove('current');
    }
    this.classList.add('current');
    contentGallery.insertBefore(this, null);
  }
}

// popup windows

var popup = document.querySelector(".popup-question");
var popupS = document.querySelector(".popup-question-thanks");
var popupBtn = document.querySelectorAll(".cloud-link");
var close = document.querySelectorAll(".popup-question-close");
var winPopup = document.querySelector(".wrap");
var formMark = document.querySelectorAll(".cloud-mark");
var formTitle = document.querySelector(".cloud-title");
var z = popupBtn.length;

function showPopup() {
  popup.classList.add("modal-content-show");
  winPopup.classList.add("modal-content-show");
};

function removePopup() {
  popup.classList.add("modal-content-hide");
  winPopup.classList.add("modal-content-hide");
  popupS.classList.remove("modal-content-show");
  setTimeout(function() {
    popup.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popup.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 600);

};

function showThank() {
  winPopup.classList.add("modal-content-show");
  popup.classList.remove("modal-content-show");
  popupS.classList.add("modal-content-show");
  setTimeout(function() {
    popupS.classList.add("modal-content-hide");
    winPopup.classList.add("modal-content-hide");
  }, 59000);
  setTimeout(function() {
    popupS.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popupS.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 60000);
};

for (var i = 0; i < z; i++) {
  popupBtn[i].addEventListener('click', function(evt) {
     evt.preventDefault();
     var current = evt.currentTarget;
     if (current.classList.contains("cloud-link")) {
     var n = z;
     while(n--) {
        if(popupBtn[n] == current) {
           var x = n;
           break;
        }
     }
     showPopup();
     formTitle.value  = 'Заявка с сайта.' + popupBtn[x].querySelector('.hidden').innerText;
   } else {
      evt.preventDefault();
     }
  });
};

/*for (var i = 0; i < popupBtn.length; i++) {
  popupBtn[i].addEventListener("click", function(event) {

    event.preventDefault();

    showPopup();

  });
}
*/

for (var i = 0; i < close.length; i++) {

  close[i].addEventListener("click", function(event) {

    event.preventDefault();

    removePopup();

  });
}

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
			url: "https://pro-tour.by/mail.php", //Change
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
