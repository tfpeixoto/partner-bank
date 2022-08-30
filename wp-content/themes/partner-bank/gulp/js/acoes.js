// Owl
$(document).ready(function () {
  $('.owl-default').owlCarousel({
    loop: true,
    autoHeight: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: true,
    dots: false,
    items: 1,
  });


  $('.owl-categories').owlCarousel({
    autoplay: true,
    autoWidth: true,
    autoplayTimeout: 5000,
    loop: true,
    autoHeight: true,
    autoplayHoverPause: true,
    nav: true,
    dots: false,
    items: 5,
  });
});


// Forms
const newsFooter = $('#news-footer')
$(newsFooter).on('submit', function (e) {
  e.preventDefault();
  newsFooter.post;
  newsFooter[0].reset();
  $('#msg-sucesso').fadeIn(500).delay(2000).fadeOut(500);
})

const newsSidebar = $('#news-sidebar')
$(newsSidebar).on('submit', function (e) {
  e.preventDefault();
  newsSidebar.post;
  newsSidebar[0].reset();
  $('#msg-sucesso').fadeIn(500).delay(2000).fadeOut(500);
})


// Navbar Fixed
function navbarFixed() {
  if ($('.header').length) {
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll) {
        $(".header").addClass("fixed");
      } else {
        $(".header").removeClass("fixed");
      }
    });
  };
};
navbarFixed();


// Wow
new WOW().init();


// Modal
$('#formSite').submit(function (e) {
  e.preventDefault();
  $('#retornoConhecer').fadeIn(500).delay(5000).fadeOut(500);
  setTimeout(function () {
    $('#ModalContato').modal('hide');
  }, 6000);
});


// Modal
$('#formErp').submit(function (e) {
  e.preventDefault();
  $('#retornoERP').fadeIn(500).delay(5000).fadeOut(500);
  setTimeout(function () {
    $('#ModalErp').modal('hide');
  }, 6000);
});


// Zoho
var $zoho = $zoho || {};
$zoho.salesiq = $zoho.salesiq || {
  widgetcode: "19eabad5130e4f1a61288e54458efd2abe1e7772beb1905053a81971c7fe4755886a5fcb0a9e38100f30af78612c8ea8",
  values: {},
  ready: function () { }
};
var d = document;
s = d.createElement("script");
s.type = "text/javascript";
s.id = "zsiqscript";
s.defer = true;
s.src = " https://salesiq.zoho.com/widget";
t = d.getElementsByTagName("script")[0];
t.parentNode.insertBefore(s, t);
d.write("<div id='zsiqwidget'></div>");