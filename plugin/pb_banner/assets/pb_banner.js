$(document).ready(function () {
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true,
        slidesPerView: 1,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
	});

});
var pb_exp_time = $('.pb_popup .pb_disable_hours').text();
$(".pb_popup .close-popup").on("click", function() {
	$(".pb_popup").hide();
});

$(".pb_popup .close-today").on("click", function() {
	$(".pb_popup").hide();
	set_cookie("pb_banner", 1, pb_exp_time, g5_cookie_domain);
});

if(get_cookie("pb_banner") != 1){
	$('.pb_popup').show();
} else{
	$('.pb_popup').hide();
}
   