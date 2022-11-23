<?php
/*Функия при установке плагина*/
function type_razmecheniya_install(){
global $wpdb;   	
	$sql = "CREATE TABLE IF NOT EXISTS type_razmecheniya (id int auto_increment primary key, name_type TEXT(100))";	
	$wpdb->query($sql);	
		
	$wpdb->insert('type_razmecheniya',array( 'id' => 1, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 2, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 3, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 4, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 5, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 6, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 7, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 8, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 9, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 10, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 11, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 12, 'name_type' => '' ),array( '%d','%s' ));
	
	$wpdb->insert('type_razmecheniya',array( 'id' => 13, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 14, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 15, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 16, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 17, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 18, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 19, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 20, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 21, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 22, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 23, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 24, 'name_type' => '' ),array( '%d','%s' ));	
	
	$wpdb->insert('type_razmecheniya',array( 'id' => 25, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 26, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 27, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 28, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 29, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 30, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 31, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 32, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 33, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 34, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 35, 'name_type' => '' ),array( '%d','%s' ));
	$wpdb->insert('type_razmecheniya',array( 'id' => 36, 'name_type' => '' ),array( '%d','%s' ));	
		
	$sql = "CREATE TABLE IF NOT EXISTS otel_razmecheniya (id int auto_increment primary key, id_post int, id_nomer_ot int not null, name_nomer text(100), type_razmecheniya int not null, cena int not null)";	
	$wpdb->query($sql);	
	
	
	
	$sql = "CREATE TABLE IF NOT EXISTS type_razmecheniya_otel (id int auto_increment primary key, otel_id int not null)";
	$wpdb->query($sql);	
	wp_reset_postdata();	
}

/*Ajax */
function wp_ajax_type_razmecheniya(){
	global $wpdb;
	if( isset($_POST['b1'])){
		print_r($_POST);
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b1']),array( 'id' => 1 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b2']),array( 'id' => 2 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b3']),array( 'id' => 3 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b4']),array( 'id' => 4 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b5']),array( 'id' => 5 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b6']),array( 'id' => 6 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b7']),array( 'id' => 7 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b8']),array( 'id' => 8 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b9']),array( 'id' => 9 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b10']),array( 'id' => 10 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b11']),array( 'id' => 11 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b12']),array( 'id' => 12 ),array( '%s' ));
		
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b13']),array( 'id' => 13 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b14']),array( 'id' => 14 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b15']),array( 'id' => 15 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b16']),array( 'id' => 16 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b17']),array( 'id' => 17 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b18']),array( 'id' => 18 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b19']),array( 'id' => 19 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b20']),array( 'id' => 20 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b21']),array( 'id' => 21 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b22']),array( 'id' => 22 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b23']),array( 'id' => 23 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b24']),array( 'id' => 24 ),array( '%s' ));
		
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b25']),array( 'id' => 25 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b26']),array( 'id' => 26 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b27']),array( 'id' => 27 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b28']),array( 'id' => 28 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b29']),array( 'id' => 29 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b30']),array( 'id' => 30 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b31']),array( 'id' => 31 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b32']),array( 'id' => 32 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b33']),array( 'id' => 33 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b34']),array( 'id' => 34 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b35']),array( 'id' => 35 ),array( '%s' ));
		$wpdb->update('type_razmecheniya',array( 'name_type' => $_POST['b36']),array( 'id' => 36 ),array( '%s' ));
	}	
	wp_die('Запрос завершен');	
}

/*Ajax прием выбора отеля */
function wp_ajax_vibor_otel(){
	global $wpdb;
/*	global $wp_admin_bar;*/
	print_r($_POST);
	if( isset($_POST['otel_id'])){		
		$nomer_otel = $_POST['otel_id'];

	$sql = "CREATE TABLE IF NOT EXISTS type_razmecheniya_otel (id int auto_increment primary key, otel_id int not null)";
	$wpdb->query($sql);	
	$wpdb->insert('type_razmecheniya_otel',array( 'id' => 1, 'otel_id' => '' ),array( '%d','%d' ));
	$wpdb->update('type_razmecheniya_otel',array( 'otel_id' => $nomer_otel ),array( 'id' => 1),array( '%d' ));

	}
	wp_die('Запрос завершен');		
}

function wp_ajax_btn_submit_add(){
	global $wpdb;
	print_r($_POST);
	echo '<br /><hr><br />';
	
	$sql = "SELECT MAX(id_nomer_ot) AS `id_nomer_ot` FROM `otel_razmecheniya`";
			$id_nomer_ot = $wpdb->get_results($sql);
			$id_nomer_ot = $id_nomer_ot[0]->id_nomer_ot;
		    $id_nomer_ot = $id_nomer_ot + 1;
		    
	$sql2 = "SELECT * from `type_razmecheniya_otel` where `id`='1'";
		    $otel_post = $wpdb->get_results($sql2);
		    $otel_post = $otel_post[0]->otel_id;
		    
	$name_nomer = $_POST['n1'];
	
		if( isset($_POST['type1']))
			{ $type_razmecheniya = 1; $cena = $_POST['cena1'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type2']))
			{ $type_razmecheniya = 2; $cena = $_POST['cena2'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type3']))
			{ $type_razmecheniya = 3; $cena = $_POST['cena3'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type4']))
			{ $type_razmecheniya = 4; $cena = $_POST['cena4'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type5']))
			{ $type_razmecheniya = 5; $cena = $_POST['cena5'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type6']))
			{ $type_razmecheniya = 6; $cena = $_POST['cena6'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type7']))
			{ $type_razmecheniya = 7; $cena = $_POST['cena7'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type8']))
			{ $type_razmecheniya = 8; $cena = $_POST['cena8'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type9']))
			{ $type_razmecheniya = 9; $cena = $_POST['cena9'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type10']))
			{ $type_razmecheniya = 10; $cena = $_POST['cena10'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type11']))
			{ $type_razmecheniya = 11; $cena = $_POST['cena11'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type12']))
			{ $type_razmecheniya = 12; $cena = $_POST['cena12'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type13']))
			{ $type_razmecheniya = 13; $cena = $_POST['cena13'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type14']))
			{ $type_razmecheniya = 14; $cena = $_POST['cena14'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type15']))
			{ $type_razmecheniya = 15; $cena = $_POST['cena15'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type16']))
			{ $type_razmecheniya = 16; $cena = $_POST['cena16'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type17']))
			{ $type_razmecheniya = 17; $cena = $_POST['cena17'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type18']))
			{ $type_razmecheniya = 18; $cena = $_POST['cena18'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type19']))
			{ $type_razmecheniya = 19; $cena = $_POST['cena19'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type20']))
			{ $type_razmecheniya = 20; $cena = $_POST['cena20'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type21']))
			{ $type_razmecheniya = 21; $cena = $_POST['cena21'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type22']))
			{ $type_razmecheniya = 22; $cena = $_POST['cena22'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type23']))
			{ $type_razmecheniya = 23; $cena = $_POST['cena23'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type24']))
			{ $type_razmecheniya = 24; $cena = $_POST['cena24'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type25']))
			{ $type_razmecheniya = 25; $cena = $_POST['cena25'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type26']))
			{ $type_razmecheniya = 26; $cena = $_POST['cena26'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type27']))
			{ $type_razmecheniya = 27; $cena = $_POST['cena27'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type28']))
			{ $type_razmecheniya = 28; $cena = $_POST['cena28'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type29']))
			{ $type_razmecheniya = 29; $cena = $_POST['cena29'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type30']))
			{ $type_razmecheniya = 30; $cena = $_POST['cena30'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type31']))
			{ $type_razmecheniya = 31; $cena = $_POST['cena31'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type32']))
			{ $type_razmecheniya = 32; $cena = $_POST['cena32'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type33']))
			{ $type_razmecheniya = 33; $cena = $_POST['cena33'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type34']))
			{ $type_razmecheniya = 34; $cena = $_POST['cena34'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type35']))
			{ $type_razmecheniya = 35; $cena = $_POST['cena35'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
			
			if( isset($_POST['type36']))
			{ $type_razmecheniya = 36; $cena = $_POST['cena36'];
$wpdb->insert('otel_razmecheniya',array( 'id' => insert_id, 'id_post' => $otel_post, 'id_nomer_ot' => $id_nomer_ot, 'name_nomer' => $name_nomer, 'type_razmecheniya' => $type_razmecheniya, 'cena' =>$cena ),array( '%d','%s','%s','%s','%d','%s' ));
			}
	
	
		
	wp_die('Запрос завершен');	
}

function wp_ajax_btn_delnomer(){
	global $wpdb;
	print_r($_POST);
	if( isset($_POST['del_nom'])){		
		$del_nomer = $_POST['del_nom'];
		$sql = "DELETE FROM `otel_razmecheniya` WHERE `id_nomer_ot`='".$del_nomer."'";
		$wpdb->query($sql);	
	}
	echo'<br /><h2>Номер '.$del_nomer.' был удален</h2>';
	wp_die('Запрос завершен');
}

function wp_ajax_start_poisk(){
	global $wpdb;	
		$tecushii_otel = $_POST['otel_front_id'];
	echo '<br /><hr /><br />';
	
/*Обработка первого select start*/
	if( isset($_POST['sel_nomer_poisk'])){		
		$sel_nomer_poisk = $_POST['sel_nomer_poisk'];
		$sql = "SELECT * FROM `otel_razmecheniya` WHERE `id_nomer_ot`='".$sel_nomer_poisk."'";
		$t_arr = $wpdb->get_results($sql);		
		if( $t_arr ) {
					echo'<h2 align="center">Номер: '.$t_arr[0]->name_nomer.'</h2>';	
					echo'<div class="row"><div style="margin-left:20px;margin-right:20px;">
							<table class="table col-md-12 table-bordered table-striped table-hover" style="font-size: 14px;text-align: center;">
								<thead style="font-size: 16px;">
									<tr><td class="col-md-8">Типы размещения</td><td class="col-md-4">Цена</td></tr>
								</thead>
								<tbody>';
					foreach ( $t_arr as $ID ) {		
						$sql2 = "SELECT * FROM `type_razmecheniya` WHERE `id`='".$ID->type_razmecheniya."'";
						$arr_sql = $wpdb->get_results($sql2);
						$type_raz = $arr_sql[0]->name_type;				
						echo'				
						<tr>
						<td>'.$type_raz.'</td><td>'.$ID->cena.'</td>
						</tr>
						';
					
					}
			echo'</tbody>
				</table>
				</div>
				</div>';
		}
		
	} 
/*завершился первый select*/	
	
/*Обработка второго select start*/
	if( isset($_POST['sel_nomer_poisk2'])){		
		$sel_nomer_poisk2 = $_POST['sel_nomer_poisk2'];
		$sql = "SELECT * FROM `otel_razmecheniya` WHERE `id_post`='".$tecushii_otel."' AND `type_razmecheniya`='".$sel_nomer_poisk2."'";
		$t_arr22 = $wpdb->get_results($sql);	 /*Массив текущего отеля с заданым типом поиска*/
		$sql = "SELECT * FROM `type_razmecheniya` WHERE `id`='".$sel_nomer_poisk2."'";
		$arr_t_r2 = $wpdb->get_results($sql); 
		$name_type_select = $arr_t_r2[0]->name_type;
		if( $t_arr22 ) {
					echo'<h2 align="center">Тип размещения: '.$name_type_select.'</h2>';	
					echo'<div class="row"><div style="margin-left:20px;margin-right:20px;">
							<table class="table col-md-12 table-bordered table-striped table-hover" style="font-size: 14px;text-align: center;">
								<thead style="font-size: 16px;">
									<tr><td class="col-md-8">Номер</td><td class="col-md-4">Цена</td></tr>
								</thead>
										<tbody>';
					foreach ( $t_arr22 as $ID ) {		
							echo'				
							<tr>
							<td>'.$ID->name_nomer.'</td><td>'.$ID->cena.'</td>
							</tr>
							';
					}
			echo'</tbody>
				</table>
				</div>
				</div>';
		}	
	} 
/*Завершился второй select*/	
	
wp_die('');
}

/*Подключаем стили, дополнительный скрипт берется только для страницы /wp-admin/admin.php?page=sub-page*/
function type_razmecheniya_scripts_style(){
	wp_enqueue_style('type_razmecheniya_style', plugins_url('/css/type_razmecheniya_style.css', __FILE__) );	
	if ($_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page' || $_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page2' || $_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page22' || $_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page23' || $_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page24' || $_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page3' || $_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=sub-page4' || strpos($_SERVER['REQUEST_URI'], 'accommodation') ){
		wp_enqueue_script('type_razmecheniya_scripts_new', plugins_url('/js/type_razmecheniya_scripts_new.js',__FILE__),array('jquery'), null, true);
		wp_deregister_script( 'jquery' );
		/*wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');*/
		wp_register_script( 'jquery', plugins_url('/js/jquery.3.2.1.min.js',__FILE__));
		wp_enqueue_script( 'jquery' );
	}
	else{
		return;
	}	
}

/*Удаление плагина type_razmecheniya*/
function type_razmecheniya_delete (){
	global $wpdb;
	$sql = "DROP TABLE type_razmecheniya";
	$wpdb->query($sql);
	$sql = "DROP TABLE otel_razmecheniya";
	$wpdb->query($sql);
	$sql = "DROP TABLE type_razmecheniya_otel";
	$wpdb->query($sql);
	
	wp_reset_postdata();	
}

/*Добавление меню в админскую часть*/
function type_razmecheniya_add_menu() {
    add_menu_page('Типы размещения', 'Типы размещения', 8, __FILE__, 'type_razmecheniya_toplevel_page');
    add_submenu_page(__FILE__, 'Настроить', 'Настроить', 8, 'sub-page', 'type_razmecheniya_sublevel_page');
    add_submenu_page(__FILE__, 'Список', 'Список отелей', 8, 'sub-page2', 'type_razmecheniya_sublevel_page2');
    add_submenu_page(__FILE__, 'Список', 'Выбраный отель', 8, 'sub-page22', 'type_razmecheniya_sublevel_page22');
    add_submenu_page(__FILE__, 'Список', 'Добавить номер', 8, 'sub-page23', 'type_razmecheniya_sublevel_page23');
    add_submenu_page(__FILE__, 'Список', 'Удалить номер', 8, 'sub-page24', 'type_razmecheniya_sublevel_page24');
}

/*Добавление страницы Типы размещения*/
function type_razmecheniya_toplevel_page() {
    echo '<div class="wrap"><h2>Типы размещения в отелях</h2>';
    echo 'Плагин создает типы размещения для отелей. <br />Для каждого отеля появляется возможность добавить/удалить номер.<br /> Для каждого номера появляется возможность добавить/удалить типы размещения.<br /> Для каждого типа размещения появляется возможность назначить цену. <br /><br /><br /><h2>Установка и активация</h2>Данный плагин при установке создает в базе данных следующие поля: <br /> - Создается дополнительные таблицы otel_razmecheniya, type_razmecheniya, type_razmecheniya_otel<br /><h2>Деактивация и удаление</h2> - При деактивации плагина содержание таблицы базы данных не затрагивается. <br /> - При удалении плагина все дополнения сделанные в базе данных удаляются. 
    <h2>Для подключения плагина необходимо выполнить дополнительные действия !!!</h2>  
    <h2>Инструкция по подключению:</h2>
    1)Найдите файл single-accommodation.php в корне вашей темы Travelo<br />
    2)Подключите два php файла. Для того чтобы можно было понять места подключения в плагине есть папка instruction и в ней текстовый вариант файла single-accommodation.php.<br />
    Вам необходимы строки "include_once "/wp-content/plugins/type_razmecheniya/inc/tab_include.php" и include_once "/wp-content/plugins/type_razmecheniya/inc/select_include.php";<br />
    3)Для наглядности в папке img плагина есть картинки с уточнениями.<br /><br /><br />
    <img src="/wp-content/plugins/type_razmecheniya/img/tab_include.jpg" /><br /><br /><br />
    <img src="/wp-content/plugins/type_razmecheniya/img/select_include.jpg" /><br />
    
    <h2>Работа плагина:</h2>
    Фронтенд:<br />
    1)На странице отеля создается вкладка Namber Type<br />
    2)Появляется возможность поиска по номеру и по типу размещения в отеле на странице которого вы находитесь.<br />
    <img src="/wp-content/plugins/type_razmecheniya/img/frontend.jpg" /><br />
    <br />
    Админка:<br />
    <img src="/wp-content/plugins/type_razmecheniya/img/adminpanel.jpg" /><br />
    
    
    </div>';     
}

/*Вывод страницы Список*/
function type_razmecheniya_sublevel_page2() {
	
    echo '<div class="wrap"><h2>Список отелей, список номеров в отеле, список типов размещения для номеров.</h2>';
    echo 'Выводится список отель - номер - типы размещения. Информация о статусе Люкс, Полулюкс, Президентский, и др, можно ввести в дополнительной информации.' . '<br /><br /></div>';
    global $wpdb;  
    $p_type = "accommodation";
    $sql = "SELECT * from `wp_qrrh_posts` where `post_type`='".$p_type."'";
    $rs = $wpdb->get_results($sql);
    echo'<h2>Список отелей:</h2>'; 
	    if( $rs ) {	
			foreach ( $rs as $ID ) {
				echo '
				<form>
				<input type="text" name="name" value="'.$ID->ID.'" id="otel_id" class="otel_id" style="display:none;">
				ID_POST Отеля: '.$ID->ID.'  <a href="#" id="vibor_otel" class="vibor_otel" type="submit">'.$ID->post_title.'</a><br />
				</form>
				';
			}
		}
  		
  	$sql = "SELECT * from `type_razmecheniya_otel` where `id`='1'";
    $namber_ot = $wpdb->get_results($sql);
    $namber_ot = $namber_ot[0]->otel_id;
    
    $sql = "SELECT * from `wp_qrrh_posts` where `ID`='".$namber_ot."'";
    $title_otel = $wpdb->get_results($sql);
    $title_otel = $title_otel[0]->post_title;
   		echo '<h2>Отель выбранный по базе: '.$namber_ot.'   '.$title_otel.'</h2>';
		echo'<h2>Выбран отель: <span id="mes"></span> <a href="/wp-admin/admin.php?page=sub-page22">Далее</a></h2>';
				
}

/*Выводит информацию о выбранном отеле включая номера, типы размещения, цену*/
function type_razmecheniya_sublevel_page22(){	
	global $wpdb;  
    
    $sql2 = "SELECT * from `type_razmecheniya_otel` where `id`='1'";
    $otel_post = $wpdb->get_results($sql2);
    $otel_post = $otel_post[0]->otel_id;
    
    $sql3 = "SELECT * from `wp_qrrh_posts` where `ID`='".$otel_post."'";
    $otel_title = $wpdb->get_results($sql3);
    $otel_title = $otel_title[0]->post_title;
    
    $sql = "SELECT * from `otel_razmecheniya` where `id_post`='".$otel_post."'";
    $rs = $wpdb->get_results($sql);
       
    echo '<div align="center"><h2>ID отеля '.$otel_post.' '.$otel_title.'</h2></div>';
	echo'<div class="wrap">
	<h1></h1>
	<table class="wp-list-table widefat striped users fixed">';
		echo'<thead><tr>';
		echo'<td width="12%" style="text-align: center;">ID записи</td><td width="18%" style="text-align: center;">ID Отеля</td><td width="18%" style="text-align: center;">ID Номера</td><td width="18%" style="text-align: center;">Наименовани номера</td><td width="18%" style="text-align: center;">Тип размещения</td><td width="16%" style="text-align: center;">Цена</td>';
		echo'</tr></thead><tbody id="the-list"><tr>';
		echo'<td colspan="6"><table class="wp-list-table widefat striped" style="text-align:center;">';

		if( $rs ) {	
			foreach ( $rs as $ID ) {
				echo "<tr>";
				echo '<td width="12%">'.$ID->id.'</td><td width="18%"> '.$ID->id_post.'</td><td width="18%"> '.$ID->id_nomer_ot.'</td><td width="18%"> '.$ID->name_nomer.'</td><td width="18%"> '.$ID->type_razmecheniya.'</td><td width="16%"> '.$ID->cena.'</td>';
				echo "</tr>";
			}
		}

		echo'</table></td>
		</tr>
		</tbody></table>';
				

				
echo'</div>';
}

/*Добавить номер в отель*/
function type_razmecheniya_sublevel_page23(){
		global $wpdb;  
		    $p_type = "id_post";
		    $sql = "SELECT * from `otel_razmecheniya` where `post_type`='".$p_type."'";
		    $rs = $wpdb->get_results($sql);
		    $sql2 = "SELECT * from `type_razmecheniya_otel` where `id`='1'";
		    $otel_post = $wpdb->get_results($sql2);
		    $otel_post = $otel_post[0]->otel_id;
		    $sql3 = "SELECT * from `wp_qrrh_posts` where `ID`='".$otel_post."'";
		    $otel_title = $wpdb->get_results($sql3);
		    $otel_title = $otel_title[0]->post_title;
	
	echo'<div class="wrap" style="width:50%;"><br />
			<div class="messages"></div><br />
		<h2 align="center">Добавить номер в отель<br />'.$otel_post.'  '.$otel_title.'</a></h2>
		<form>
		<table class="wp-list-table widefat" id="#content_nomer_type">
		<tr>
		<td>ID_POST отеля : '.$otel_post.'</td><td>Введите наименование номера</td>
		</tr>
		<tr>
		<td style="border-bottom:3px solid #e5e5e5;">'.$otel_title.'</td>
		<td style="border-bottom:3px solid #e5e5e5;"><input type="text" name="n1" id="n1" class="inp_width" value="">		
		</td>
		</tr>
		<tr><td><strong>Выберите типы размещения</strong></td><td><strong>Цена</strong></td></tr>
		';
		
		    $sql2 = "SELECT * from `type_razmecheniya`";
		    $table_types = $wpdb->get_results($sql2);	    
		    
		    if( $table_types  ) {	
					foreach ( $table_types as $ID ) {
						if ($ID->name_type != ""){
							echo '<tr><td style="border-bottom:2px solid #e5e5e5;">
							
							<input type="checkbox" name="type'.$ID->id.'" id="type'.$ID->id.'" class="inp_width" value="off"><label for="type'.$ID->id.'">'.$ID->name_type.'</label></td><td style="border-bottom:2px solid #e5e5e5;">  <input type="text" name="cena'.$ID->id.'" id="cena'.$ID->id.'" class="inp_width" value=""></td></tr>';
						}				
					}
				}
		    
		    

		echo'<tr><td colspan="4"><a href="#" type="submit" id="btnsubmitadd" class="type_submit_class">Обновить</a></td></tr>
		</table>
		</form>
		</div>
		';
		
}


/*Удалить номер из отеля*/
function type_razmecheniya_sublevel_page24(){
		global $wpdb;  

		    $sql2 = "SELECT * from `type_razmecheniya_otel` where `id`='1'";
		    $otel_post = $wpdb->get_results($sql2);
		    $otel_post = $otel_post[0]->otel_id;
		    $sql3 = "SELECT * from `wp_qrrh_posts` where `ID`='".$otel_post."'";
		    $otel_title = $wpdb->get_results($sql3);
		    $otel_title = $otel_title[0]->post_title;
		    
		    $sql = "SELECT * from `otel_razmecheniya` where `id_post`='".$otel_post."'";
		    $rs = $wpdb->get_results($sql);
		   
	
	
	echo'<div class="wrap" style="width:50%;"><br /><div class="messages"></div><h2 align="center">Удалить номер<br />
	    '.$otel_post.'  '.$otel_title.'</h2>
		
		<table class="wp-list-table widefat striped">
		<tr>
		<td>Индекс номера</td><td>Наименование номера</td>
		</tr>';
		$tfin = 0;
		 if( $rs ) {	
			foreach ( $rs as $ID ) {
				if($tfin < $ID->id_nomer_ot){				
					echo '<tr><td>'.$ID->id_nomer_ot.'</td><td> '.$ID->name_nomer.'</td></tr>';				
					$tfin = $ID->id_nomer_ot;
				}
			}
		}
		
		echo'
		</table>
		';
		
		echo'
		<form>
		<input type="text" name="t1" id="t1" value="" style="line-height: 1.5;padding: 10px;margin: 15px;">
		<a href="#" type="submit" id="delnomer" class="type_razm_sub1">Удалить</a>
		<form>';
		
echo'</div>';		
}

/*Вывод страницы настроить*/
function type_razmecheniya_sublevel_page() {

    echo '<div class="wrap"><h2>Настроить типы размещения</h2>';
    echo 'Здесь прописываются все варианты типов размещения в отелях.<br /> Соответствующие типы размещения потом проставляются для каждого отеля и номера отдельно. Соответственно если поле на типе размещения стало пустым, тип размещения удаляется. Данная страница перезаписывает таблицу с типами размещения. </div>';
    global $wpdb;   
    $sqlb1 = "SELECT `name_type` from `type_razmecheniya` where id='1'";$b1 = $wpdb->get_var($sqlb1);
	$sqlb2 = "SELECT `name_type` from `type_razmecheniya` where id='2'";$b2 = $wpdb->get_var($sqlb2);
	$sqlb3 = "SELECT `name_type` from `type_razmecheniya` where id='3'";$b3 = $wpdb->get_var($sqlb3); 
	$sqlb4 = "SELECT `name_type` from `type_razmecheniya` where id='4'";$b4 = $wpdb->get_var($sqlb4); 
	$sqlb5 = "SELECT `name_type` from `type_razmecheniya` where id='5'";$b5 = $wpdb->get_var($sqlb5); 
	$sqlb6 = "SELECT `name_type` from `type_razmecheniya` where id='6'";$b6 = $wpdb->get_var($sqlb6); 
	$sqlb7 = "SELECT `name_type` from `type_razmecheniya` where id='7'";$b7 = $wpdb->get_var($sqlb7); 
	$sqlb8 = "SELECT `name_type` from `type_razmecheniya` where id='8'";$b8 = $wpdb->get_var($sqlb8); 
	$sqlb9 = "SELECT `name_type` from `type_razmecheniya` where id='9'";$b9 = $wpdb->get_var($sqlb9); 
	$sqlb10 = "SELECT `name_type` from `type_razmecheniya` where id='10'";$b10 = $wpdb->get_var($sqlb10); 
	$sqlb11 = "SELECT `name_type` from `type_razmecheniya` where id='11'";$b11 = $wpdb->get_var($sqlb11);
	$sqlb12 = "SELECT `name_type` from `type_razmecheniya` where id='12'";$b12 = $wpdb->get_var($sqlb12); 
	
	$sqlb13 = "SELECT `name_type` from `type_razmecheniya` where id='13'";$b13 = $wpdb->get_var($sqlb13);
	$sqlb14 = "SELECT `name_type` from `type_razmecheniya` where id='14'";$b14 = $wpdb->get_var($sqlb14);
	$sqlb15 = "SELECT `name_type` from `type_razmecheniya` where id='15'";$b15 = $wpdb->get_var($sqlb15); 
	$sqlb16 = "SELECT `name_type` from `type_razmecheniya` where id='16'";$b16 = $wpdb->get_var($sqlb16); 
	$sqlb17 = "SELECT `name_type` from `type_razmecheniya` where id='17'";$b17 = $wpdb->get_var($sqlb17); 
	$sqlb18 = "SELECT `name_type` from `type_razmecheniya` where id='18'";$b18 = $wpdb->get_var($sqlb18); 
	$sqlb19 = "SELECT `name_type` from `type_razmecheniya` where id='19'";$b19 = $wpdb->get_var($sqlb19); 
	$sqlb20 = "SELECT `name_type` from `type_razmecheniya` where id='20'";$b20 = $wpdb->get_var($sqlb20); 
	$sqlb21 = "SELECT `name_type` from `type_razmecheniya` where id='21'";$b21 = $wpdb->get_var($sqlb21); 
	$sqlb22 = "SELECT `name_type` from `type_razmecheniya` where id='22'";$b22 = $wpdb->get_var($sqlb22); 
	$sqlb23 = "SELECT `name_type` from `type_razmecheniya` where id='23'";$b23 = $wpdb->get_var($sqlb23);
	$sqlb24 = "SELECT `name_type` from `type_razmecheniya` where id='24'";$b24 = $wpdb->get_var($sqlb24); 
	
	$sqlb25 = "SELECT `name_type` from `type_razmecheniya` where id='25'";$b25 = $wpdb->get_var($sqlb25);
	$sqlb26 = "SELECT `name_type` from `type_razmecheniya` where id='26'";$b26 = $wpdb->get_var($sqlb26);
	$sqlb27 = "SELECT `name_type` from `type_razmecheniya` where id='27'";$b27 = $wpdb->get_var($sqlb27); 
	$sqlb28 = "SELECT `name_type` from `type_razmecheniya` where id='28'";$b28 = $wpdb->get_var($sqlb28); 
	$sqlb29 = "SELECT `name_type` from `type_razmecheniya` where id='29'";$b29 = $wpdb->get_var($sqlb29); 
	$sqlb30 = "SELECT `name_type` from `type_razmecheniya` where id='30'";$b30 = $wpdb->get_var($sqlb30); 
	$sqlb31 = "SELECT `name_type` from `type_razmecheniya` where id='31'";$b31 = $wpdb->get_var($sqlb31); 
	$sqlb32 = "SELECT `name_type` from `type_razmecheniya` where id='32'";$b32 = $wpdb->get_var($sqlb32); 
	$sqlb33 = "SELECT `name_type` from `type_razmecheniya` where id='33'";$b33 = $wpdb->get_var($sqlb33); 
	$sqlb34 = "SELECT `name_type` from `type_razmecheniya` where id='34'";$b34 = $wpdb->get_var($sqlb34); 
	$sqlb35 = "SELECT `name_type` from `type_razmecheniya` where id='35'";$b35 = $wpdb->get_var($sqlb35);
	$sqlb36 = "SELECT `name_type` from `type_razmecheniya` where id='36'";$b36 = $wpdb->get_var($sqlb36); 
  
echo'
<div class="wrap"> 
<br/>
    <div class="messages"></div>
<br/>  
<table class="eco_bonus_admin_table wp-list-table widefat striped "><thead class="eco_thead_class"><tr><td>Порядковый Номер</td><td>Тип размещения</td></tr></thead>
<form>
<tbody class="eco_tbody_class">
	<tr><td>1<td><input id="b1" type="text" name="b1" value="' .$b1. '"></td></tr>
	<tr><td>2<td><input id="b2" type="text" name="b2" value="' .$b2. '"></td></tr>
	<tr><td>3<td><input id="b3" type="text" name="b3" value="' .$b3. '"></td></tr>
	<tr><td>4<td><input id="b4" type="text" name="b4" value="' .$b4. '"></td></tr>
	<tr><td>5<td><input id="b5" type="text" name="b5" value="' .$b5. '"></td></tr>
	<tr><td>6<td><input id="b6" type="text" name="b6" value="' .$b6. '"></td></tr>
	<tr><td>7<td><input id="b7" type="text" name="b7" value="' .$b7. '"></td></tr>
	<tr><td>8<td><input id="b8" type="text" name="b8" value="' .$b8. '"></td></tr>
	<tr><td>9<td><input id="b9" type="text" name="b9" value="' .$b9. '"></td></tr>
	<tr><td>10<td><input id="b10" type="text" name="b10" value="' .$b10. '"></td></tr>
	<tr><td>11<td><input id="b11" type="text" name="b11" value="' .$b11. '"></td></tr>
	<tr><td>12<td><input id="b12" type="text" name="b12" value="' .$b12. '"></td></tr>
	
	<tr style="background:green !important;"><td><hr><td><hr></td></tr>
	
	<tr><td>13<td><input id="b13" type="text" name="b13" value="' .$b13. '"></td></tr>
	<tr><td>14<td><input id="b14" type="text" name="b14" value="' .$b14. '"></td></tr>
	<tr><td>15<td><input id="b15" type="text" name="b15" value="' .$b15. '"></td></tr>
	<tr><td>16<td><input id="b16" type="text" name="b16" value="' .$b16. '"></td></tr>
	<tr><td>17<td><input id="b17" type="text" name="b17" value="' .$b17. '"></td></tr>
	<tr><td>18<td><input id="b18" type="text" name="b18" value="' .$b18. '"></td></tr>
	<tr><td>19<td><input id="b19" type="text" name="b19" value="' .$b19. '"></td></tr>
	<tr><td>20<td><input id="b20" type="text" name="b20" value="' .$b20. '"></td></tr>
	<tr><td>21<td><input id="b21" type="text" name="b21" value="' .$b21. '"></td></tr>
	<tr><td>22<td><input id="b22" type="text" name="b22" value="' .$b22. '"></td></tr>
	<tr><td>23<td><input id="b23" type="text" name="b23" value="' .$b23. '"></td></tr>
	<tr><td>24<td><input id="b24" type="text" name="b24" value="' .$b24. '"></td></tr>
	
	<tr style="background:green !important;"><td><hr><td><hr></td></tr>
	
	<tr><td>25<td><input id="b25" type="text" name="b25" value="' .$b25. '"></td></tr>
	<tr><td>26<td><input id="b26" type="text" name="b26" value="' .$b26. '"></td></tr>
	<tr><td>27<td><input id="b27" type="text" name="b27" value="' .$b27. '"></td></tr>
	<tr><td>28<td><input id="b28" type="text" name="b28" value="' .$b28. '"></td></tr>
	<tr><td>29<td><input id="b29" type="text" name="b29" value="' .$b29. '"></td></tr>
	<tr><td>30<td><input id="b30" type="text" name="b30" value="' .$b30. '"></td></tr>
	<tr><td>31<td><input id="b31" type="text" name="b31" value="' .$b31. '"></td></tr>
	<tr><td>32<td><input id="b32" type="text" name="b32" value="' .$b32. '"></td></tr>
	<tr><td>33<td><input id="b33" type="text" name="b33" value="' .$b33. '"></td></tr>
	<tr><td>34<td><input id="b34" type="text" name="b34" value="' .$b34. '"></td></tr>
	<tr><td>35<td><input id="b35" type="text" name="b35" value="' .$b35. '"></td></tr>
	<tr><td>36<td><input id="b36" type="text" name="b36" value="' .$b36. '"></td></tr>
</tbody>
<tfoot>
<tr><td colspan="2"><a href="#" type="submit" id="btn_submit" class="eco_submit_class">Обновить</a></td></tr>
</tfoot>
</form>
</table>

</div>
';    
} 

?>