<?php
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

auth_check($auth[$sub_menu], "w");

$pb_id = preg_replace('/[^0-9]/', '', $pb_id);

$html_title = "pb_banner";

if ($w == "u")
{
    $html_title .= " 수정";
    $sql = " select * from {$g5['popup_banner']} where pb_id = '$pb_id' ";
    $pb = sql_fetch($sql);
    if (!$pb['pb_id']) alert("등록된 자료가 없습니다.");
}
else
{
    $html_title .= " 입력";
    $pb['pb_disable_hours'] = 24;
}

$g5['title'] = $html_title;
include_once ('./admin.head.php');
?>

<form name="frmnewwin" action="./bannerformupdate.php" onsubmit="return frmnewwin_check(this);" method="post">
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="pb_id" value="<?php echo $pb_id; ?>">
<input type="hidden" name="token" value="">

<div class="local_desc01 local_desc">
    <p>설정</p>
</div>

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row"><label for="pb_use">사용</label></th>
        <td>
            <?php echo help("사용유무를 결정합니다."); ?>
            <select name="pb_use" id="pb_use">
                <option value="1" <?php echo get_selected($pb['pb_use'], 1); ?>>사용</option>
                <option value="0" <?php echo get_selected($pb['pb_use'], 0); ?>>사용안함</option>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="bn_order">출력 순서</label></th>
        <td>
           <?php echo help("배너를 출력할 때 순서를 정합니다. 숫자가 작을수록 먼저 출력됩니다."); ?>
           <?php echo order_select("pb_order", $pb['pb_order']); ?>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="pb_disable_hours">시간<strong class="sound_only"> 필수</strong></label></th>
        <td>
            <?php echo help("다시 보지 않음을 선택할 시 몇 시간동안 팝업레이어를 보여주지 않을지 설정합니다. 가장 낮은값이 적용됩니다."); ?>
            <input type="text" name="pb_disable_hours" value="<?php echo $pb['pb_disable_hours']; ?>" id="pb_disable_hours" required class="frm_input required" size="5"> 시간
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="pb_begin_time">시작일시<strong class="sound_only"> 필수</strong></label></th>
        <td>
            <input type="text" name="pb_begin_time" value="<?php echo $pb['pb_begin_time']; ?>" id="pb_begin_time" required class="frm_input required" size="21" maxlength="19">
            <label for="pb_begin_chk">
            <input type="checkbox" name="pb_begin_chk" value="<?php echo date("Y-m-d 00:00:00", G5_SERVER_TIME); ?>" id="pb_begin_chk" onclick="if (this.checked == true) this.form.pb_begin_time.value=this.form.pb_begin_chk.value; else this.form.pb_begin_time.value = this.form.pb_begin_time.defaultValue;">
     		 시작일시를 오늘로
            </label>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="pb_end_time">종료일시<strong class="sound_only"> 필수</strong></label></th>
        <td>
            <input type="text" name="pb_end_time" value="<?php echo $pb['pb_end_time']; ?>" id="pb_end_time" required class="frm_input required" size="21" maxlength="19">
            <label for="pb_end_chk">
            <input type="checkbox" name="pb_end_chk" value="<?php echo date("Y-m-d 23:59:59", G5_SERVER_TIME+(60*60*24*7)); ?>" id="pb_end_chk" onclick="if (this.checked == true) this.form.pb_end_time.value=this.form.pb_end_chk.value; else this.form.pb_end_time.value = this.form.pb_end_time.defaultValue;">
           	 종료일시를 오늘로부터 7일 후로
            </label>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="pb_subject">팝업 제목<strong class="sound_only"> 필수</strong></label></th>
        <td>
            <input type="text" name="pb_subject" value="<?php echo stripslashes($pb['pb_subject']) ?>" id="pb_subject" required class="frm_input required" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="pb_content">내용</label></th>
        <td>
        	<?php echo help("조회수 체크를 원하신다면, 링크 거실때  http://도메인/plugin/pb_banner/bannerhit.php?pb_id=id값&url=링크주소 이렇게 넣어주세요"); ?>
        	<?php echo help("링크 ex)http://example.com/plugin/pb_banner/bannerhit.php?pb_id=1&url=http://example.com"); ?>
        	<?php echo editor_html('pb_content', get_text($pb['pb_content'], 0)); ?>
        </td>
    </tr>
    </tbody>
    </table>
</div>

<div class="btn_confirm01 btn_confirm">
    <input type="submit" value="확인" class="btn_submit" accesskey="s">
</div>
</form>

<script>
function frmnewwin_check(f)
{
    errmsg = "";
    errfld = "";

    <?php echo get_editor_js('pb_content'); ?>

    check_field(f.pb_subject, "제목을 입력하세요.");

    if (errmsg != "") {
        alert(errmsg);
        errfld.focus();
        return false;
    }
    return true;
}
</script>

<footer class="ft">
    <p>
        Copyright © Hail. All rights reserved.<br>
    </p>
</footer>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
