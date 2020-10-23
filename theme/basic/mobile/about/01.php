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
			<div class="js__sub__title blue">인사말</div>
		</div>
		<div class="js__sub__content__box padding-top40 border__box">
			<div class="js__content__area after">
				<div class="js__content__img float__desc no--max about__img">
					<img class="js__img" src="<?php echo G5_THEME_IMG_URL ?>/sub/about01_0.jpg" alt="">
				</div>
				<div class="js__content__textarea js__row50 about__text">	
					<div class="js__content__title blue">
						같지만 다른 결과 삼성라인 성형!
					</div>		
					<div class="js__content__text">
						서울대학교 삼성 서울병원 출신 원장의 숙련된
						수술경험과 노하우를 바탕으로
						미의 새로운 패터다임을 창조합니다.
						가족처럼 때론 친구처럼 고객님의 작은 고민 하나까지도
						놓치지 않고 정확히 이해하고 판단하겠습니다
						고객님의 선택이 틀리지 않도록 언제나 고객님 곁을 지키는
						수호천사 같은 성형외과 !
						삼성라인입니다
						<p class="logo_content">
							<img src="<?php echo G5_THEME_IMG_URL ?>/common/logo.png" alt="" />
						</p>
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
