<?php
$js_title ="";
$js_array = array();

switch($code){
		case "01":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "02":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "03":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "04":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "05":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "06":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "07":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
        break;
		case "08":
		$js_title ="삼성라인 눈성형";
		$js_array = array("01"=>"매몰","02"=>"절개","03"=>"눈매교정","04"=>"앞,뒷트임","05"=>"상,하안검","06"=>"눈밑성형","07"=>"자연유착","08"=>"눈재수술");
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
				<a href="/eye/eye.php?code=<?php echo $href ?>" class="js__lnb__click"><?php echo $js_value?></a>
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