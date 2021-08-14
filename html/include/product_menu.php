
<? 
$curpage = $_SERVER['REQUEST_URI'];
$menu = array (
	'msub_new' => array (
							'link' => '/product/new/',
						),
								
	'msub_aerosol' => array (
							'link' => '/product/aerosol/',
							 array (
								'name' => 'Краска для обновления цвета изделий из гладкой кожи',
								'link' => '/product/aerosol/paint_skin/'),
							 array (
								'name' => 'Краска для обновления цвета изделий из замши и нубука',
								'link' => '/product/aerosol/paint_velure/'
								)
							),
	'msub_waterpro' => array (
							'link' => '/product/waterpro/',
							array (
								'name' => 'Защита от воды для гладкой кожи, замши, нубука и ткани',
								'link' => '/product/waterpro/aerosol/'),
							 array (
								'name' => 'Воск для обуви из гладкой кожи',
								'link' => '/product/waterpro/vosk/'
								),
                             array (
                            	'name' => 'Экстра защита от воды Salton Expert',
                            	'link' => 'http://salton-expert.ru/#product_17',
                                'target' => '_blank'
                            	),
                             array (
                                'name' => 'Экстра защита от соли и реагентов Salton Expert',
                                'link' => 'http://salton-expert.ru/#product_19',
                                'target' => '_blank'
                                )
							),
							
	'msub_paint' => array (  'link' => '/product/paint/',
							 array (
							
								'name' => 'Крем в банке для обуви из гладкой кожи',
								'link' => '/product/paint/cream_banka/'),
							array (
								'name' => 'Крем в тубе для обуви из гладкой кожи',
								'link' => '/product/paint/cream_tube/'),
							array (
								'name' => 'Блеск-экспресс для обуви из гладкой кожи',
								'link' => '/product/paint/express/')
							),
							
	'msub_tools' => array (   'link' => '/product/tools/',
							/*array (
								'name' => 'Очиститель разводов от соли и реагентов «Антисоль»',
								'link' => '/product/tools/ochistitel_razvodov_dlya_obuvi_ot_soli_ireagentov_Antisol/'),*/
							/*array (
								'name' => 'Комплекс-Уход 2в1 для комбинированной обуви всех цветов',
								'link' => '/product/tools/complex/'),*/
							array (
								'name' => 'Дезодорант для обуви',
								'link' => '/product/tools/desodorant/'),
							/*array (
								'name' => 'Защита обуви от антигололедных реагентов и соли',
								'link' => '/product/tools/salt-def/'),*/
							/*array (
								'name' => 'Блеск-эффект без полировки для обуви из гладкой кожи',
								'link' => '/product/tools/blesk-eff/'),*/
							/*array (
								'name' => 'Очиститель для спортивной обуви<br />с щеткой-аппликатором',
								'link' => '/product/tools/sport/'),*/
							array (
								'name' => 'Растяжитель для обуви',
								'link' => '/product/tools/rastiag/'
							),
							array (
								'name' => 'Пена-очиститель для обуви из замши, нубука, текстиля',
								'link' => '/product/tools/pena/'),
                            array (
                                'name' => 'Нейтрализатор запаха в обуви Salton Expert',
                                'link' => 'http://salton-expert.ru/#product_68',
                                'target' => '_blank'
                                ),
                            array (
                                'name' => 'Мульти-уход 5 в 1',
                                'link' => 'http://salton-expert.ru/#product_18',
                                'target' => '_blank'
                                ),
                            array (
                                'name' => 'Очиститель солевых разводов "АНТИСОЛЬ"',
                                'link' => 'http://salton-expert.ru/#product_20',
                                'target' => '_blank'
                                )

						),
							
							
							
							
	'msub_sponge' => array (   'link' => '/product/sponge/',
							/*array (
								'name' => 'Губка для влажной очистки обуви',
								'link' => '/product/tools/gubka_dlya_vlazhnoy_ochistki_obuvi_iz_gladkoy_kozhi_I_rezini/'
							),*/
							array (
								'name' => 'Губка с дозатором для обуви из гладкой кожи',
								'link' => '/product/sponge/gubka_dozator/'
								),
							array (
								'name' => 'Губка-волна для обуви из гладкой кожи',
								'link' => '/product/sponge/smooth/'),
							array (
								'name' => 'Губка-волна для изделий из нубука, замши и велюра',
								'link' => '/product/sponge/velure/'),
							array (
								'name' => 'Губка-мини волна для обуви из гладкой кожи',
								'link' => '/product/sponge/smooth_mini/'),
							/*array (
								'name' => 'Детская губка для обуви из гладкой кожи',
								'link' => '/product/sponge/kids/'),

							array (
								'name' => 'Влажные салфетки для обуви из гладкой кожи',
								'link' => '/product/sponge/cleaning_paper/'
							),*/
							
						),
		
	'msub_accessories' => array (
							   'link' => '/product/accessories/',
							array (
								'name' => 'Щетка ворсовая для обуви из гладкой кожи',
								'link' => '/product/accessories/shetka_extra/'),
	
							array (
								'name' => 'Щетка тройная для изделий из замши и нубука',
								'link' => '/product/accessories/shetka_troynaya/'),

							array (
								'name' => 'Ложка для обуви',
								'link' => '/product/accessories/spoon/'
								)
							),
							
	'msub_insoles' => array (
							'link' => '/product/insoles/',
							/*array (
								'name' => 'ГЕЛЕВЫЕ СТЕЛЬКИ с микрофиброй',
								'link' => '/product/insoles/gel_stelki/'),
							 array (
								'name' => 'ГЕЛЕВЫЕ ПОДУШЕЧКИ под стопу',
								'link' => '/product/insoles/gel_pill_stop/'
								),
							array (
								'name' => 'ГЕЛЕВЫЕ ПОЛОСКИ для пятки',
								'link' => '/product/insoles/gel_stripe/'
								),
							array (
								'name' => 'ГЕЛЕВЫЕ ПОДУШЕЧКИ под пятку ',
								'link' => '/product/insoles/gel_pill_pyat/'
								),
								array (
								'name' => 'ГЕЛЕВЫЕ ПОЛОСКИ под ремешки',
								'link' => '/product/insoles/gel_remen/'),*/
							array (
								'name' => 'Стельки «4 СЕЗОНА»',
								'link' => '/product/insoles/4-seasons/'
								),
							/*array (
								'name' => 'Стельки ЗИМНИЕ',
								'link' => '/product/insoles/winter/'
								),*/
							/*array (
								'name' => 'СТЕЛЬКИ всесезонные из микрофибры с экстрактом Алое Вера',
								'link' => '/product/insoles/vsesezon_st/'
								),
							array (
								'name' => 'СТЕЛЬКИ зимние с натуральным войлоком и алюминиевой фольгой',
								'link' => '/product/insoles/winter/'),
							 array (
								'name' => 'СТЕЛЬКИ антибактериальные
«4 сезона»',
								'link' => '/product/insoles/4seasons/'
								)*/
							),
	'msub_expert' => array (
							'link' => 'http://salton-expert.ru/',
							'target' => '_blank'
	),
	'msub_lady' => array (
							'link' => 'http://salton-feetcomfort.ru/',
							'target' => '_blank'
		),
	'msub_sport' => array (
							'link' => '/product/sport/',
							array (
								'name' => 'Шампунь для стирки изделий с&nbsp;наполнителем из пуха',
								'link' => '/product/sport/shampoo/'),
							 array (
								'name' => 'Шампунь для стирки изделий с&nbsp;климатическими мембранами',
								'link' => '/product/sport/shampoo_climat/'
								)
						
							)
);


?>




<ul id="menu">
<? 

foreach($menu as $id => $link) {
	echo '<li';
	if(is_array($link)) {
		/* last menu item */
		if (key($menu) == '') {
			echo ' class="last-child"';
		}
		next($menu);
		
		foreach($link as $sublink)	{
				//echo '<br/>---'.strstr($sublink['link'], $curpage).'<br/>';
				if ($curpage == $sublink['link'] || strstr($menu[$id]['link'],$curpage)) {$flag = 1; break;}
				else $flag = 0;
		}
		
		
		if ($flag == 1) {
			echo '><a href="'.$link['link'].'" class="f_menu active"><img src="/i/menu/'.$id.'_a.gif" id="'.$id.'" alt="" /></a><ul>';
			
			foreach($link as $sublink)	{
				if (is_array($sublink)) {
					if ($curpage == $sublink['link']) echo '<li>'.$sublink['name'].'</li>';
					else echo '<li><a href="'.$sublink['link'].'" >'.$sublink['name'].'</a></li>';
				}
			}
			
			echo '</ul>';
		}
		
		else {

			if (isset($link['link'])) {
				if ($link['link'] == $curpage)
					echo '><span><img src="/i/menu/'.$id.'_a.gif" id="'.$id.'" /></span></li>';
				else
				if(isset($link['target'])) {
                	echo '><a href="'.$link['link'].'" target="'.$link['target'].'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
                } else {
                echo '><a href="'.$link['link'].'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
                }

			}
			else {
			 	echo '><a href="'.$link[0]['link'].'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
			}
		}
			
 	 }
	else {


		/* last menu item */
		if (key($menu) == '') {
			echo ' class="last-child"';
		}
		next($menu);
		
		if (strpos($curpage, $link) === 0) echo ' class="active"><img src="/i/menu/'.$id.'_a.gif" id="'.$id.'" alt="" /></li>';
		else {
			echo '><a href="'.$link.'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
		}
 	}
	
} 
?>
</ul>

