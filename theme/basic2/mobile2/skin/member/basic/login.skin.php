<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>
<style>
body { background:#f5f6f7; margin:0; padding:0; font-family:dotum; }
#mb_login {width:80%; max-width: 460px; margin:0 auto; padding:0;}
#mb_login h1 { text-align:center; padding:0 0; margin:80px 0; }
#mb_login .login { position:relative; width:100%; display:block; background:#fff; border:#dadada 1px solid; margin:0 0 10px 0; height:50px; line-height:50px; }
#mb_login .login_label { position:absolute; left:-9999px; top:0px; font-size:14px; color:#999999; width:90%; max-width:460px; cursor:pointer; }
#mb_login .frm_input { background:#fff; margin:10px 15px; border:0; padding:0; font-size:14px; color:#333; height:28px; line-height:28px; }
#mb_login .btn_submit { width:100%; display:block; padding:0; height:60px; line-height:60px; font-size:18px; color:#fff; font-weight:bold; letter-spacing:normal; margin:30px 0 0 0; background:#a5cd47; }
#mb_login .auto { margin:15px 0 30px 0; position:relative; }
#mb_login .auto ul { display:inline-block; padding:0; margin:0; list-style:none; width:100%; }
#mb_login .auto .fl { float:left; color:#333333; cursor:pointer; }
#mb_login .auto .fr { float:right; }
#mb_login .auto .fr a { color:#333333; }
#mb_login .auto .auto_txt { position:absolute; background:#fffadc; font-size:11px; color:#777; border:#d8d1aa 1px solid; padding:10px; letter-spacing:-0.06em; left:0; top:22px; display:none; }
#mb_login #login_info { width:100%; display:inline-block; text-align:center; border-top:#e4e4e5 1px solid; padding:20px 0; }
#mb_login #login_info a { color:#999; display:inline-block; padding:0 0; }
.line { background:#e4e4e5; width:1px; height:10px; display:inline-block; margin:0 10px; }
.line2 { background:#b6b6b6; width:1px; height:10px; display:inline-block; margin:0 7px; }
#mb_login #login_ft { text-align:center; margin:50px 0; font-size:11px; }
#mb_login #login_ft p { font-family:verdana; font-size:10px; margin:15px 0; color:#333333; }
</style>
<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <h1><a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/common/logo.png" alt="<?php echo $config['cf_title']; ?>"></a></h1>

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">

    <fieldset id="login_fs">
        <legend>회원로그인</legend>
        
        <div class="login">
			<label for="login_id" class="login_label">회원아이디<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="mb_id" id="login_id" required class="frm_input" size="20" maxLength="20" placeholder="아이디">
		</div>
        <div class="login">
			<label for="login_pw" class="login_label">비밀번호<strong class="sound_only"> 필수</strong></label>
            <input type="password" name="mb_password" id="login_pw" required class="frm_input" size="20" maxLength="20"  placeholder="비밀번호">
		</div>
        
        <input type="submit" value="로그인" class="btn_submit">
        <div class="auto">
          <ul>
            <p class="auto_txt">개인정보 보호를 위해 <strong>개인 PC에서만 사용하세요.</strong></p>
        	<li class="fl"><input type="checkbox" name="auto_login" id="login_auto_login">
        	<label for="login_auto_login">로그인상태 유지</label></li>
            <li class="fr"><a href="<?php echo G5_URL ?>/">메인으로 돌아가기</a></li>
          </ul>
        </div>
    </fieldset>

    <aside id="login_info">
        <div>
            <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">아이디/비밀번호 찾기</a>
            <span class="line"></span>
            <a href="./register.php">회원가입</a>
        </div>
    </aside>
    
    <div id="login_ft">
        <div>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <span class="line2"></span>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy"><strong>개인정보취급방침</strong></a>
            <span class="line2"></span>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>            
        </div>
        <p>Copyright &copy; <b>www.jsraum.com</b> All rights reserved.</p>
    </div>
    

    </form>

    <?php // 쇼핑몰 사용시 여기부터 ?>
    <?php if ($default['de_level_sell'] == 1) { // 상품구입 권한 ?>

        <!-- 주문하기, 신청하기 -->
        <?php if (preg_match("/orderform.php/", $url)) { ?>

    <section id="mb_login_notmb">
        <h2>비회원 구매</h2>

        <p>
            비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.
        </p>

        <div id="guest_privacy">
            <?php echo $default['de_guest_privacy']; ?>
        </div>

        <label for="agree">개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.</label>
        <input type="checkbox" id="agree" value="1">

        <div class="btn_confirm">
            <a href="javascript:guest_submit(document.flogin);" class="btn02">비회원으로 구매하기</a>
        </div>

        <script>
        function guest_submit(f)
        {
            if (document.getElementById('agree')) {
                if (!document.getElementById('agree').checked) {
                    alert("개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.");
                    return;
                }
            }

            f.url.value = "<?php echo $url; ?>";
            f.action = "<?php echo $url; ?>";
            f.submit();
        }
        </script>
    </section>

        <?php } else if (preg_match("/orderinquiry.php$/", $url)) { ?>

    <fieldset id="mb_login_od">
        <legend>비회원 주문조회</legend>

        <form name="forderinquiry" method="post" action="<?php echo urldecode($url); ?>" autocomplete="off">

        <label for="od_id" class="od_id">주문서번호<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="od_id" value="<?php echo $od_id; ?>" id="od_id" required class="frm_input required" size="20">
        <label for="id_pwd" class="od_pwd">비밀번호<strong class="sound_only"> 필수</strong></label>
        <input type="password" name="od_pwd" size="20" id="od_pwd" required class="frm_input required">
        <input type="submit" value="확인" class="btn_submit">

        </form>
    </fieldset>

    <section id="mb_login_odinfo">
        <h2>비회원 주문조회 안내</h2>
        <p>메일로 발송해드린 주문서의 <strong>주문번호</strong> 및 주문 시 입력하신 <strong>비밀번호</strong>를 정확히 입력해주십시오.</p>
    </section>

        <?php } ?>

    <?php } ?>
    <?php // 쇼핑몰 사용시 여기까지 반드시 복사해 넣으세요 ?>

</div>

<script>

var frm_input = $('.login>.login_label').next('.frm_input');
$('.login>.login_label').css('position','absolute');
frm_input
	.focus(function(){
		$(this).prev('.login_label').css('visibility','hidden');
	})
	.blur(function(){
		if($(this).val() == ''){
			$(this).prev('.login_label').css('visibility','visible');
		} else {
			$(this).prev('.login_label').css('visibility','hidden');
		}
	})
	.change(function(){
		if($(this).val() == ''){
			$(this).prev('.login_label').css('visibility','visible');
		} else {
			$(this).prev('.login_label').css('visibility','hidden');
		}
	})
	.blur();

$(function(){
    $("#login_auto_login").click(function(){
            $(".auto_txt").toggle()
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->