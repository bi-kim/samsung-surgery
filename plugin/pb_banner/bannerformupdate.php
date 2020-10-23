<?php
include_once('./_common.php');

if($w == "")
{
	$sql_common = " pb_begin_time = '{$_POST['pb_begin_time']}',
                pb_end_time = '{$_POST['pb_end_time']}',
                pb_disable_hours = '{$_POST['pb_disable_hours']}',
                pb_use = '{$_POST['pb_use']}',
                pb_order = '{$_POST['pb_order']}',
                pb_hit        = '0',
                pb_subject = '{$_POST['pb_subject']}',
                pb_content = '{$_POST['pb_content']}'";
					
    $sql = " insert {$g5['popup_banner']} set $sql_common ";
    sql_query($sql);

    $pb_id = sql_insert_id();
}
else if ($w == "u")
{
	$sql_common = " pb_begin_time = '{$_POST['pb_begin_time']}',
                pb_end_time = '{$_POST['pb_end_time']}',
                pb_disable_hours = '{$_POST['pb_disable_hours']}',
                pb_use = '{$_POST['pb_use']}',
                pb_order = '{$_POST['pb_order']}',
                pb_subject = '{$_POST['pb_subject']}',
                pb_content = '{$_POST['pb_content']}' ";
                	
    $sql = " update {$g5['popup_banner']} set $sql_common where pb_id = '$pb_id' ";
    sql_query($sql);
}
else if ($w == "d")
{
    $sql = " delete from {$g5['popup_banner']} where pb_id = '$pb_id' ";
    sql_query($sql);
}

goto_url(G5_PLUGIN_URL.'/pb_banner/');
?>
