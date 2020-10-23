<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="인사말";
		$js_array = array("01"=>"인사말","02"=>"진료안내","03"=>"병원둘러보기","04"=>"오시는 길");
        break;
		case "02":
		$js_title ="진료안내";
		$js_array = array("01"=>"인사말","02"=>"진료안내","03"=>"병원둘러보기","04"=>"오시는 길");
        break;
		case "03":
		$js_title ="병원둘러보기";
		$js_array = array("01"=>"인사말","02"=>"진료안내","03"=>"병원둘러보기","04"=>"오시는 길");
        break;
		case "04":
		$js_title ="오시는 길";
		$js_array = array("01"=>"인사말","02"=>"진료안내","03"=>"병원둘러보기","04"=>"오시는 길");
        break;
}

?>
<div class="js__sub__lnb border__box">
	<div class="js__lnb__title blue border__box">
		<?php echo $js_title ?>
	</div>	
	<ul class="js__lnb__ul border__box">
		<?php
		   foreach($js_array as $href => $js_value) {
         ?>
			<li class="js__lnb__li">
				<a href="/about/about.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
			</li>
        <?php } ?>
	</ul>
</div>

<script type="text/javascript">
		var aa = $(".js__sub__title").text();
		$('.js__lnb__click').each( function() {
			if (aa == $(this).text())  
			$(this).addClass('js__lnb__active_blue');    
		})
</script>