<?php
include_once('./_common.php');

add_stylesheet('<link rel="stylesheet" href="'.G5_PLUGIN_URL.'/pb_banner/style.css">', 1);

$sql_common = " from {$g5['popup_banner']} ";
$sql_where = " where '".G5_TIME_YMDHIS."' between pb_begin_time and pb_end_time and pb_use = 1 ";
$sql_orderby = " order by pb_order ";

// 테이블의 전체 레코드수만 얻음
$sql = " select count(*) as cnt " . $sql_common . $sql_where;
$pb_row = sql_fetch($sql);
$total_count = $pb_row['cnt'];

// 값이 없거나, pb_banner 관리자화면 이면  - return
if($total_count == 0){return false;}
if(strpos($_SERVER["REQUEST_URI"], 'plugin/pb_banner') !== false) {return false;} 

$result = sql_query("select * " . $sql_common . $sql_where . $sql_orderby, false);
?>
<link rel="stylesheet" href="<?php echo G5_PLUGIN_URL?>/pb_banner/assets/swiper.css">

<div class="pb_popup pb_hide">
	<div class="inner">
		<div class="close-popup"><img src="<?php echo G5_PLUGIN_URL?>/pb_banner/assets/img/close.png"></div>	
		<div class="swiper-container">
	        <div class="swiper-wrapper">
	        	<?php 
					for ($i=0; $row=sql_fetch_array($result); $i++) {
						
						// 다시보지않기
						if(isset($pb_disable_hours) && $pb_disable_hours) {
							if($pb_disable_hours > $row['pb_disable_hours']){
								$pb_disable_hours = $row['pb_disable_hours'];
							} else {
								$pb_disable_hours = $pb_disable_hours;
							}
						} else { //초기값
							$pb_disable_hours = $row['pb_disable_hours'];
						}
				?>
					<div class="swiper-slide"><?php echo $row['pb_content'];?></div>
				<?php }?> 
	        </div>
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>
	    </div>
	    <div class="swiper-pagination"></div>
	    <?php
	    	if($pb_disable_hours == "24"){
	    		$pb_msg = "오늘 하루";
	    	} else {
	    		$pb_msg = $pb_disable_hours."시간동안";
	    	}
	    ?>
	    <div class="pb_disable_hours pb_hide"><?php echo $pb_disable_hours;?></div>
	    <div class="close-today"><?php echo $pb_msg;?> 이창열지 않음</div>	
	</div><span class="innerspan"></span>
</div>

<script src="<?php echo G5_PLUGIN_URL?>/pb_banner/assets/swiper.js"></script>
<script src="<?php echo G5_PLUGIN_URL?>/pb_banner/assets/pb_banner.js"></script>