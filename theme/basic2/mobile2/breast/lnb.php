<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
		case "02":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
		case "03":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
		case "04":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
		case "05":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
        case "06":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
        case "07":
		$js_title ="가슴성형";
		$js_array = array("01"=>"FSP줄기세포","02"=>"유방확대수술","03"=>"유방축소수술","04"=>"유방하수","05"=>"함몰","06"=>"유두축소","07"=>"가슴재수술");
        break;
}

?>
<div class="js__sub__lnb border__box">
	<div class="js__lnb__title pink border__box">
		<?php echo $js_title ?>
	</div>	
	<ul class="js__lnb__ul border__box">
		<?php
		   foreach($js_array as $href => $js_value) {
         ?>
			<li class="js__lnb__li">
				<a href="/breast/breast.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
			</li>
        <?php } ?>
	</ul>
</div>

<script type="text/javascript">
		var aa = $(".js__sub__title").text();
		$('.js__lnb__click').each( function() {
			if (aa == $(this).text())  
			$(this).addClass('js__lnb__active_pink');    
		})
</script>