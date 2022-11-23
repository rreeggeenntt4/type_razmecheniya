<!--///////////////////////////////////////-->
										<!--Типы размещения плагин старт-->
										<?php
										require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
											// проверяем активность интересующего плагина
											if( is_plugin_active( 'type_razmecheniya/type_razmecheniya.php' ) ){?>
												
								<li<?php echo ( $def_tab == 'searchtype' ) ? ' class="active"' : '' ?>><a href="#hotel-search-type" data-toggle="tab"><?php _e( 'Namber Type','trav' ); ?></a></li>
										<?php		
											}
										?>
										
										
										
										<!--Типы размещения плагин финиш-->
<!--///////////////////////////////////////-->