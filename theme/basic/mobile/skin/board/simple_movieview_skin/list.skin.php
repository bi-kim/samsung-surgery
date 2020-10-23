<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>



<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:<?php echo $width; ?>">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    
    
    <div style='margin:0 auto;'>
	    
	    <div style='text-align: center;float:left;border: 1px solid #e9e9e9;padding: 20px;'>
	    	<?
	    		
	    		$view_num = $_REQUEST['view_num'];
	    		
	    		if($view_num == ''){
		    		$view_num = 0;
	    		}
	    		
	    		$main_wr_id = $list[$view_num]['wr_id'];
	    		
	    		$sql = "select * from g5_write_$bo_table where wr_id='".$main_wr_id."'";
	    		
	    		$query = mysql_query($sql);
	    		
	    		$item = mysql_fetch_array($query);
	    		
	    		$wr_content = $item['wr_content'];
	    		
	    		
	    		$p_page = $page - 1;
	    		$n_page = $page + 1;
	    		if($p_page <= 0){
		    		$p_page = 1;
	    		}
	    		
	    		if($n_page > $total_page){
		    		$n_page = $total_page;
	    		}
	    	?>
	    	<br>
	    	<span style='font-size:24px'><strong><?=$item['wr_subject']?></strong></span><br><br>
	    	<?=$wr_content?>
	    	<?if($is_admin){?>
	    	<div style='text-align:right'>
				<a href="/bbs/board.php?bo_table=<?=$bo_table?>&wr_id=<?=$main_wr_id?>">[수정]</a>
	    	</div>
	    	<?}?>
		     
		     
	    </div>
	    
	    
	    <div style='float:left;margin-bottom: 10px;'>
			<form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
			    <input type="hidden" name="stx" value="<?php echo $stx ?>">
			    <input type="hidden" name="spt" value="<?php echo $spt ?>">
			    <input type="hidden" name="page" value="<?php echo $page ?>">
			    <input type="hidden" name="sw" value="">
			    <?php if ($is_checkbox) { ?>
			    <div id="gall_allchk" style='margin: 10px;padding: 10px;text-align: right;'>
			        현재 페이지 게시물 전체 <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
			    </div>
			    <?php } ?>
			    
			    <ul id="gall_ul" style='text-align: center;margin-left: 130px;width: 200px;'>
		        
		        <?php for ($i=0; $i<count($list); $i++) {
		            if($i>0 && ($i % $bo_gallery_cols == 0))
		                $style = 'clear:both;';
		            else
		                $style = '';
		            if ($i == 0) $k = 0;
		            $k += 1;
		            if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
		         ?>
		        <li class="gall_li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?>" style="<?php echo $style ?>width:<?php echo $board['bo_gallery_width'] ?>px">
		            <?php if ($is_checkbox) { ?>
		            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
		            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
		            <?php } ?>
		            <span class="sound_only">
		                <?php
		                if ($wr_id == $list[$i]['wr_id'])
		                    echo "<span class=\"bo_current\">열람중</span>";
		                else
		                    echo $list[$i]['num'];
		                 ?>
		            </span>
		            <ul class="gall_con" style='margin-top: 10px;'>
		                <li class="gall_href" style='border:1px solid #333'>
		                	<? 
		                		$href = basename($_SERVER["PHP_SELF"])."?bo_table=".$bo_table."&view_num=".$i."&page=".$page; // 현재 페이지 
		                	?>
		                    <a href="<?=$href?>">
		                    <?php
		                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);
		
		                        if($thumb['src']) {
		                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="168px" height="'.$board['bo_gallery_height'].'">';
		                        } else {
		                            $img_content = '<span style="width:168px;height:'.$board['bo_gallery_height'].'px">no image</span>';
		                        }
		
		                        echo $img_content;
		                   
		                     ?>
		                    </a>
		                </li>
		                <li class="gall_text_href" style="width:<?php echo $board['bo_gallery_width'] ?>px">
		                    <a href="<?php echo $list[$i]['href'] ?>">
		                        <?php echo $list[$i]['subject'] ?>
		                    </a>
		                </li>
		                
		            </ul>
		        </li>
		        <?php } ?>
		        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
		    </ul>
			     
			     
			</form>
	    	
	    	
	    	
	    	<div>
	    		<a href="<?=basename($_SERVER["PHP_SELF"])."?bo_table=".$bo_table."&page=".$p_page; ?>"><img src="<?=$board_skin_url?>/img/gr_icon01.png" style='margin-left: 125px;width:20px'></a>
				<a href="<?=basename($_SERVER["PHP_SELF"])."?bo_table=".$bo_table."&page=".$n_page; ?>"><img src="<?=$board_skin_url?>/img/gr_icon02.png" style='margin-left: 137px;width:20px'></a> 
	    	</div>
	    	
	    	
		  
		</div>
		
		
		
	    
    </div>
    
   

    <div style='float:left;width:100%'>
    	<?php
	    	// 코멘트 입출력
	    	$wr_id = $main_wr_id;
	    	include_once('./view_comment.php');
	    ?>
    </div>
    	
    
     
    </form>


	<?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx" style='float: left;width: 100%;'>
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    




<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>


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
<!-- } 게시판 목록 끝 -->
