
<?php
$curpage = $_SERVER['REQUEST_URI'];
$menu = array (
	'm_salton' => '/about/',
	'm_function' => '/effect/',
	'm_product' => '/product/',
	'm_direction' => '/instruction/',
	'm_advice' => '/advices/',
	'm_dictionary' => '/dictionary/',
	'm_question' => '/questions/',
	'msub_expert' => 'http://salton-expert.ru/',
	'msub_lady' => 'http://salton-feetcomfort.ru/'
//	'msub_expert' => array (
//	'link' => 'http://salton-expert.ru/',
//	'target' => '_blank'
//	),
//	'msub_lady' => array (
 //   'link' => 'http://salton-feetcomfort.ru/',
//    'target' => '_blank'
//    )
); 
?>

<ul id="menu">
<?php foreach($menu as $id => $link) {
	echo '<li';
	if(is_array($link)) {

		/* last menu item */
		if (key($menu) == '') {
			echo ' class="last-child"';
		}
		next($menu);
		foreach($link as $sublink)	{
				if ($curpage == $sublink['link']) {$flag = 1; break;}
				else  $flag = 0;
		}

		if ($flag == 1) {
			echo '><img src="/i/menu/'.$id.'_a.gif" id="'.$id.'" /><ul>';

			foreach($link as $sublink)	{
				if ($curpage == $sublink['link']) echo '<li>'.$sublink['name'].'</li>';
				else echo '<li><a href="'.$sublink['link'].'">'.$sublink['name'].'</a></li>';
			}

			echo '</ul>';
		}

		else {
			if (key($menu) == '') {
				//echo '><a href="'.$link['link'].'" target="'.$link['target'].'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
			}
			else echo '><a href="'.$link[0]['link'].'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
		}

 	 }
	else {


		/* last menu item */
		if (key($menu) == '') {
			echo ' class="last-child"';
		}
		next($menu);

		if (strpos($curpage, $link) === 0  && (strlen($curpage) == strlen($link))) echo '><span><img src="/i/menu/'.$id.'_a.gif" id="'.$id.'" alt="" /></span></li>';
		else {
			if (strpos($curpage, $link) === 0 && strlen($curpage) !== strlen($link))
				echo '><a href="'.$link.'" class="f_menu active"><img src="/i/menu/'.$id.'_h.gif" id="'.$id.'" alt="" /></a></li>';
			else
				echo '><a href="'.$link.'" class="f_menu"><img src="/i/menu/'.$id.'.gif" id="'.$id.'" alt="" /></a></li>';
		}
 	}


}

?>
</ul>
