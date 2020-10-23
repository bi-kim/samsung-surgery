<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "02":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "03":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "04":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "05":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "06":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "07":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
        break;
		case "08":
		$js_title ="삼성라인 코성형";
		$js_array = array("01"=>"긴코 & 화살코","02"=>"낮은코","03"=>"들창코","04"=>"짧은코","05"=>"매부리코","06"=>"휜 코","07"=>"복 코","08"=>"코재수술");
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
				<a href="/nose/nose.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
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