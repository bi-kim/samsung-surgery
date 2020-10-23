<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>
<?php echo poll('theme/basic'); // 설문조사 ?>
<div class="js__quick">
	<ul class="js__quick__ul after">
		<li class="js__quick__li quick__bg"><strong>Quick<br />menu</strong></li>
		<li class="js__quick__li"><a class="js__quick__click" href="tel:02-545-2021" title="실시간전화상담"><img class="js__quick__img" src="<?php echo G5_THEME_IMG_URL ?>/common/quick0.png" alt="실시간전화상담"><p class="js__quick__desc">실시간 <span class="block">전화상담</span></p></a></li>
		<li class="js__quick__li"><a class="js__quick__click" href="#none" title="카카오톡상담"><img class="js__quick__img" src="<?php echo G5_THEME_IMG_URL ?>/common/quick1.png" alt="카카오톡상담"><p class="js__quick__desc">카카오톡 <span class="block">상담</span></p></a></li>
		<li class="js__quick__li"><a class="js__quick__click" href="/bbs/board.php?bo_table=realstory" title="리얼스토리"><img class="js__quick__img" src="<?php echo G5_THEME_IMG_URL ?>/common/quick2.png" alt="리얼스토리"><p class="js__quick__desc">리얼 <span class="block">스토리</span></p></a></li>
		<li class="js__quick__li"><a class="js__quick__click" href="/about/about.php?code=04" title="찾아오시는길"><img class="js__quick__img" src="<?php echo G5_THEME_IMG_URL ?>/common/quick3.png" alt="찾아오시는길"><p class="js__quick__desc">찾아오시는 <span class="block">길</span></p></a></li>
		<li class="js__quick__li"><a class="js__quick__click" href="/bbs/board.php?bo_table=event" title="이벤트"><img class="js__quick__img" src="<?php echo G5_THEME_IMG_URL ?>/common/quick4.png" alt="이벤트"><span class="js__quick__desc">이벤트</span></a></li>
	</ul>
</div>
 <div id="ft">
    <div id="ft_copy">
        | 개인정보취급방침 | 이용약관 | <br />
		| 사업자등록번호:308-10-67073 | 대표자명:신현덕 | 서울특별시 강남구 청담동 2-6 UNIT빌딩 13,14층 | 의료기관 명칭:삼성라인성형외과 | Tel:02-545-2021 | <br />
		COPYRIGHT 2018. SAMSUNGLINE ALL RIGHT RESERVED.
    </div>
</div>



<?php

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
} 

?>
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>