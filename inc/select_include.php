<!--////////////////////////////////////////	-->	
<!--Типы размещения плагин старт-->
<div class="tab-pane fade<?php echo ( $def_tab == 'searchtype' ) ? ' in active' : '' ?>" id="hotel-search-type">
<?php
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		// проверяем активность интересующего плагина
		if( is_plugin_active( 'type_razmecheniya/type_razmecheniya.php' ) ){

					global $wpdb;
					$otel_front_id = esc_attr( $acc_id );
					$sql_name_ot_front = "SELECT * FROM `wp_qrrh_posts` where `ID`='".$otel_front_id."'";
					$name_ot_front = $wpdb->get_results($sql_name_ot_front);
					$name_ot_front = $name_ot_front[0]->post_title; // Название отеля на фронтенде
					
					$sql_type_s1 = "SELECT * FROM `otel_razmecheniya` where `id_post`='".$otel_front_id."'";
					$sql_type_s1 = $wpdb->get_results($sql_type_s1);
					

					echo __('<h2 align="center" class="name_otel_front">'.$name_ot_front.'</h2>');
					if ($sql_type_s1[0]->name_nomer == ''){ echo '<h1 align="center">Данные на этот отель не введены.</h1>';}
	}

?>
<script>
function rename1(){	
var n = document.getElementById("nomer_select1").options.selectedIndex;							
document.getElementById("nomer_select2").options.selectedIndex = 0;
}
</script>
<script>
function rename2(){
var n = document.getElementById("nomer_select2").options.selectedIndex;									
document.getElementById("nomer_select1").options.selectedIndex = 0;
}
</script>
<style>
	.selector_new{
		position: relative;
   		min-width: 60px;
	}
	.selector_new select{
		    position: absolute;
   			z-index: 1;
			width: 100%; 
		    line-height: 30px; 
	}
</style>

										<div class="update-search clearfix">
											<h4 class="title" align="center">Поиск по номеру или типу</h4>
											
											<div class="col-md-12">
												<div id="otel_front_id" style="display: none;" data-ofid="<?php echo $otel_front_id;?>"><?php echo $otel_front_id;?></div>
											
												<div class="row">
													<div class="col-xs-4">
														
														<div class="selector_new">		
														 <select name="nomer_select1" id="nomer_select1" class="full-width" onchange="rename1();">
																<option value>Выберите номер</option>
<?php
$sql_sgfhjw = "SELECT * FROM `otel_razmecheniya` where `id_post`='".$otel_front_id."'";
			$arr_of_at_ot = $wpdb->get_results($sql_sgfhjw);

			$itog_nomer_v_ot = 0;
			if( $arr_of_at_ot ) {foreach ( $arr_of_at_ot as $ID ) {
				if ($itog_nomer_v_ot < $ID->id_nomer_ot){		
					echo '<option value="'.$ID->id_nomer_ot.'">'.$ID->name_nomer.'</option>';
					$itog_nomer_v_ot = $ID->id_nomer_ot;
					}	
			}
		}
?>														
														 </select>
														</div>
													</div>
													<div class="col-xs-4">
														
														<div class="selector_new">
														 <select name="nomer_select2" id="nomer_select2" class="full-width" onchange="rename2();">
																<option value="">Выберите тип размещения</option>
																
<?php
$sql_sgfhjw = "SELECT * FROM `otel_razmecheniya` where `id_post`='".$otel_front_id."'";
			$arr_of_at_ot = $wpdb->get_results($sql_sgfhjw);
			
			$itog_type_v_ot = 0;
			if( $arr_of_at_ot ) {foreach ( $arr_of_at_ot as $ID ) {
				$t_r_int = $ID->type_razmecheniya;
				if ($itog_type_v_ot < $t_r_int){		
					echo '<option value="'.$t_r_int.'">';
					
					$sql_from_t1 = "SELECT * FROM `type_razmecheniya` where `id`='".$t_r_int."'";
					$arr_type_t1 = $wpdb->get_results($sql_from_t1);
					$type_t1 = $arr_type_t1[0]->name_type;
					
					
					echo $type_t1.'</option>';
					$itog_type_v_ot = $ID->type_razmecheniya;
					}	
			}
		}
?>																
																							 </select>
														</div>
													</div>
													<div class="col-xs-4">
														
														<div class="selector_new">
														<button id="check_availability" data-animation-duration="1" data-animation-type="bounce" class="full-width icon-check animated bounce start_poisk" type="submit" style="animation-duration: 1s; visibility: visible;">SEARCH NOW</button>
														</div>
													</div>
													
													<div class="info_show">
													</div>
													
												</div>
												
											</div>

											
										</div>


</div>

<!--<script>
	var msg;
if (window.jQuery) {
    msg = 'You are running jQuery version: ' + jQuery.fn.jquery;
} else {
    msg = 'jQuery is not installed';
}
alert(msg);
</script>-->
<!--Типы размещения плагин финиш-->
<!--////////////////////////////////////////	-->	