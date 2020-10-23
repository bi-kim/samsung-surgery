<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_javascript("<script src=\"".$board_skin_url."/js/slide.js\"></script>",0);
?>

<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>

<div class="js__sub__title__area board__no--padding board__main__title border__box">
	<?php
		include_once(G5_THEME_MOBILE_PATH.'/board/path.php');	
	?>
	<div class="js__sub__title"><?php echo $board['bo_subject']?></div>
</div> 

<div class="js__sub__box border__box board__common">
	<!-- <h2 id="container_title"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?><span class="sound_only"> 목록</span></h2> -->

	<!-- 게시판 목록 시작 -->
	<div id="bo_gall">
		<?php if ($is_category) { ?>
		<nav id="bo_cate">
			<h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
			<ul id="bo_cate_ul" class="after">
				<?php echo $category_option ?>
			</ul>
		</nav>
		<?php } ?>

		<div class="bo_fx">
			<div id="bo_list_total">
				<span>Total <?php echo number_format($total_count) ?>건</span>
				<?php echo $page ?> 페이지
			</div>

			<?php if ($rss_href || $write_href) { ?>
			<ul class="btn_bo_user">
				<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
				<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
				<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
			</ul>
			<?php } ?>
		</div>

		<form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
		<input type="hidden" name="stx" value="<?php echo $stx ?>">
		<input type="hidden" name="spt" value="<?php echo $spt ?>">
		<input type="hidden" name="sst" value="<?php echo $sst ?>">
		<input type="hidden" name="sod" value="<?php echo $sod ?>">
		<input type="hidden" name="page" value="<?php echo $page ?>">
		<input type="hidden" name="sw" value="">

		<h2>이미지 목록</h2>

		<?php if ($is_checkbox) { ?>
		<div id="gall_allchk">
			<label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
			<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
		</div>
		<?php } ?>

		<div class="gallery-wrap">
    <div class="gallery-mask">
		<ul id="gall_uls" class="gallery">
			<?php for ($i=0; $i<count($list); $i++) { ?>
			<li>
				<?php if($is_admin) {?>
				<a href="<?php echo $list[$i]['href'] ?>">
				     <?php if ($is_checkbox) { ?>
									
										<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
										<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
									<?php } ?>
				<?} else {?>
				<a href="#none">
				<?} ?>
				<?php
					$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

					if($thumb['src']) {
						$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
					} else {
						$img_content = '<span class="no_image">no image</span>';
					}

					echo $img_content;
				 ?>
				</a>
			</li>
			<?php } ?>
			<?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
		</ul>
	   </div>
		<span href="#" id="gallery-prev" class="btngall prev"></span>
		<span href="#" id="gallery-next" class="btngall next"></span>
			 <div class="pager-wrap">
		<div class="pager-mask">
			<div id="gallery-pager" class="pager">
				<?php for ($i=0; $i<count($list); $i++) { ?>
					<a href="#" data-slide-index="<?php echo $i;?>"><span>
					<?php
				 
						$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

						if($thumb['src']) {
							$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
						} else {
							$img_content = '<span class="no_image">no image</span>';
						}

						echo $img_content;
					
					 ?>
					</span>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="pagination">
		<a href="#" id="prev-item-s" class="prev">이전</a>
		<span class="total"><em id="current-item">1</em> / <span class="total-item"></span></span>
		<a href="#" id="next-item-s" class="next">다음</a>
	</div>
	</div>


		<?php if ($list_href || $is_checkbox || $write_href) { ?>
		<div class="bo_fx">
			<ul class="btn_bo_adm">
				<?php if ($list_href) { ?>
				<li><a href="<?php echo $list_href ?>" class="btn_b01"> 목록</a></li>
				<?php } ?>
				<?php if ($is_checkbox) { ?>
				<li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
				<li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
				<li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
				<?php } ?>
			</ul>

			<ul class="btn_bo_user">
				<li><?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a><?php } ?></li>
			</ul>
		</div>
		<?php } ?>

		</form>
	</div>


<script>
$(window).on("load", function() {
    $("#gall_ul").fancyList(".gall_li", "gall_clear");
});
</script>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->
</div>
