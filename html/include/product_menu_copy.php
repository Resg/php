
<? 
$curpage = $_SERVER['REQUEST_URI'];
$menu = array (
	'msub_new' => array (	array (
								'name' => '�����  ��� ����� �������� �������-���������',
								'link' => '/product/new/shetka_extra/'),
							 array (
								'name' => '����� � ��������� ��� ����� �������-�����',
								'link' => '/product/new/gubka_dozator/'
								),
							array (
								'name' => '����� ����� ��� ����� �� ������� ����. ������',
								'link' => '/product/new/gubka_volna/'
								)
							),
							
	'msub_paint' => array ( array (
								'name' => '���� ��� ����� (�����)',
								'link' => '/product/paint/cream_banka/'),
							array (
								'name' => '���� ��� ����� (����)',
								'link' => '/product/paint/cream_tube/'),
							array (
								'name' => '����-������ (������)',
								'link' => '/product/paint/cream-paint_flakon/')
							),
							
							
	'msub_sponge' => array (
							array (
								'name' => '����� � ��������� ��� ����� �������-�����',
								'link' => '/product/sponge/gubka_dozator/'
								),
							array (
								'name' => '����� ����� ��� ����� �� ������� ����',
								'link' => '/product/sponge/smooth/'),

							array (
								'name' => '�����-���� ����� ��� ����� �� ������� ����',
								'link' => '/product/sponge/smooth_mini/'),
							array (
								'name' => '����� ����� ��� ������� �� ������, ����� � ������',
								'link' => '/product/sponge/velure/'),
							array (
								'name' => '�����-���� ����� ��� ������� �� ������, ����� � ������',
								'link' => '/product/sponge/velure_mini/'),
							
							),
							
	'msub_aerosol' => array (array (
								'name' => '������ ��� ���������� ����� ������� �� ������� ����',
								'link' => '/product/aerosol/paint_skin/'),
							 array (
								'name' => '������ ��� ���������� ����� ������� �� ����� � ������',
								'link' => '/product/aerosol/paint_velure/'
								)
							),

						
	'msub_waterpro' => array (array (
								'name' => '������ �� ����',
								'link' => '/product/waterpro/aerosol/'),
							 array (
								'name' => '���� ��� �����',
								'link' => '/product/waterpro/vosk/'
								)
							),
							
	'msub_tools' => array ( array (
								'name' => '����-����������',
								'link' => '/product/tools/pena/'),
							array (
								'name' => '����������� ��� �����',
								'link' => '/product/tools/rastiag/'),
							array (
								'name' => '���������� ��� �����',
								'link' => '/product/tools/desodorant/')
							),
							
	'msub_accessories' => array (
							array (
								'name' => '�����  ��� ����� �������� �������-���������',
								'link' => '/product/accessories/shetka_extra/'),
	
							array (
								'name' => '����� ��� ������� �� ����� � ������',
								'link' => '/product/accessories/shetka/'),
							 array (
								'name' => '������ ��� �����',
								'link' => '/product/accessories/shnurki/'
								),
							array (
								'name' => '����� ��� �����',
								'link' => '/product/accessories/spoon/'
								)
							),
							
	'msub_insoles' => array (array (
								'name' => '������� ������',
								'link' => '/product/insoles/winter/'),
							 array (
								'name' => '������� �4 ������',
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

