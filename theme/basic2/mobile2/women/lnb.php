<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="레이저 질 타이트닝";
		$js_array = array("01"=>"레이저 질 타이트닝","02"=>"소음순,유두 미백","03"=>"레이저 질 성형","04"=>"레이저 소음순 성형","05"=>"레이저 음핵,처녀막,양귀비");
        break;
		case "02":
		$js_title ="소음순,유두 미백";
		$js_array = array("01"=>"레이저 질 타이트닝","02"=>"소음순,유두 미백","03"=>"레이저 질 성형","04"=>"레이저 소음순 성형","05"=>"레이저 음핵,처녀막,양귀비");
        break;
		case "03":
		$js_title ="레이저 질 성형";
		$js_array = array("01"=>"레이저 질 타이트닝","02"=>"소음순,유두 미백","03"=>"레이저 질 성형","04"=>"레이저 소음순 성형","05"=>"레이저 음핵,처녀막,양귀비");
        break;
		case "04":
		$js_title ="레이저 소음순 성형";
		$js_array = array("01"=>"레이저 질 타이트닝","02"=>"소음순,유두 미백","03"=>"레이저 질 성형","04"=>"레이저 소음순 성형","05"=>"레이저 음핵,처녀막,양귀비");
        break;
		case "05":
		$js_title ="레이저 음핵,처녀막,양귀비";
		$js_array = array("01"=>"레이저 질 타이트닝","02"=>"소음순,유두 미백","03"=>"레이저 질 성형","04"=>"레이저 소음순 성형","05"=>"레이저 음핵,처녀막,양귀비");
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
				<a href="/women/women.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
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