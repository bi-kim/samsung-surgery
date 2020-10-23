<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<style type="text/css">
		.bx-wrapper img {width:100%;}
		#about_pager {position:absolute; bottom:-50px; left:0;width:100%;}
	  #about_pager a {width:12.5%;display:block; float:left;position:relative;}
	  .black_box {display:block; position:absolute; top:0; left:0; width:100%;height:100%; background:#333; opacity:0.5;z-index:2}
	  #about_pager a:hover .black_box{display:none;}
	  #about_pager a.active .black_box{display:none;}
	  #about_pager img {width:100%;}

	
</style>	
<div class="js__sub__box">
	<div class="js__sub__content">
		<div class="js__sub__title__area border__box">
			<?php
				include_once(G5_THEME_MOBILE_PATH.'/about/path.php');	
			?>
			<div class="js__sub__title blue">병원둘러보기</div>
		</div>
		<div class="js__sub__content__box padding-top40 border__box about_map">
			<div class="js__content__area after">
				<ul class="about_slider">
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_0.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_1.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_2.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_3.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_4.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_5.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_6.jpg" /></li>
					<li><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_7.jpg" /></li>
				</ul>
				<div id="about_pager">
				  <a data-slide-index="0" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_0.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="1" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_1.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="2" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_2.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="3" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_3.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="4" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_4.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="5" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_5.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="6" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_6.jpg" /><span class="black_box"></span></a>
				  <a data-slide-index="7" href=""><img src="<?php echo G5_THEME_IMG_URL ?>/sub/about03_7.jpg" /><span class="black_box"></span></a>
				</div>
			</div>
			
		</div>
	</div>
	<?php
		include_once(G5_THEME_MOBILE_PATH.'/about/lnb.php');	
	?>
</div>

<script type="text/javascript">
	$(function(){
		$('.about_slider').bxSlider({
			auto:true,
			 pagerCustom: '#about_pager'
		});
	})
</script>




<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
