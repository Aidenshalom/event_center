
// Swiper js
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    effect: "creative",
    creativeEffect:{
        prev:{
            shadow: true,
            translate: [0,0-400],
        },
        next:{
            translate: ["100%", 0,0],
        },
    },
  });


  // Show Menu
  $(document).ready(function(){
    $('#icon').click(function(){
      $('ul').toggleClass('show');
    });
  });

  // Back to top
  // var scroll = document.getElementById("top")
  // window.addEventListener("scroll", function(){
  //   scroll.style.transform = "rotate("+window.pageYOffset+"deg)"
  // });

  const totop = document.querySelector(".top");

  window.addEventListener("scroll", () => {
    if(window.pageYOffset > 300){
      totop.classList.add("active");
    }
    else{
      totop.classList.remove("active");
    }
  })

  // FLoating Whatsapp
  $(function () {
    $('#myDiv').floatingWhatsApp({
      phone: '08124937309',
      showPopup: 'false',
      popupMessage: 'Hello, how can we help you',
      message: 'I`d like to',
      headerTitle: 'Welcome!',
      zindex: '12'
    });
  });

  // Change focus
  const newmenu = document.querySelector(".menu");

  window.addEventListener("click", () => {
    if(onclick){
      newmenu.classList.add("focus");
    }
    else{
      newmenu.classList.remove("focus");
    }
  });

  // Booking modal
  var modal = document.getElementById('book-modal');
  var openModal = document.getElementsByClassName('open-book');
  var closeModal = document.querySelector('.close-book');
  var openSuccess = document.getElementById('open-success');

  var i;

  for(i = 0; i < openModal.length; i++){
    openModal[i].addEventListener('click', () => {
      modal.style.display = 'block';
    });
  }

  closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  openSuccess.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', function(e){
    if(e.target == modal) {
      modal.style.display = 'none';
    }
  });

  // Sucess modal
  // var success = document.getElementById('success-modal');
  // var openSuccess = document.getElementById('open-success');

  // openSuccess.addEventListener('click', function () {
  //   success.style.display = 'block';
  // })


  





