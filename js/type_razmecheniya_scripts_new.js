			jQuery(document).ready(function(){
            jQuery('#btn_submit').click(function(e){
                // собираем данные с формы
                var b1    = jQuery('#b1').val();
                 var b2    = jQuery('#b2').val();
                 var b3    = jQuery('#b3').val();
                 var b4    = jQuery('#b4').val();
                 var b5    = jQuery('#b5').val();
                 var b6    = jQuery('#b6').val();
                 var b7    = jQuery('#b7').val();
                 var b8    = jQuery('#b8').val();
                 var b9    = jQuery('#b9').val();
                 var b10    = jQuery('#b10').val();
                 var b11    = jQuery('#b11').val();
                 var b12    = jQuery('#b12').val();
                 
                 var b13    = jQuery('#b13').val();
                 var b14    = jQuery('#b14').val();
                 var b15    = jQuery('#b15').val();
                 var b16    = jQuery('#b16').val();
                 var b17    = jQuery('#b17').val();
                 var b18    = jQuery('#b18').val();
                 var b19    = jQuery('#b19').val();
                 var b20    = jQuery('#b20').val();
                 var b21    = jQuery('#b21').val();
                 var b22    = jQuery('#b22').val();
                 var b23    = jQuery('#b23').val();
                 var b24    = jQuery('#b24').val();
                 
                 var b25    = jQuery('#b25').val();
                 var b26    = jQuery('#b26').val();
                 var b27    = jQuery('#b27').val();
                 var b28    = jQuery('#b28').val();
                 var b29    = jQuery('#b29').val();
                 var b30    = jQuery('#b30').val();
                 var b31    = jQuery('#b31').val();
                 var b32    = jQuery('#b32').val();
                 var b33    = jQuery('#b33').val();
                 var b34    = jQuery('#b34').val();
                 var b35    = jQuery('#b35').val();
                 var b36    = jQuery('#b36').val();
                // отправляем данные
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем
                        "b1":    b1,
                        "b2":    b2,
                        "b3":    b3,
                        "b4":    b4,
                        "b5":    b5,
                        "b6":    b6,
                        "b7":    b7,
                        "b8":    b8,
                        "b9":    b9,
                        "b10":    b10,
                        "b11":    b11,
                        "b12":    b12,
                        
                        "b13":    b13,
                        "b14":    b14,
                        "b15":    b15,
                        "b16":    b16,
                        "b17":    b17,
                        "b18":    b18,
                        "b19":    b19,
                        "b20":    b20,
                        "b21":    b21,
                        "b22":    b22,
                        "b23":    b23,
                        "b24":    b24,
                        
                        "b25":    b25,
                        "b26":    b26,
                        "b27":    b27,
                        "b28":    b28,
                        "b29":    b29,
                        "b30":    b30,
                        "b31":    b31,
                        "b32":    b32,
                        "b33":    b33,
                        "b34":    b34,
                        "b35":    b35,
                        "b36":    b36,
                        action: 'type_razmecheniya'
                    },
                    // после получения ответа сервера
                    	success: function(res){
                        jQuery('.messages').html(res);
                        console.log(res);
                    }
                });
                e.preventDefault();
            });
		});
		
		
		jQuery(document).ready(function(){
            jQuery('#btn_submit2').click(function(e){
                // собираем данные с формы
                var id_nomer  = jQuery('#id_nomer').val();
                var bonus_nomer   = jQuery('#bonus_nomer').val();                
                // отправляем данные
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем
                        "id_nomer":  id_nomer,
                        "bonus_nomer":  bonus_nomer,                        
                        action: 'update_type_razmecheniya'
                    },
                    // после получения ответа сервера
                    	success: function(res){
                        jQuery('.messages').html(res);
                        console.log(res);
                    }
                });
                e.preventDefault();
            });
		});
		
		
		jQuery(document).ready(function(){
            jQuery('a.vibor_otel').click(function(e){
                // собираем данные с формы 
                  var otel_id = jQuery(this).parent('form').children('.otel_id').val();   
                // отправляем данные
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем
                        "otel_id":  otel_id,                      
                        action: 'vibor_otel'
                    },
                    // после получения ответа сервера
                    	success: function(res){
                        jQuery('.messages').html(res);
                        jQuery('#mes').html(otel_id);
                        console.log(res);
                    }
                });
                e.preventDefault();
            });
		});
		
		
		
		jQuery(document).ready(function(){
            jQuery('#btnsubmitadd').click(function(e){
                // собираем данные с формы 
                   var n1 = jQuery('#n1').val();
                   var type1,cena1,type2,cena2,type3,cena3,type4,cena4,type5,cena5,type6,cena6,type7,cena7,type8,cena8,type9,cena9,type10,cena10,type11,cena11,type12,cena12,type13,cena13,type14,cena14,type15,cena15,type16,cena16,type17,cena17,type18,cena18,type19,cena19,type20,cena20,type21,cena21,type22,cena22,type23,cena23,type24,cena24,type25,cena25,type26,cena26,type27,cena27,type28,cena28,type29,cena29,type30,cena30,type31,cena31,type32,cena32,type33,cena33,type34,cena34,type35,cena35,type36,cena36; 
	                   if (jQuery('#type1').prop("checked")){type1 = "checked";cena1 = jQuery('#cena1').val();}
	                   if (jQuery('#type2').prop("checked")){type2 = "checked";cena2 = jQuery('#cena2').val();}
	                   if (jQuery('#type3').prop("checked")){type3 = "checked";cena3 = jQuery('#cena3').val();}
	                   if (jQuery('#type4').prop("checked")){type4 = "checked";cena4 = jQuery('#cena4').val();}
	                   if (jQuery('#type5').prop("checked")){type5 = "checked";cena5 = jQuery('#cena5').val();}
	                   if (jQuery('#type6').prop("checked")){type6 = "checked";cena6 = jQuery('#cena6').val();}
	                   if (jQuery('#type7').prop("checked")){type7 = "checked";cena7 = jQuery('#cena7').val();}
	                   if (jQuery('#type8').prop("checked")){type8 = "checked";cena8 = jQuery('#cena8').val();}
	                   if (jQuery('#type9').prop("checked")){type9 = "checked";cena9 = jQuery('#cena9').val();}
	                   if (jQuery('#type10').prop("checked")){type10 = "checked";cena10 = jQuery('#cena10').val();}
	                   if (jQuery('#type11').prop("checked")){type11 = "checked";cena11 = jQuery('#cena11').val();}
	                   if (jQuery('#type12').prop("checked")){type12 = "checked";cena12 = jQuery('#cena12').val();}
	                   if (jQuery('#type13').prop("checked")){type13 = "checked";cena13 = jQuery('#cena13').val();}
	                   if (jQuery('#type14').prop("checked")){type14 = "checked";cena14 = jQuery('#cena14').val();}
	                   if (jQuery('#type15').prop("checked")){type15 = "checked";cena15 = jQuery('#cena15').val();}
	                   if (jQuery('#type16').prop("checked")){type16 = "checked";cena16 = jQuery('#cena16').val();}
	                   if (jQuery('#type17').prop("checked")){type17 = "checked";cena17 = jQuery('#cena17').val();}
	                   if (jQuery('#type18').prop("checked")){type18 = "checked";cena18 = jQuery('#cena18').val();}
	                   if (jQuery('#type19').prop("checked")){type19 = "checked";cena19 = jQuery('#cena19').val();}
	                   if (jQuery('#type20').prop("checked")){type20 = "checked";cena20 = jQuery('#cena20').val();}
	                   if (jQuery('#type21').prop("checked")){type21 = "checked";cena21 = jQuery('#cena21').val();}
	                   if (jQuery('#type22').prop("checked")){type22 = "checked";cena22 = jQuery('#cena22').val();}
	                   if (jQuery('#type23').prop("checked")){type23 = "checked";cena23 = jQuery('#cena23').val();}
	                   if (jQuery('#type24').prop("checked")){type24 = "checked";cena24 = jQuery('#cena24').val();}
	                   if (jQuery('#type25').prop("checked")){type25 = "checked";cena25 = jQuery('#cena25').val();}
	                   if (jQuery('#type26').prop("checked")){type26 = "checked";cena26 = jQuery('#cena26').val();}
	                   if (jQuery('#type27').prop("checked")){type27 = "checked";cena27 = jQuery('#cena27').val();}
	                   if (jQuery('#type28').prop("checked")){type28 = "checked";cena28 = jQuery('#cena28').val();}
	                   if (jQuery('#type29').prop("checked")){type29 = "checked";cena29 = jQuery('#cena29').val();}
	                   if (jQuery('#type30').prop("checked")){type30 = "checked";cena30 = jQuery('#cena30').val();}
	                   if (jQuery('#type31').prop("checked")){type31 = "checked";cena31 = jQuery('#cena31').val();}
	                   if (jQuery('#type32').prop("checked")){type32 = "checked";cena32 = jQuery('#cena32').val();}
	                   if (jQuery('#type33').prop("checked")){type33 = "checked";cena33 = jQuery('#cena33').val();}
	                   if (jQuery('#type34').prop("checked")){type34 = "checked";cena34 = jQuery('#cena34').val();}
	                   if (jQuery('#type35').prop("checked")){type35 = "checked";cena35 = jQuery('#cena35').val();}
	                   if (jQuery('#type36').prop("checked")){type36 = "checked";cena36 = jQuery('#cena36').val();} 
                // отправляем данные
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем  
                     	"n1":n1, 
                     	"type1":type1, "cena1":cena1,
                     	"type2":type2, "cena2":cena2, 
                     	"type3":type3, "cena3":cena3, 
                     	"type4":type4, "cena4":cena4, 
                     	"type5":type5, "cena5":cena5, 
                     	"type6":type6, "cena6":cena6, 
                     	"type7":type7, "cena7":cena7, 
                     	"type8":type8, "cena8":cena8, 
                     	"type9":type9, "cena9":cena9, 
                     	"type10":type10, "cena10":cena10, 
                     	"type11":type11, "cena11":cena11, 
                     	"type12":type12, "cena12":cena12, 
                     	"type13":type13, "cena13":cena13, 
                     	"type14":type14, "cena14":cena14, 
                     	"type15":type15, "cena15":cena15, 
                     	"type16":type16, "cena16":cena16, 
                     	"type17":type17, "cena17":cena17, 
                     	"type18":type18, "cena18":cena18, 
                     	"type19":type19, "cena19":cena19, 
                     	"type20":type20, "cena20":cena20, 
                     	"type21":type21, "cena21":cena21, 
                     	"type22":type22, "cena22":cena22, 
                     	"type23":type23, "cena23":cena23, 
                     	"type24":type24, "cena24":cena24, 
                     	"type25":type25, "cena25":cena25, 
                     	"type26":type26, "cena26":cena26, 
                     	"type27":type27, "cena27":cena27, 
                     	"type28":type28, "cena28":cena28, 
                     	"type29":type29, "cena29":cena29, 
                     	"type30":type30, "cena30":cena30, 
                     	"type31":type31, "cena31":cena31, 
                     	"type32":type32, "cena32":cena32, 
                     	"type33":type33, "cena33":cena33, 
                     	"type34":type34, "cena34":cena34, 
                     	"type35":type35, "cena35":cena35, 
                     	"type36":type36, "cena36":cena36,               
                        action:'btn_submit_add'
                    },
                    // после получения ответа сервера
                    	success: function(res){
                        jQuery('.messages').html(res);
                        console.log(res);
                    }
                });
                e.preventDefault();
            });
		});


jQuery(document).ready(function(){
            jQuery('#delnomer').click(function(e){
                // собираем данные с формы 
                  var delnom = jQuery('#t1').val();   
                // отправляем данные
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем
                        "del_nom":delnom,                      
                        action: 'btn_delnomer'
                    },
                    // после получения ответа сервера
                    	success: function(res){
                        jQuery('.messages').html(res);
                        jQuery('#mes').html(otel_id);
                        console.log(res);
                    }
                });
                e.preventDefault();
            });
		});
		
		
jQuery(document).ready(function(){
            jQuery('.start_poisk').click(function(e){
                // собираем данные с формы 
                  var sel_nomer_poisk = jQuery('#nomer_select1').val();
                  var sel_nomer_poisk2 = jQuery('#nomer_select2').val();
                  var otel_front_id = jQuery('#otel_front_id').text();  
                // отправляем данные
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем
                        "sel_nomer_poisk":sel_nomer_poisk,
                        "sel_nomer_poisk2":sel_nomer_poisk2,
                        "otel_front_id":otel_front_id,                      
                        action: 'start_poisk'
                    },
                    // после получения ответа сервера
                    	success: function(res){
                      	jQuery('.info_show').html(res);
                        /*jQuery('.messages').html(res);
                        console.log(res);*/
                    }
                });
                e.preventDefault();
            });
		});
