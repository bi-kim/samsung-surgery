<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<?php include_once G5_PLUGIN_PATH.'/pb_banner/pb_banner.php';?>
<style type="text/css">
	/* body {height:100%} */
</style>

<div class="js__block">
 <ul class="js__main__ul after">
	<li class="js__main__li">
		
		<div class="slide">
			<ul class="bx0">

				<li>
					<a class="js__main__click" href="/eye/eye.php?code=03">					
						<div class="js__over"></div>
						<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big0.jpg" alt="여자눈매" />
					</a>				
				</li>

				<li >
					<a class="js__main__click" href="/nose/nose.php?code=02">
						<div class="js__over"></div>
						<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big1.jpg" alt="낮은코" />
					</a>
				</li>
								<li>
					<a class="js__main__click" href="/fat/fat.php?code=01">
						<div class="js__over"></div>
						<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big2.jpg" alt="지방흡입" />
					</a>
				</li>
								<li>
					<a class="js__main__click" href="/breast/breast.php?code=02">
						<div class="js__over"></div>
						<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big3.jpg" alt="가슴성형" />
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="js__main__li">
		<ul class="bx1">
			<li>
				<a class="js__main__click" href="/man/man.php?code=01">
					<div class="js__over"></div>
					<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big4.jpg" alt="남자코" />
				</a>
			</li>
			<li>
				<a class="js__main__click" href="/man/man.php?code=03">
					<div class="js__over"></div>
					<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big5.jpg" alt="남자눈매" />
				</a>
			</li>
						<li>
				<a class="js__main__click" href="/line/line.php?code=04">
					<div class="js__over"></div>
					<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big6.jpg" alt="코르셋복부" />
				</a>
			</li>
			<li>
				<a class="js__main__click" href="/breast/breast.php?code=01">
					<div class="js__over"></div>
					<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/big7.jpg" alt="줄기세포" />
				</a>
			</li>
		</ul>
	</li>
	<li class="js__main__li">
		<ul class="bx2">
			<li>
				<a class="js__main__click" href="/bbs/board.php?bo_table=before_after">
					<div class="js__over"></div>
					<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/middle1.jpg" alt="후기" />
				</a>
			</li>
		</ul>
	</li>
	<li class="js__main__li">
		<ul class="bx3">
			<li>
				<a class="js__main__click" href="/bbs/board.php?bo_table=event">
					<div class="js__over"></div>
					<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/middle5.jpg" alt="이벤트" />
				</a>
			</li>
		</ul>
	</li>
	<li class="js__main__li">
		<a class="js__main__click" href="/bbs/board.php?bo_table=news">
			<div class="js__over"></div>
			<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/small0.jpg" alt="" />
		</a>
	</li>
	<li class="js__main__li">
		<a class="js__main__click" href="/about/about.php?code=02">
			<div class="js__over"></div>
			<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/middle2.jpg" alt="" />
		</a>
	</li>
	<li class="js__main__li">
		<a class="js__main__click" href="/about/about.php?code=03">
			<div class="js__over"></div>
			<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/middle3.jpg" alt="" />
		</a>
	</li>
	<li class="js__main__li">
		<a class="js__main__click" href="/about/about.php?code=04">
			<div class="js__over"></div>
			<img class="js__main__img" src="<?php echo G5_THEME_IMG_URL ?>/main/small1.jpg" alt="" />
		</a>
	</li>
 </ul>
</div>

<div class="boxx">
</div>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>