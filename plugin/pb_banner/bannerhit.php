<?php
include_once("./_common.php");
$sql = " update {$g5['popup_banner']} set pb_hit = pb_hit + 1 where pb_id = '$pb_id' ";
sql_query($sql);

goto_url($url);
?>
