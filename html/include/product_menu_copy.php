
<? 
$curpage = $_SERVER['REQUEST_URI'];
$menu = array (
	'msub_new' => array (	array (
								'name' => 'Щетка  для обуви ворсовая «Экстра-полировка»',
								'link' => '/product/new/shetka_extra/'),
							 array (
								'name' => 'Губка с дозатором для обуви «Экстра-блеск»',
								'link' => '/product/new/gubka_dozator/'
								),
							array (
								'name' => 'Губка волна для обуви из гладкой кожи. Черный',
								'link' => '/product/new/gubka_volna/'
								)
							),
							
	'msub_paint' => array ( array (
								'name' => 'Крем для обуви (банка)',
								'link' => '/product/paint/cream_banka/'),
							array (
								'name' => 'Крем для обуви (туба)',
								'link' => '/product/paint/cream_tube/'),
							array (
								'name' => 'Крем-краска (флакон)',
								'link' => '/product/paint/cream-paint_flakon/')
							),
							
							
	'msub_sponge' => array (
							array (
								'name' => 'Губка с дозатором для обуви «Экстра-блеск»',
								'link' => '/product/sponge/gubka_dozator/'
								),
							array (
								'name' => 'Губка волна для обуви из гладкой кожи',
								'link' => '/product/sponge/smooth/'),

							array (
								'name' => 'Губка-мини волна для обуви из гладкой кожи',
								'link' => '/product/sponge/smooth_mini/'),
							array (
								'name' => 'Губка волна для изделий из нубука, замши и велюра',
								'link' => '/product/sponge/velure/'),
							array (
								'name' => 'Губка-мини волна для изделий из нубука, замши и велюра',
								'link' => '/product/sponge/velure_mini/'),
							
							),
							
	'msub_aerosol' => array (array (
								'name' => 'Краска для обновления цвета изделий из гладкой кожи',
								'link' => '/product/aerosol/paint_skin/'),
							 array (
								'name' => 'Краска для обновления цвета изделий из замши и нубука',
								'link' => '/product/aerosol/paint_velure/'
								)
							),

						
	'msub_waterpro' => array (array (
								'name' => 'Защита от воды',
								'link' => '/product/waterpro/aerosol/'),
							 array (
								'name' => 'Воск для обуви',
								'link' => '/product/waterpro/vosk/'
								)
							),
							
	'msub_tools' => array ( array (
								'name' => 'Пена-очиститель',
								'link' => '/product/tools/pena/'),
							array (
								'name' => 'Растяжитель для обуви',
								'link' => '/product/tools/rastiag/'),
							array (
								'name' => 'Дезодорант для обуви',
								'link' => '/product/tools/desodorant/')
							),
							
	'msub_accessories' => array (
							array (
								'name' => 'Щетка  для обуви ворсовая «Экстра-полировка»',
								'link' => '/product/accessories/shetka_extra/'),
	
							array (
								'name' => 'Щетка для изделий из замши и нубука',
								'link' => '/product/accessories/shetka/'),
							 array (
								'name' => 'Шнурки для обуви',
								'link' => '/product/accessories/shnurki/'
								),
							array (
								'name' => 'Ложка для обуви',
								'link' => '/product/accessories/spoon/'
								)
							),
							
	'msub_insoles' => array (array (
								'name' => 'Стельки зимние',
								'link' => '/product/insoles/winter/'),
							 array (
								'name' => 'Стельки «4 сезона»',
								'link' => '/product/insoles/4seasons/'
								)
							)
) 
?>

<ul id="menu">
<? foreach($menu as $id => $link) {
	echo '<li';
	if(is_array($link)) {
		next($menu);
		/* last menu item */
		if (key($menu) == '') {
			echo ' class="last-child"';
		}
		foreach($link as $sublink)	{
				if ($curpage == $sublink['link']) {$flag = 1; break;}
				else $flag = 0;
		}
			
		if ($flag == 1) {
			echo '><img src="/i/menu/'.$id.'_h.gif" id="'.$id.'" /><ul>';
		
			foreach($link as $sublink)	{
				if ($curpage == $sublink['link']) echo '<li>'.$sublink['name'].'</li>';
				else echo '<li><a href="'.$sublink['link'].'">'.$sublink['name'].'</a></li>';
			}
			
			echo '</ul>';
		}
		
		else echo '><a href="'.$link[0]['link'].'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" /></a></li>';
			
 	 }
	else {

		next($menu);
		/* last menu item */
		if (key($menu) == '') {
			echo ' class="last-child"';
		}
		
		if (strpos($curpage, $link) === 0) echo ' class="active"><img src="/i/menu/'.$id.'_h.gif" id="'.$id.'" />';
		else {
			echo '><a href="'.$link.'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" /></a></li>';
		}
 	}
	
} 
?>
</ul>

