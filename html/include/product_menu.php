
<? 
$curpage = $_SERVER['REQUEST_URI'];
$menu = array (
	'msub_new' => array (
							'link' => '/product/new/',
						),
								
	'msub_aerosol' => array (
							'link' => '/product/aerosol/',
							 array (
								'name' => '������ ��� ���������� ����� ������� �� ������� ����',
								'link' => '/product/aerosol/paint_skin/'),
							 array (
								'name' => '������ ��� ���������� ����� ������� �� ����� � ������',
								'link' => '/product/aerosol/paint_velure/'
								)
							),
	'msub_waterpro' => array (
							'link' => '/product/waterpro/',
							array (
								'name' => '������ �� ���� ��� ������� ����, �����, ������ � �����',
								'link' => '/product/waterpro/aerosol/'),
							 array (
								'name' => '���� ��� ����� �� ������� ����',
								'link' => '/product/waterpro/vosk/'
								),
                             array (
                            	'name' => '������ ������ �� ���� Salton Expert',
                            	'link' => 'http://salton-expert.ru/#product_17',
                                'target' => '_blank'
                            	),
                             array (
                                'name' => '������ ������ �� ���� � ��������� Salton Expert',
                                'link' => 'http://salton-expert.ru/#product_19',
                                'target' => '_blank'
                                )
							),
							
	'msub_paint' => array (  'link' => '/product/paint/',
							 array (
							
								'name' => '���� � ����� ��� ����� �� ������� ����',
								'link' => '/product/paint/cream_banka/'),
							array (
								'name' => '���� � ���� ��� ����� �� ������� ����',
								'link' => '/product/paint/cream_tube/'),
							array (
								'name' => '�����-�������� ��� ����� �� ������� ����',
								'link' => '/product/paint/express/')
							),
							
	'msub_tools' => array (   'link' => '/product/tools/',
							/*array (
								'name' => '���������� �������� �� ���� � ��������� ����������',
								'link' => '/product/tools/ochistitel_razvodov_dlya_obuvi_ot_soli_ireagentov_Antisol/'),*/
							/*array (
								'name' => '��������-���� 2�1 ��� ��������������� ����� ���� ������',
								'link' => '/product/tools/complex/'),*/
							array (
								'name' => '���������� ��� �����',
								'link' => '/product/tools/desodorant/'),
							/*array (
								'name' => '������ ����� �� �������������� ��������� � ����',
								'link' => '/product/tools/salt-def/'),*/
							/*array (
								'name' => '�����-������ ��� ��������� ��� ����� �� ������� ����',
								'link' => '/product/tools/blesk-eff/'),*/
							/*array (
								'name' => '���������� ��� ���������� �����<br />� ������-������������',
								'link' => '/product/tools/sport/'),*/
							array (
								'name' => '����������� ��� �����',
								'link' => '/product/tools/rastiag/'
							),
							array (
								'name' => '����-���������� ��� ����� �� �����, ������, ��������',
								'link' => '/product/tools/pena/'),
                            array (
                                'name' => '������������� ������ � ����� Salton Expert',
                                'link' => 'http://salton-expert.ru/#product_68',
                                'target' => '_blank'
                                ),
                            array (
                                'name' => '������-���� 5 � 1',
                                'link' => 'http://salton-expert.ru/#product_18',
                                'target' => '_blank'
                                ),
                            array (
                                'name' => '���������� ������� �������� "��������"',
                                'link' => 'http://salton-expert.ru/#product_20',
                                'target' => '_blank'
                                )

						),
							
							
							
							
	'msub_sponge' => array (   'link' => '/product/sponge/',
							/*array (
								'name' => '����� ��� ������� ������� �����',
								'link' => '/product/tools/gubka_dlya_vlazhnoy_ochistki_obuvi_iz_gladkoy_kozhi_I_rezini/'
							),*/
							array (
								'name' => '����� � ��������� ��� ����� �� ������� ����',
								'link' => '/product/sponge/gubka_dozator/'
								),
							array (
								'name' => '�����-����� ��� ����� �� ������� ����',
								'link' => '/product/sponge/smooth/'),
							array (
								'name' => '�����-����� ��� ������� �� ������, ����� � ������',
								'link' => '/product/sponge/velure/'),
							array (
								'name' => '�����-���� ����� ��� ����� �� ������� ����',
								'link' => '/product/sponge/smooth_mini/'),
							/*array (
								'name' => '������� ����� ��� ����� �� ������� ����',
								'link' => '/product/sponge/kids/'),

							array (
								'name' => '������� �������� ��� ����� �� ������� ����',
								'link' => '/product/sponge/cleaning_paper/'
							),*/
							
						),
		
	'msub_accessories' => array (
							   'link' => '/product/accessories/',
							array (
								'name' => '����� �������� ��� ����� �� ������� ����',
								'link' => '/product/accessories/shetka_extra/'),
	
							array (
								'name' => '����� ������� ��� ������� �� ����� � ������',
								'link' => '/product/accessories/shetka_troynaya/'),

							array (
								'name' => '����� ��� �����',
								'link' => '/product/accessories/spoon/'
								)
							),
							
	'msub_insoles' => array (
							'link' => '/product/insoles/',
							/*array (
								'name' => '������� ������� � �����������',
								'link' => '/product/insoles/gel_stelki/'),
							 array (
								'name' => '������� ��������� ��� �����',
								'link' => '/product/insoles/gel_pill_stop/'
								),
							array (
								'name' => '������� ������� ��� �����',
								'link' => '/product/insoles/gel_stripe/'
								),
							array (
								'name' => '������� ��������� ��� ����� ',
								'link' => '/product/insoles/gel_pill_pyat/'
								),
								array (
								'name' => '������� ������� ��� �������',
								'link' => '/product/insoles/gel_remen/'),*/
							array (
								'name' => '������� �4 �������',
								'link' => '/product/insoles/4-seasons/'
								),
							/*array (
								'name' => '������� ������',
								'link' => '/product/insoles/winter/'
								),*/
							/*array (
								'name' => '������� ����������� �� ���������� � ���������� ���� ����',
								'link' => '/product/insoles/vsesezon_st/'
								),
							array (
								'name' => '������� ������ � ����������� �������� � ����������� �������',
								'link' => '/product/insoles/winter/'),
							 array (
								'name' => '������� �����������������
�4 ������',
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
								'name' => '������� ��� ������ ������� �&nbsp;������������ �� ����',
								'link' => '/product/sport/shampoo/'),
							 array (
								'name' => '������� ��� ������ ������� �&nbsp;�������������� ����������',
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

