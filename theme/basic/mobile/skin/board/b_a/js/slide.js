

	function gallery() {

	var gallerySlider = $('#gall_uls').bxSlider({
			nextSelector: '#gallery-next',
	  		prevSelector: '#gallery-prev',
	  		nextText: '>',
			prevText: '<',
			pagerCustom: '#gallery-pager',
			onSlideBefore: function() {
				var n = gallerySlider.getCurrentSlide() + 1;
				$cur_i.text(n);
				galleryPager.goToSlide(Math.ceil(n/3)-1);
			}
		}),
		galleryPager = $('#gallery-pager').bxSlider({
			controls: false,
			pager: false,
			mode: 'horizontal',
			slideWidth: 237,
			minSlides: 3,
			maxSlides: 3,
				slideMargin:20,
				startSlide:0,
			infiniteLoop: false,
			onSlideBefore: function() {
				var n = galleryPager.getCurrentSlide() + 1;
				$cur_p.text(n);
			}
		}),
		$cur_i = $('#current-item'),
		$total = $('.total-item'),
		$total2 = $('.total-item2'),
		$prev_s = $('#prev-item-s'),
		$next_s = $('#next-item-s'),
		$prev = $('#gallery-prev'),
		$next = $('#gallery-next'),
		$p_total = $('#pager-total'),
		$cur_p = $('#pager-current'),
		$pager_next = $('#pager-next'),
		$pager_prev = $('#pager-prev'),
		pager_paging;
	$total.text(gallerySlider.getSlideCount());
	$total2.text(Math.ceil(gallerySlider.getSlideCount()/3));
	pager_paging = Math.ceil(galleryPager.getSlideCount()/3);


	$prev_s.on('click', function(e){
		gallerySlider.goToPrevSlide();
		returnFalse(e);
	});

	$next_s.on('click', function(e){
		gallerySlider.goToNextSlide();
		returnFalse(e);
	});

	$pager_prev.on('click', function(e){
		galleryPager.goToPrevSlide();
		returnFalse(e);
	});

	$pager_next.on('click', function(e){
		galleryPager.goToNextSlide();
		returnFalse(e);
	});

	function returnFalse(e) {
		e.preventDefault();
		e.stopPropagation();
	}

	function setCurrent(obj, target) {
		target.text(obj.getCurrentSlide()+1);
	}
}

	$(function(){
		gallery();


	})