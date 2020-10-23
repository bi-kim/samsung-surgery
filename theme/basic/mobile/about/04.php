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
			<div class="js__sub__title blue">오시는 길</div>
		</div>
		<div class="js__sub__content__box padding-top40 border__box about_map">
			<div class="js__content__area after">
				<!-- * Daum 지도 - 지도퍼가기 -->
				<!-- 1. 지도 노드 -->
				<div style="width:100%;" id="daumRoughmapContainer1584073337749" class="root_daum_roughmap root_daum_roughmap_landing"></div>

				<!--
					2. 설치 스크립트
					* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
				-->
				<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

				<!-- 3. 실행 스크립트 -->
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1584073337749",
						"key" : "xhfv",
						"mapHeight" : "300"
					}).render();
				</script>

				<div class="js__content__textarea">		
					<div class="js__content__text">
						서울특별시 강남구 청담동 2-6번지 UNIT빌딩 13,14층
						<br>
						<span class="blue">TEL.</span> 02-545-2021
					</div>
					<div class="js__content__text">
						<p class="blue">승용차 이용시</p>
						내비게이션 이용시 ‘삼성라인성형외과’ 로 검색하시면 쉽게 찾으실 수 있습니다.
					</div>	
					<div class="js__content__text">
						<p class="blue">지하철 이용시</p>
						지하철 7호선 강남구청역 3번 출구에서 500m 도보 (7~10분)
						<br>
						지하철 신분당선 압구정로데오역 4번 출구에서 300m 도보 (4~5분) 
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
