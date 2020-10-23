<?php
include_once ('./_common.php');
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$board = sql_fetch("select * from g5 where bo_table = '{$_GET['bo_table']}'");
if($_GET['bo_table'] && $_GET['vid']){
	$temp = sql_fetch("select * from g5_write_{$_GET['bo_table']}  where wr_id = '{$_GET['vid']}'");
}else{
	$lim = 0;
	if($_GET['page']){
		$lim = ($_GET['page']-1) * $board['bo_page_rows'];
	}
	if($_GET['sca']){
		$sub_qry = "  and ca_name = '{$sca}'  ";
	}
	$temp = sql_fetch("select * from g5_write_{$_GET['bo_table']}  where wr_is_comment = '0' {$sub_qry} order by wr_id desc limit  {$lim}, 1");
}

$thumbview = get_list_thumbnail($_GET['bo_table'], $temp['wr_id'], 500, '');
	if($thumbview['src']) {
         $img_content_view = '<img src="'.$thumbview['src'].'" alt="'.$thumbview['alt'].'" width="500" >';
     } 
?>

<?php echo $img_content_view?><br><br><br>
<?php echo get_view_thumbnail($temp[wr_content]); ?>