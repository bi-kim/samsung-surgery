<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="삼성라인 지방성형";
		$js_array = array("01"=>"지방흡입","02"=>"종아리흡입","03"=>"부분지방흡입","04"=>"지방이식");
        break;
		case "02":
		$js_title ="삼성라인 지방성형";
		$js_array = array("01"=>"지방흡입","02"=>"종아리흡입","03"=>"부분지방흡입","04"=>"지방이식");
        break;
		case "03":
		$js_title ="삼성라인 지방성형";
		$js_array = array("01"=>"지방흡입","02"=>"종아리흡입","03"=>"부분지방흡입","04"=>"지방이식");
        break;
		case "04":
		$js_title ="삼성라인 지방성형";
		$js_array = array("01"=>"지방흡입","02"=>"종아리흡입","03"=>"부분지방흡입","04"=>"지방이식");
        break;
		case "05":
		$js_title ="삼성라인 지방성형";
		$js_array = array("01"=>"지방흡입","02"=>"종아리흡입","03"=>"부분지방흡입","04"=>"지방이식");
        break;
		case "06":
		$js_title ="삼성라인 지방성형";
		$js_array = array("01"=>"지방흡입","02"=>"종아리흡입","03"=>"부분지방흡입","04"=>"지방이식");
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
				<a href="/fat/fat.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
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