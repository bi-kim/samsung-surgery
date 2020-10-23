<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="삼성라인 윤곽성형";
		$js_array = array("01"=>"양악","02"=>"광대","03"=>"돌출입","04"=>"사각턱","05"=>"주걱턱","06"=>"긴턱","07"=>"무턱");
        break;
		case "02":
		$js_title ="삼성라인 윤곽성형";
		$js_array = array("01"=>"양악","02"=>"광대","03"=>"돌출입","04"=>"사각턱","05"=>"주걱턱","06"=>"긴턱","07"=>"무턱");
        break;
		case "03":
		$js_title ="삼성라인 윤곽성형";
		$js_array = array("01"=>"양악","02"=>"광대","03"=>"돌출입","04"=>"사각턱","05"=>"주걱턱","06"=>"긴턱","07"=>"무턱");
        break;
		case "04":
		$js_title ="삼성라인 윤곽성형";
		$js_array = array("01"=>"양악","02"=>"광대","03"=>"돌출입","04"=>"사각턱","05"=>"주걱턱","06"=>"긴턱","07"=>"무턱");
        break;
		case "05":
		$js_title ="삼성라인 윤곽성형";
		$js_array = array("01"=>"양악","02"=>"광대","03"=>"돌출입","04"=>"사각턱","05"=>"주걱턱","06"=>"긴턱","07"=>"무턱");
        break;
		case "06":
		$js_title ="삼성라인 윤곽성형";
		$js_array = array("01"=>"양악","02"=>"광대","03"=>"돌출입","04"=>"사각턱","05"=>"주걱턱","06"=>"긴턱","07"=>"무턱");
        break;
}

?>
<div class="js__sub__lnb border__box">
	<div class="js__lnb__title purple border__box">
		<?php echo $js_title ?>
	</div>	
	<ul class="js__lnb__ul border__box">
		<?php
		   foreach($js_array as $href => $js_value) {
         ?>
			<li class="js__lnb__li">
				<a href="/faceline/faceline.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
			</li>
        <?php } ?>
	</ul>
</div>

<script type="text/javascript">
		var aa = $(".js__sub__title").text();
		$('.js__lnb__click').each( function() {
			if (aa == $(this).text())  
			$(this).addClass('js__lnb__active_purple');    
		})
</script>