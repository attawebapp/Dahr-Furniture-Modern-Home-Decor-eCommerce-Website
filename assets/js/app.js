// Initialize Wow
new WOW().init();

// Dummy Slider
$(".furneture_slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
});
 

$(".test__slider").slick({
  autoplay: true, 
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});

function incrementValue() {
  var inputValue = parseInt(document.getElementById('counter').value);
  document.getElementById('counter').value = inputValue + 1;
}

function decrementValue() {
  var inputValue = parseInt(document.getElementById('counter').value);
  if (inputValue > 1) {
      document.getElementById('counter').value = inputValue - 1;
  }
}


$(function(){

  //Scroll event
  $(window).scroll(function(){
    var scrolled = $(window).scrollTop();
    if (scrolled > 200) $('.go-top').fadeIn('slow');
    if (scrolled < 200) $('.go-top').fadeOut('slow');
  });
  
  //Click event
  $('.go-top').click(function () {
    $("html, body").animate({ scrollTop: "0" },  500);
  });

});



$(document).ready(function(){
  $('.search_open').click(function(){
    $('.search_bar').css('overflow-x','visible');
  })

  $('.search_close').click(function(){
    $('.search_bar').css('overflow-x','hidden');
  })

})

function openSearch() {
  document.getElementById("mySearch").style.width = "100%";
}

function closeSearch() {
  document.getElementById("mySearch").style.width = "0";
}
 


 

$(document).keyup(function(e){
  if(e.keyCode === 27) { close_video(); }
});

function close_video() {
  $('.video-overlay.open').removeClass('open').find('iframe').remove();
};
 


function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}




$(document).ready(function(){
  $('.closebtn').click(function(){
    $('.sidenav').css('border', 'none')
  })
  
  $('#open-cart').click(function(){
    $('.sidenav').css('border-left', '1px solid')
  })

})