<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="JS 줄기세포";
		$js_array = array("01"=>"JS 줄기세포","02"=>"줄기세포 치료","03"=>"면역세포 치료","04"=>"검사","05"=>"탈모","06"=>"영양주사");
        break;
		case "02":
		$js_title ="줄기세포 치료";
		$js_array = array("01"=>"JS 줄기세포","02"=>"줄기세포 치료","03"=>"면역세포 치료","04"=>"검사","05"=>"탈모","06"=>"영양주사");
        break;
		case "03":
		$js_title ="면역세포 치료";
		$js_array = array("01"=>"JS 줄기세포","02"=>"줄기세포 치료","03"=>"면역세포 치료","04"=>"검사","05"=>"탈모","06"=>"영양주사");
        break;
		case "04":
		$js_title ="검사";
		$js_array = array("01"=>"JS 줄기세포","02"=>"줄기세포 치료","03"=>"면역세포 치료","04"=>"검사","05"=>"탈모","06"=>"영양주사");
        break;
		case "05":
		$js_title ="탈모";
		$js_array = array("01"=>"JS 줄기세포","02"=>"줄기세포 치료","03"=>"면역세포 치료","04"=>"검사","05"=>"탈모","06"=>"영양주사");
        break;
		case "06":
		$js_title ="영양주사";
		$js_array = array("01"=>"JS 줄기세포","02"=>"줄기세포 치료","03"=>"면역세포 치료","04"=>"검사","05"=>"탈모","06"=>"영양주사");
        break;
}

?>
<div class="js__sub__lnb border__box">
	<div class="js__lnb__title orange border__box">
		<?php echo $js_title ?>
	</div>	
	<ul class="js__lnb__ul border__box">
		<?php
		   foreach($js_array as $href => $js_value) {
         ?>
			<li class="js__lnb__li">
				<a href="/anti/anti.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
			</li>
        <?php } ?>
	</ul>
</div>

<script type="text/javascript">
		var aa = $(".js__sub__title").text();
		$('.js__lnb__click').each( function() {
			if (aa == $(this).text())  
			$(this).addClass('js__lnb__active_orange');    
		})
</script>