<?php
include_once('./_common.php');

// Install Db popup_banner  - pb_division : 쇼핑몰커뮤니티구분

sql_query(" CREATE TABLE IF NOT EXISTS `{$g5['popup_banner']}` (
	                  `pb_id` int(11) NOT NULL AUTO_INCREMENT,
	                  `pb_begin_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	                  `pb_end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	                  `pb_disable_hours` int(11) NOT NULL DEFAULT '0',
	                  `pb_use` tinyint(4) NOT NULL DEFAULT '0',
	                  `pb_order` int(11) NOT NULL DEFAULT '0',
	                  `pb_hit` int(11) NOT NULL DEFAULT '0',
	                  `pb_subject` text NOT NULL,
	                  `pb_content` text NOT NULL,
	                  PRIMARY KEY (`pb_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 ", true);
			
$g5['title'] = '배너관리';
include_once ('./admin.head.php');

$sql_common = " from {$g5['popup_banner']} ";

// 테이블의 전체 레코드수만 얻음
$sql = " select count(*) as cnt " . $sql_common;
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함
?>

<div class="pb_banner adm">
	<div class="local_ov01 local_ov">
	    등록된 배너 <?php echo $total_count; ?>개
	</div>
	
	<div class="btn_add01 btn_add">
	    <a href="./bannerform.php">배너추가</a>
	</div>
	
	<div class="tbl_head02 tbl_wrap">
	    <table>
	    <caption><?php echo $g5['title']; ?> 목록</caption>
	    <thead>
	    <tr>
	        <th scope="col" id="th_id">ID</th>
	        <th scope="col" id="th_sub">제목</th>
	        <th scope="col" id="th_loc">시간</th>
	        <th scope="col" id="th_st">시작일시</th>
	        <th scope="col" id="th_end">종료일시</th>
	        <th scope="col" id="th_odr">출력순서</th>
	        <th scope="col" id="th_use">사용</th>
	        <th scope="col" id="th_hit">조회</th>
	        <th scope="col" id="th_mng">관리</th>
	    </tr>
	    
	    </thead>
	    <tbody>
	    <?php
	    $sql = " select * from {$g5['popup_banner']}
	          order by pb_id desc
	          limit $from_record, $rows  ";
	    $result = sql_query($sql);
	    for ($i=0; $row=sql_fetch_array($result); $i++) {
	
	        $pb_begin_time = substr($row['pb_begin_time'], 2, 14);
	        $pb_end_time   = substr($row['pb_end_time'], 2, 14);
	
	        $bg = 'bg'.($i%2);
	    ?>
	
	    <tr class="<?php echo $bg; ?>">
	        <td headers="th_id" class="td_num"><?php echo $row['pb_id']; ?></td>
	        <td headers="th_sub"><?php echo $row['pb_subject']; ?></td>
	        <td headers="th_loc" class="wr_num"><?php echo $row['pb_disable_hours']; ?>시간</td>
	        <td headers="th_st" class="td_datetime wr_num"><?php echo $pb_begin_time; ?></td>
	        <td headers="th_end" class="td_datetime wr_num"><?php echo $pb_end_time; ?></td>
	        <td headers="th_odr" class="td_num"><?php echo $row['pb_order']; ?></td>
	        <td headers="th_use" class="td_num"><?php echo $row['pb_use'] ? '<span class="txt_true">예</span>' : '<span class="txt_false">아니오</span>'; ?></td>
	        <td headers="th_hit" class="td_num"><?php echo $row['pb_hit']; ?></td>
	        <td headers="th_mng" class="td_mngsmall">
	            <a href="./bannerform.php?w=u&amp;pb_id=<?php echo $row['pb_id']; ?>">수정</a>
	            <a href="./bannerformupdate.php?w=d&amp;pb_id=<?php echo $row['pb_id']; ?>" onclick="return delete_confirm(this);">삭제</a>
	        </td>
	    </tr>
	
	    <?php
	    }
	    if ($i == 0) {
	    echo '<tr><td colspan="8" class="empty_table">자료가 없습니다.</td></tr>';
	    }
	    ?>
	    </tbody>
	    </table>
	
	</div>
	
	<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>
</div>

<footer class="ft">
    <p>
        Copyright © Hail. All rights reserved.<br>
    </p>
</footer>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
