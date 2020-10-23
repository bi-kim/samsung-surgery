<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>



<script type="text/javascript">
	function notyet(){
		alert("준비중입니다.");
	}

	$(function(){

		$('.bx0').bxSlider({
			mode: 'horizontal',
			speed: 300,
			controls:false,
			auto:true
		});

		$('.bx1').bxSlider({
			mode: 'horizontal',
			speed: 500,
			controls:false,
			auto:true
		});
		
		$('.bx2').bxSlider({
			mode: 'horizontal',
			speed: 700,
			controls:false,
			auto:true
		});


		$('.bx3').bxSlider({
			mode: 'horizontal',
			speed: 900,
			controls:false,
			auto:true
		});

	 $main_btn = $(".js__gnb__title");
	 $main_ul = $(".js__gnb__ul");
	 $son_ul = $(".js_gnb__ul--son");

		$(".js__gnb__title").click(function(){
			$this = $(this);
			if (!$this.hasClass("title_on")){
				$son_ul.hide();
				$(".js__gnb__li").css({"background":"rgb(228, 231, 236)"})
				$(".js__gnb__click").css({"color":"#333"})
				$(".js__gnb__li").removeClass("on");

				$main_btn.removeClass("title_on");
				$main_ul.removeClass("on");
				$this.addClass("title_on");
				$this.next(".js__gnb__ul").addClass("on");
			}else {
				$son_ul.hide();
				$this.removeClass("title_on");
				$this.next(".js__gnb__ul").removeClass("on");
			}
			
		})
		$(".left__click").click(function(){
			$this = $(this);
			$index0 = $(this).index();
		
			if (!$this.hasClass("on")){
				$(".js__gnb__click").css({"color":"#333"})
				$(".left__click").css({"background":"#ebe6f7"})
				$son_ul.hide();
				$(".js__gnb__li").removeClass("on");
				$this.addClass("on");
				$this.css({"background":"#ebe6f7"})
					$this.children().css({"color":"#fff"});
				$(".left"+$index0+"").slideDown(200);
			} else {
				$this.removeClass("on");
				$this.children().css({"color":"#333"});
				$this.css({"background":"#ebe6f7"})
				$(".left"+$index0+"").slideUp(200);
			}
		})
		$(".right__click").click(function(){
			$this = $(this);
			$index0 = $(this).index();
			
			if (!$this.hasClass("on")){
				$(".js__gnb__click").css({"color":"#333"})
				$(".js__gnb__li").css({"background":"#ebe6f7"})
				$son_ul.hide();
				$(".right__click").removeClass("on");
				$this.css({"background":"#ebe6f7"})
				$this.addClass("on");
				$this.children().css({"color":"#fff"});
				$(".right"+$index0+"").slideDown(200);
			} else {
				$this.removeClass("on");
				$this.children().css({"color":"#333"});
				$this.css({"background":"#ebe6f7"})
				$(".right"+$index0+"").slideUp(200);
			}	
		});
		

		var now=false;
		$(".ham").click(function(){
			 if (now == false){
				$(".gnbWrap").animate({"right":"-297px"},200,"linear");
				$("#wrapper").animate({"left":"-290px"},200,"linear");
				$(".full").fadeIn(500);
				$(".gnbWrap").show();
				$(this).removeClass("menu_open");
				$(this).addClass("menu_open");
				now=true;
			 }else{
				$(".gnbWrap").animate({"right":"-297px"},200,"linear");
				$("#wrapper").animate({"left":"0"},200,"linear");
				$(".gnbWrap").hide();
				$(".full").fadeOut(500)
				$(this).removeClass("menu_open");
				now=false;
			 }
			$(".full").click(function(){
				$(".gnbWrap").animate({"right":"-297px"},200,"linear");
				$("#wrapper").animate({"left":"0"},200,"linear");
				$(".full").fadeOut(500);
				$(".gnbWrap").hide();
				$(".ham").removeClass("menu_open");
				now=false;
			});
		});

		$(".full").click(function(){
			$(".gnbWrap").stop().animate({"right":"-290px"},200,"linear")
			$(".full").fadeOut(500);
			$(".gnbWrap").hide();
			$(".ham").removeClass("menu_open");
		});

		$(".g_li_a").click(function(){
			if (!$(this).hasClass("view")){
				$(".g_li_a").removeClass("view");
				$(this).addClass("view");
				$(".arrow").removeClass("view")
				$(this).prev(".arrow").addClass("view");
				$(".g_li_sub").slideUp(500)
				$(this).next(".g_li_sub").slideDown(500);
			}else{
				$(".g_li_a, .arrow").removeClass("view");
				$(this).next(".g_li_sub").slideUp(500);
				$(this).css({"borderBottom":"0"})
			}
		});
		
		var aa = $(".js__sub__title").text();
		$('.js__lnb__click').each( function() {
			if (aa == $(this).text())  
			$(this).addClass('js__lnb__active');    
		})

		mid_tit = $(".js__lnb__title ").text();
		sub_tit = $(".js__sub__title ").text();
		$("#path__middle__title").html(mid_tit)
		$("#path__sub__title").html(sub_tit)
		
		
	});
</script>
<style type="text/css">
	.bx-wrapper {margin:0}
	.bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {bottom:13px;}
	.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus {background:#ebe6f7}
	.bx-wrapper .bx-pager.bx-default-pager a {background:#fff;}
	.js__main__li:nth-child(3) .bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto,
	.js__main__li:nth-child(4) .bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {
    right: 0;
    width: 30%;}

</style>
<div id="wrapper">
	<header id="hd">
		<h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
		<div class="to_content"><a href="#container">본문 바로가기</a></div>
		<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
		} ?>	
		<div id="hd_wrapper" class="after">
			<div id="logo">
				<a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/common/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
			</div>
			<ul id="hd_nb">
				<?php if ($is_member) { ?>
				<?php if ($is_admin) { ?>
				<li><a href="<?php echo G5_ADMIN_URL ?>" id="snb_adm"><b>관리자</b></a></li>
				<?php } ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" id="snb_modify">정보수정</a><span class="hd__pipe">|</span></li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php" id="snb_logout">로그아웃</a><span class="hd__pipe">|</span></li>
				<li><a href="#none">사이트 맵</a></li>
				<?php } else { ?>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php" id="snb_join">회원가입</a><span class="hd__pipe">|</span></li>
				<li><a href="<?php echo G5_BBS_URL ?>/login.php" id="snb_login">로그인</a><span class="hd__pipe">|</span></li>
				<li><a href="#none">사이트 맵</a></li>
				<?php } ?>
			</ul>
			<p class="ham menu_btn mo" title="ham">
				<span class="hambar hambar1"></span>
				<span class="hambar hambar2"></span>
				<span class="hambar hambar3"></span>
				<span class="hambar hambar4"></span>
				<span class="hambar hambar5"></span>
				<span class="hambar hambar6"></span>
			</p>
		</div>
		<div class="js__gnb__wrap after pc">
			<div class="js__gnb">
				<h3 class="js__gnb__title js__gnb__title__left">
					Samsung Line Information
					<span class="js__gnb__title__arrow"></span>
				</h3>
				<ul class="js__gnb__ul border__box after">
					<li class="js__gnb__li left__click border__box">
						<a class="js__gnb__click" href="/about/about.php?code=01">
							인사말
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li left__click border__box">
						<a class="js__gnb__click" href="/about/about.php?code=02">
							진료안내
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li left__click border__box">
						<a class="js__gnb__click" href="/about/about.php?code=03">
							병원둘러보기
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li left__click border__box">
						<a class="js__gnb__click" href="/about/about.php?code=04">
							오시는 길
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li left__click border__box">
						<a class="js__gnb__click" href="#none">
							커뮤니티
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li border__box">
					</li>
				</ul>
				<ul class="js_gnb__ul--son left4 border__box after">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/bbs/board.php?bo_table=counsel">온라인상담</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/bbs/board.php?bo_table=before_after">전후사진</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/bbs/board.php?bo_table=notice">공지사항</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/bbs/board.php?bo_table=event">이벤트</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/bbs/board.php?bo_table=news">언론자료</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/bbs/board.php?bo_table=realstory">리얼스토리</a></li>
				</ul>
			</div>
			<div class="js__gnb js__gnb__right">
				<h3 class="js__gnb__title js__gnb__title__right">
					Samsung Line Medical
					<span class="js__gnb__title__arrow"></span>
				</h3>
				<ul class="js__gnb__ul border__box after">
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							눈성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							코 성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							가슴성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click" href="#none">
							윤곽성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							라인성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							지방성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							남자성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
					<li class="js__gnb__li right__click border__box">
						<a class="js__gnb__click"href="#none">
							동안성형
							<span class="js__gnb__click--arrow">
								&gt;
							</span>
						</a>
					</li>
				</ul>
				<ul class="js_gnb__ul--son right0 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=01">매몰</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=02">절개</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=03">눈매교정</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=04">앞,뒷트임</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=05">상,하안검</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=06">눈밑성형</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=07">자연유착</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/eye/eye.php?code=08">눈재수술</a></li>
				</ul>
				<ul class="js_gnb__ul--son right1 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=01">긴코 & 화살코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=02">낮은코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=03">들창코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=04">짧은코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=05">매부리코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=06">휜코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=07">복코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/nose/nose.php?code=08">코재수술</a></li>
				</ul>
				<ul class="js_gnb__ul--son right2 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=01">FSP줄기세포 </a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=02">유방확대수술</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=03">유방축소수술</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=04">유방하수</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=05">함몰</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=05">유두축소</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/breast/breast.php?code=05">가슴재수술</a></li>
				</ul>
				<ul class="js_gnb__ul--son right3 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/faceline/faceline.php?code=01">양악</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/faceline/faceline.php?code=02">광대</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="javascript:notyet();">돌출입</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/faceline/faceline.php?code=04">사각턱</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/faceline/faceline.php?code=05">주걱턱</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/faceline/faceline.php?code=06">긴턱</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/faceline/faceline.php?code=07">무턱</a></li>
				</ul>
				<ul class="js_gnb__ul--son right4 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/line/line.php?code=01">이마라인</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/line/line.php?code=02">윤곽라인</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/line/line.php?code=03">힙업라인</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/line/line.php?code=04">코르셋복부</a></li>
				</ul>
				<ul class="js_gnb__ul--son right5 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/fat/fat.php?code=01">지방흡입</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/fat/fat.php?code=02">종아리지방흡입</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/fat/fat.php?code=03">부분지방흡입</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/fat/fat.php?code=04">지방이식 </a></li>
				</ul>
				<ul class="js_gnb__ul--son right6 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/man/man.php?code=01">남자코</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/man/man.php?code=02">복근</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/man/man.php?code=03">눈메</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/man/man.php?code=04">여유증 </a></li>
				</ul>
				<ul class="js_gnb__ul--son right7 border__box">
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/baby/baby.php?code=01">엔도타인</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/baby/baby.php?code=02">안면거상</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/baby/baby.php?code=03">헤어라인</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/baby/baby.php?code=04">필러</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/baby/baby.php?code=05">보톡스</a></li>
					<li class="js_gnb__li--son border__box"><a class="js_gnb__click--son" href="/baby/baby.php?code=06">레이저</a></li>
				</ul>
			</div>
		</div>
		<div class="full"></div>
		<div class="gnbWrap">
			<ul class="gnb after">
				<li class="g_title">
					SAMSUNG LINE PLASTIC SURGERY
				</li>
				<li class="g_li">
					<span class="arrow"></span>
					<a href="/about/about.php?code=01" class="g_li_a">인사말</a>
				</li>
				<li class="g_li">
					<span class="arrow"></span>
					<a href="/about/about.php?code=02" class="g_li_a">진료안내</a>
				</li>
				<li class="g_li">
					<a href="/about/about.php?code=03" class="g_li_a">병원둘러보기</a>
				</li>
				<li class="g_li">
					<a href="/about/about.php?code=04" class="g_li_a">오시는 길</a>
				</li>
				<li class="g_li">
					<span class="arrow">&#x025BE;</span>
					<a href="#none" class="g_li_a">커뮤니티</a>
					<ul class="g_li_sub">
						<li><a href="/bbs/board.php?bo_table=counsel">온라인상담</a></li>
						<li><a href="/bbs/board.php?bo_table=before_after">전후사진</a></li>
						<li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
						<li><a href="/bbs/board.php?bo_table=event">이벤트</a></li>
						<li><a href="/bbs/board.php?bo_table=news">언론자료</a></li>
						<li><a href="/bbs/board.php?bo_table=realstory">리얼스토리</a></li>	
					</ul>
				</li>
				<li class="g_title">
					SamsungLine 수술정보
				</li>
				<li class="g_li">
					<a href="javascript:notyet();" class="g_li_a">성형외과</a>
				</li>
				<li class="g_li">
					<span class="arrow">&#x025BE;</span>
					<a href="#none" class="g_li_a">코 성형</a>
					<ul class="g_li_sub">
						<li><a href="/nose/nose.php?code=01">긴코 & 화살코</a></li>
						<li><a href="/nose/nose.php?code=02">리프팅</a></li>
						<li><a href="/nose/nose.php?code=03">여드름,흉터</a></li>
						<li><a href="/nose/nose.php?code=04">기미,색소,미백,홍조</a></li>
						<li><a href="/nose/nose.php?code=05">주름,탄력,모공</a></li>
						<li><a href="/nose/nose.php?code=06">백반증</a></li>
					</ul>
				</li>
				<li class="g_li">
				<span class="arrow">&#x025BE;</span>
					<a href="#none" class="g_li_a">가슴성형 클리닉</a>
					<ul class="g_li_sub">
						<li><a href="/breast/breast.php?code=01">레이저질타이트닝</a></li>
						<li><a href="/breast/breast.php?code=02">소음순,유두 미백</a></li>
						<li><a href="/breast/breast.php?code=03">레이저질성형</a></li>
						<li><a href="/breast/breast.php?code=04">레이저소음순</a></li>
						<li><a href="/breast/breast.php?code=05">음핵성형,처녀막,양귀비</a></li>
					</ul>
				</li>
				<li class="g_li">
					<span class="arrow">&#x025BE;</span>
					<a href="#none" class="g_li_a">윤곽성형</a>
					<ul class="g_li_sub">
						<li><a href="/faceline/faceline.php?code=01">양악</a></li>
						<li><a href="/faceline/faceline.php?code=02">광대</a></li>
						<li><a href="javascript:notyet();">돌출입</a></li>
						<li><a href="/faceline/faceline.php?code=04">사각턱</a></li>
						<li><a href="/faceline/faceline.php?code=05">주걱턱</a></li>
						<li><a href="/faceline/faceline.php?code=06">긴턱</a></li>
						<li><a href="/faceline/faceline.php?code=07">무턱</a></li>
					</ul>
				</li>
				<li class="g_li">
					<a href="#none" class="g_li_a">라인성형</a>
					<ul class="g_li_sub">
						<li><a href="/line/line.php?code=01">이마라인</a></li>
						<li><a href="/line/line.php?code=02">윤곽라인 </a></li>
						<li><a href="/line/line.php?code=03">힙업라인</a></li>
						<li><a href="/line/line.php?code=04">코르셋복부</a></li>
					</ul>					
				</li>
				<li class="g_li">
					<span class="arrow">&#x025BE;</span>
					<a href="#none" class="g_li_a">지방성형</a>
					<ul class="g_li_sub">
						<li><a href="/fat/fat.php?code=01">지방흡입</a></li>
						<li><a href="/fat/fat.php?code=02">종아리지방흡입</a></li>
						<li><a href="/fat/fat.php?code=03">부분지방흡입</a></li>
						<li><a href="/fat/fat.php?code=04">지방이식</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</header>
    <div id="container">
