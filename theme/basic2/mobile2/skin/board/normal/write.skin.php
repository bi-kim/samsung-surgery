<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script type="text/javascript">
	$( function() {
	  $( "#reservation" ).datepicker({
			dateFormat: 'yy-mm-dd',
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			showMonthAfterYear: true,
			yearSuffix: '년'
		});
	  } );
</script>
<div class="js__sub__title__area board__no--padding board__main__title border__box">
	<?php
		include_once(G5_THEME_MOBILE_PATH.'/board/path.php');	
	?>
	<div class="js__sub__title"><?php echo $board['bo_subject']?></div>
</div> 
<div class="js__sub__box border__box board__common">
	<section id="bo_w">
		<!-- <h2 id="container_title"><?php echo $g5['title'] ?></h2> -->

		<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
		<input type="hidden" name="w" value="<?php echo $w ?>">
		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		<input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
		<input type="hidden" name="sca" value="<?php echo $sca ?>">
		<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
		<input type="hidden" name="stx" value="<?php echo $stx ?>">
		<input type="hidden" name="spt" value="<?php echo $spt ?>">
		<input type="hidden" name="sst" value="<?php echo $sst ?>">
		<input type="hidden" name="sod" value="<?php echo $sod ?>">
		<input type="hidden" name="page" value="<?php echo $page ?>">
		<input type="hidden" name="wr_1" value="">

		<?php
		$option = '';
		$option_hidden = '';
		if ($is_notice || $is_html || $is_secret || $is_mail) {
			$option = '';
			if ($is_notice) {
				$option .= PHP_EOL.'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice">공지</label>';
			}

			if ($is_html) {
				if ($is_dhtml_editor) {
					$option_hidden .= '<input type="hidden" value="html1" name="html">';
				} else {
					$option .= PHP_EOL.'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html">html</label>';
				}
			}

			if ($is_secret) {
				if ($is_admin || $is_secret==1) {
					$option .= PHP_EOL.'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret">비밀글</label>';
				} else {
					$option_hidden .= '<input type="hidden" name="secret" value="secret">';
				}
			}

			if ($is_mail) {
				$option .= PHP_EOL.'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail">답변메일받기</label>';
			}
		}

		echo $option_hidden;
		?>
		<div class="tbl_frm01 tbl_wrap">
			<table>
			<caption><?php echo $g5['title'] ?></caption>
			<tbody>
			<?php if ($is_category) { ?>
			<tr>
				<th scope="row"><label for="ca_name">상담종류<strong class="sound_only">필수</strong></label></th>
				<td>
					<select class="required" id="ca_name" name="ca_name" required>
						<option value="">선택하세요</option>
						<?php echo $category_option ?>
					</select>
				</td>
			</tr>
			<?php } ?>
			<?php if ($bo_table == "reservation") { ?>
			<tr>
				<th scope="row"><label for="reservation">상담일자<strong class="sound_only">필수</strong></label></th>
				<td>
					<input type="tel" name="wr_3" value="<?php echo $write['wr_3'] ?>" id="reservation" class="frm_input" maxlength="100" onkeyup="addDashMem(this)">
					<select name="wr_4" id="times">
						<option value="" selected>시간 선택</option>
						<option value="09:30">09:30</option>
						<option value="10:00">10:00</option>
						<option value="11:00">11:00</option>
						<option value="12:00">12:00</option>
						<option value="13:00">13:00</option>
						<option value="14:00">14:00</option>
						<option value="15:00">15:00</option>
						<option value="16:00">16:00</option>
						<option value="17:00">17:00</option>
						<option value="18:00">18:00</option>
					</select>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
				<td><input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required"></td>
			</tr>
			<tr>
				<th scope="row"><label for="wr_subject">수술부위<strong class="sound_only">필수</strong></label></th>
				<td>
				<ul class="infection after">
					<li><input type="checkbox" name="wr_value" value="눈" id="eye" /><label for="eye">눈</label></li>
					<li><input type="checkbox" name="wr_value" value="코" id="nose" /><label for="nose">코</label></li>
					<li><input type="checkbox" name="wr_value" value="안면윤곽" id="face" /><label for="face">안면윤곽</label></li>
					<li><input type="checkbox" name="wr_value" value="가슴" id="breast" /><label for="breast">가슴</label></li>
					<li><input type="checkbox" name="wr_value" value="체형" id="body" /><label for="body">체형</label></li>
					<li><input type="checkbox" name="wr_value" value="안티에이징" id="anti" /><label for="anti">안티에이징</label></li>
					<li><input type="checkbox" name="wr_value" value="보톡스,필러" id="Botox" /><label for="Botox">보톡스,필러</label></li>
					<li><input type="checkbox" name="wr_value" value="지방이식" id="fat" /><label for="fat">지방이식</label></li>
					<li><input type="checkbox" name="wr_value" value="자가혈피부재생술" id="recover" /><label for="recover">자가혈피부재생술</label></li>
					<li><input type="checkbox" name="wr_value" value="기타" id="etc" /><label for="etc">기타</label></li>
				</ul>
					
				</td>
			</tr>
			<?php if ($is_name) { ?>
			<tr>
				<th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
				<td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" maxlength="20"></td>
			</tr>
			<?php } ?>

			<?php if ($is_password) { ?>
			<tr>
				<th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
				<td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
			</tr>
			<?php } ?>

			<?php if ($is_email) { ?>
			<tr>
				<th scope="row"><label for="wr_email">답변메일</label></th>
				<td><input type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" maxlength="100"></td>
			</tr>
			<?php } ?>

			<tr>
				<th scope="row"><label for="wr_tel">연락처</label></th>
				<td><input type="tel" name="wr_2" value="<?php echo $member['mb_tel'] ?>" id="wr_tel" class="frm_input" maxlength="100" onkeyup="addDashMem(this)"></td>
			</tr>
			<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
			<tr>
				<th scope="row">첨부파일 #<?php echo $i+1 ?></th>
				<td>
					<input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input">
					<?php if ($is_file_content) { ?>
					<input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
					<?php } ?>
					<?php if($w == 'u' && $file[$i]['file']) { ?>
					<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i; ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')'; ?> 파일 삭제</label>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
			<?php if ($option) { ?>
			<tr>
				<th scope="row">옵션</th>
				<td><?php echo $option ?></td>
			</tr>
			<?php } ?>
			<tr>
				<th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
				<td class="wr_content">
					<?php if($write_min || $write_max) { ?>
					<!-- 최소/최대 글자 수 사용 시 -->
					<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
					<?php } ?>
					<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
					<?php if($write_min || $write_max) { ?>
					<!-- 최소/최대 글자 수 사용 시 -->
					<div id="char_count_wrap"><span id="char_count"></span>글자</div>
					<?php } ?>
				</td>
			</tr>

			

			<?php if ($is_guest) { //자동등록방지 ?>
			<tr>
				<th scope="row">자동등록방지</th>
				<td>
					<?php echo $captcha_html ?>
				</td>
			</tr>
			<?php } ?>

			</tbody>
			</table>
		</div>

		<div class="btn_confirm">
			<input type="submit" value="작성완료" id="btn_submit" class="btn_submit counsel_btn" accesskey="s">
			<a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">취소</a>
		</div>
		</form>
	</section>

<script>
<?php if($write_min || $write_max) { ?>
// 글자수 제한
var char_min = parseInt(<?php echo $write_min; ?>); // 최소
var char_max = parseInt(<?php echo $write_max; ?>); // 최대
check_byte("wr_content", "char_count");

$(function() {
    $("#wr_content").on("keyup", function() {
        check_byte("wr_content", "char_count");
    });

});

<?php } ?>
function html_auto_br(obj)
{
    if (obj.checked) {
        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
        if (result)
            obj.value = "html2";
        else
            obj.value = "html1";
    }
    else
        obj.value = "";
}

function fwrite_submit(f)
{
    <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>
	
    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": f.wr_subject.value,
            "content": f.wr_content.value
        },
        dataType: "json",
        async: false,
        cache: false,
        success: function(data, textStatus) {
            subject = data.subject;
            content = data.content;
        }
    });

    if (subject) {
        alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
        f.wr_subject.focus();
        return false;
    }

    if (content) {
        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
        if (typeof(ed_wr_content) != "undefined")
            ed_wr_content.returnFalse();
        else
            f.wr_content.focus();
        return false;
    }

    if (document.getElementById("char_count")) {
        if (char_min > 0 || char_max > 0) {
            var cnt = parseInt(check_byte("wr_content", "char_count"));
            if (char_min > 0 && char_min > cnt) {
                alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                return false;
            }
            else if (char_max > 0 && char_max < cnt) {
                alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                return false;
            }
        }
    }
	test = "";
	$("input[name=wr_value]:checked").each(function() {
	 test += $(this).val()+",";
	 f.wr_1.value = test;
	});
	

    <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>
</div>