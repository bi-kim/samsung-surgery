<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<div class="js__sub__box">
	<div class="js__sub__content">
		<div class="js__sub__title__area border__box">
			<?php
				include_once(G5_THEME_MOBILE_PATH.'/about/path.php');	
			?>
			<div class="js__sub__title blue">진료안내</div>
		</div>
		<div class="js__sub__content__box padding-top40 border__box">
			<div class="js__content__area after">
				<div class="js__content__img float__desc no--max about__img">
					<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about02_0.jpg" alt="">
				</div>
				<div class="js__content__textarea js__row50 about__text">		
					<div class="js__content__text">
						<p class="logo_content">
							<img src="<?php echo G5_THEME_IMG_URL ?>/common/logo.png" alt="" />
						</p>
						삼성라인은 성형외과 전문의로서 직업적 양심을 걸고
						올바르고 양심적인 의술을 약속드립니다.
						또한, <span class="blue">고객님 한 분 한 분의 아름다움.
						그 안에 잠재되어 있는 최상의 미를 찾아드립니다.</span>
					</div>	
				</div>
			</div>
		</div>
		<div class="js__sub__content__box padding-top40 border__box">
			<div class="js__content__area after">
				<div class="js__content__textarea">	
					<div class="js__content__img">
						<ul class="js__row50__ul margin-no  after">
							<li>
								<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about02_1.jpg" alt="친절한 상담">
							</li>
							<li>
								<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about02_2.jpg" alt="마음과 정성을 다한 진료">
							</li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
		<div class="js__sub__content__box padding-top40 border__box">
			<div class="js__content__area after">
				<div class="js__content__textarea">	
					<div class="js__content__img">
						<ul class="js__row33__ul margin-no  after">
							<li>
								<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about01_1.jpg" alt="친절한 상담">
							</li>
							<li>
								<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about01_2.jpg" alt="마음과 정성을 다한 진료">
							</li>
							<li>
								<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about01_3.jpg" alt="정밀 분석단계">
							</li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<?php
		include_once(G5_THEME_MOBILE_PATH.'/about/lnb.php');	
	?>
</div>






<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
