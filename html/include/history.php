<? 

function getRandElementNumbers(&$a, $count)
{     
     $arrSize = count($a);
     if($count > $arrSize)
     {
          die('u\'re bad ;o)');
     }
     $rNums = array();
     $timeToBreak = false;
     $doneCount = 0;
     while(count($rNums)<$count)
     {
          $r = rand(0, $arrSize-1);
          if(!in_array($r, $rNums))
          {
               $rNums[] = $r;
          }
     }
     return $rNums;
}


$curpage = $_SERVER['REQUEST_URI'];
$items = array (
	'1' => '<a href="#"><strong>�����</strong>,&nbsp;27&nbsp;���,<br /> ��������</a>
			<p>�&nbsp;������� ���� ��&nbsp;������ �&nbsp;�������� ��&nbsp;���������� ���� �&nbsp;�������. �&nbsp;��� ���� �&nbsp;����� ��� ������� ������� ������, ������� ����� �&nbsp;������. ����� ����, ����� �������� �&nbsp;�������, ����� ���������, �&nbsp;�&nbsp;��������� ����� �&nbsp;�����. ������ ��&nbsp;������, ��&nbsp;��������� ����. ����������� ������, ��� ��&nbsp;�����, ��&nbsp;���&nbsp;�� ...<br />
����� ��������� ���� ������ �&nbsp;������������ ������ ��� ���� �&nbsp;��������&nbsp;&mdash; ������ ����� ������. �������� ��������, ��� ���, �&nbsp;��������, ��� �������, ��&nbsp;��� ������ ���� ��������. ����� ��� ������, ���������&nbsp;&mdash; ������ �����! ������ ����� �����! :).</p>',

	'2' => '<a href="#"><strong>�������</strong>,&nbsp;19&nbsp;���,<br />���������</a>
	<p>� ������� �������� ��������� � �������� ����� � �����! ��� ��� ���� ����������� ������ ������ �� ��� ��������! �� ���� � ������ �����, ������� ��������, ��������, 13,5 �� ������! � ������� ��������� ������� ����� ���� ������, �������� ����� �����, �� � ����� ��������������� �������� � �� ��������, � �������� ��� �������! ����� ��� ������ ������� ����, ��������� ������, � ����� ���������� ������, ��� �������� ���� ����� ������!:) ����� ����� � ����� ������������, ��� �� ����� �� ��������� ����� ������, ���� �� ������� ������! �� � � ������� ���� ���� ��� �� ������...������� ���� ������, ����� �������� ������! � ��������� � ����� � ������� �� ������������, ��� ��� �������� �����,������ �� ���� ������������, ����������� ��� ����������� ����������� ��� ����� SALTON...� ��� ������! ����� ��������� ���� ������ ������, � ������������ �������� ������ �� ����������, � ����������� � ��� � ��������, ������� ��� ����, ��� � ��� ������ ������� �, ������ ��������� ����� � � ��� ������ ����� ����������� ���� � �����. �� ��������� ����, � ������� ���� �����...� �� ��������� ����! ���� ��������� �������, ����� �� ����, ������ ������ ������, ����� �� ����������!!! � ����� ��������! � ��� � ������ �� ���������� ������ ��� �������� �������!!!! ������ � ���� �� ����� ���� �������� � ����� ������� ���������! ����������� ��� ����� SALTON - ������ ��� ����� ����������! ������� ���!!!</p>',

							
	'3' => '<a href="#"><strong>�������</strong>,&nbsp;31&nbsp;���,<br/> ������� ��<br/> ������������</a>
						<p>��� ��������� ��� �&nbsp;������� �&nbsp;����� ������ ���������� ������������. ���, �������������, ���������� ������ �&nbsp;��,&nbsp;��� �&nbsp;������ ������ ����������.<br />
������� ���������� ����� �������� ������������ ������ ��&nbsp;����� ���������. ������������ ��������&nbsp;&mdash; ��� ��������� �������� ��� �����. ��������� ���� �&nbsp;������������ ����� ������ ������� ������� �����.<br /><br />

��&nbsp;�&nbsp;����� ��� ���� ������� ���� ��������&nbsp;&mdash; ��������� ����� SALTON: ������&nbsp;&mdash; ��� ���� �&nbsp;�����&nbsp;&mdash; ��� ������ �&nbsp;�����. ����� ������&nbsp;&mdash; �������� �&nbsp;������� �&nbsp;�&nbsp;����� ������ ������ ��������� �����. ������ ��� ����� ��������������� ��� ����� �������� ��������.</p>',
							
	'4' => '<a href="#"><strong>�����</strong>,&nbsp;25&nbsp;���,<br /> ��������, �������.</a>
						<p>�&nbsp;��������� ����� �&nbsp;���������� �����������. ������� ��������� ��� ����������������� �����. �&nbsp;��� ���� �,&nbsp;��&nbsp;���� ����, ������ �&nbsp;����������� �&nbsp;����� ������. ��&nbsp;����� ������ �&nbsp;�������������, ��� ����� ����� ������ ����. �&nbsp;���� ������ ��&nbsp;��������� ������. ��������� ��&nbsp;������� �,&nbsp;��� ��&nbsp;���� ����, �����&nbsp;�� ��������. ��� ������� ������������ ������ ����������� �������� ��� �������� �����.<br /><br />
						�&nbsp;�������� ��&nbsp;����� �&nbsp;��������� ������� ������� ��&nbsp;������������ ���������. ��&nbsp;�������� �&nbsp;����� ����&nbsp;�� ��&nbsp;��&nbsp;������� ��&nbsp;������. �������� ��������������� ��� ���������� ����������� ��� ����� Salton. &laquo;���������&raquo; ��&nbsp;�������, �&nbsp;���������� ����� ��������� ���������. �&nbsp;��� ���������!!! �&nbsp;������, ��� �������� ���� ������� ����������. ����� SALTON �������� ���� �&nbsp;��� ������ ��� ���� ����, �&nbsp;�&nbsp;��&nbsp;�������.</p>',

						
	'5' =>'<a href="#"><strong>��������</strong>,&nbsp;25&nbsp;���,<br/>������-������</a>
						<p>������� �&nbsp;����� ��������� �������� �&nbsp;�������� ������� ��&nbsp;���� &laquo;<nobr>Dress-code</nobr> ��� ������� �������������� �����&raquo;. ����� �&nbsp;����� �����������, ��&nbsp;����� ���� ����������, ������� �&nbsp;������ ����, ��������� ���������� ��� ������. ��&nbsp;����������� ��&nbsp;�������� �&nbsp;�����, ��� ��&nbsp;������ ������ ������� ��� ���� �������: ��� ���� (�������!) ���������� ������. �&nbsp;����� ��� ������ ������ ����� �����������&nbsp;&mdash; ������ �������� �������, �&nbsp;�����&nbsp;&mdash; ��������.<br />
��&nbsp;����� �������� ��&nbsp;���� ��� �������� ������������, ����������, ������ �&nbsp;����� �&nbsp;��������� ������� �������. �����, ��&nbsp;��� ����� ������. �&nbsp;������ ����� SALTON. �����, ������ ���� ����&nbsp;&mdash; <nobr>����-������</nobr>. �&nbsp;���&nbsp;�� �������� ���� �������. ������ ����� �������� ������ ��� �&nbsp;������ ���������. �&nbsp;��� ��� �&nbsp;��������� ��������&nbsp;&mdash; ������� ����� �����, �&nbsp;����� ���������� �&nbsp;��������� ��������.</p>',
							
	/*'6' => '<a href="#"><strong>�����</strong>,&nbsp;32&nbsp;����,<br /> �������� ��<br/> �������� �������</a>
						<p>������� �&nbsp;��&nbsp;������ ����������� ����� ��&nbsp;������������. ��������� �&nbsp;������, ��� ������������. ��� ������� ��&nbsp;���� ������ ��������� ���� ����� �&nbsp;�������.<br />
    �&nbsp;���� ������ �&nbsp;��������� ��&nbsp;���� �������, �&nbsp;��� ���������� ������ ���� ��������. �������, ��� �&nbsp;������ &laquo;������ ������ ��&nbsp;�����&raquo;&nbsp;&mdash; &laquo;... ��, �&nbsp;��� ��&nbsp;����� ������� �����&raquo;.<br />
    ������� �������� ��� �&nbsp;���������� ��� ���� ������. ��� �������� �������, �������� ��&nbsp;��������, ��� ��� ���� ����-������ ������. ������ ������, �&nbsp;������ ��&nbsp;�������, ��� �������� ��� ����� ������ ����� ������ ����������� �&nbsp;����� ������������. ������ �&nbsp;������ ������� ������, ���� �&nbsp;���� �������.</p>',*/
							
	'7' => 	'<a href="#"><strong>����</strong>,&nbsp;25&nbsp;���,<br /> �������� �� ������ �<br/> ���������������.</a>
								<p>�&nbsp;������� PR-����������. ������� ��&nbsp;�������������� ��������&nbsp;&mdash; ���������� �&nbsp;�������. ������ �������! ��������� ����������, ����������� �&nbsp;�����������.<br />
    ��� ���� ���, �������&nbsp;��, ���� ��������� �����. �����, ���������� �������. ���������� ���� ����� ������, ��� �����������������.<br />
    �&nbsp;���� ��&nbsp;����������� ���� ��� ���������� ����� �������� ������, ��� ������ ���� ��&nbsp;����������. ��������, ��� ��� ������ �&nbsp;������� ��&nbsp;��� ��������.<br />
    ��� �������� �������� ����� �������� ����� ��&nbsp;������ ��������, �������������� ��&nbsp;�������� ������� ���������. �&nbsp;������� ����, ������� ������ �������� ����������� ����������. ��� ��� ���� Salton.<br />
    ����� ������� ���������� ��������, ��� ��� ������� ��&nbsp;��� ����� �&nbsp;������������� �&nbsp;����. �&nbsp;������ Salton �&nbsp;��������� ��&nbsp;��� ���!</p>',

    '8' => 	'<a href="#"><strong>�������</strong>,&nbsp;23&nbsp;����,<br /> ��������.</a>
								<p>... � ������� ����� �� ������ � ����� �� ��������� �� ���� ��������� �����. � �� ����� ������� �����... � � ����� �� ������ ��� ��� ����� ����. ��� �������, � �������, ��� ��� ������� ������������� ���� ���� ����� �������� � ��������� ��������. ���� ��� ������ ����������� ����� �� ������������� ��������� :)) ����-����� ����� ���������:)). ������� ���� - ���������... �������� � ������� ���� �� �����-������ ���������. �������� ������� ��� �������� Salton. ������ - ��� ��������!<br />
 � �����, �������, ��� �����. ��� ����������� ����� ������� �� ���� �� ������, ������� �������� ����������. �������!</p>',
 
 '9' => 	'<a href="#"><strong>������</strong>,&nbsp;30&nbsp;����,<br /> ������������.</a>
								<p>��������� Salton ������������ ��������� ���� �������� ������� �������� ������� ������ 2008 �. �� � ����� ������� ����� �����-��������� � ��������� � ������. 29 ������� ��������� ��� �������� ��������� �������, �������� ������������ � �������� �������� �������� ��� ������. �����, ��� � � �������� ���������� �� ���� � ��������� ����� �������, ������������, ��� ���� ��� ������ ��������� ������ ���...���...������! � �� ��� �� ����� � �������� �������� �����, ��� �� ������ ������ ��������� ����� ������ �������� � ��� ��������� ������ ��������� ������ �������� ����. "������ �� ���� ��� ���� � �����" ������ �� ������ ���� �����, �� � ��� ����� �� �������! � ���� ��������� �����, ������� ��� �������� ������ ��� ��������� � ����� �������� �� ������ ������ ��� ���� �� �������! � ����� � ���� ��� ��� ����������� ��� ��� � �� ���� �� �� ������������� ���������� � �����! ��� ������ � ���� ������� � ������� ��������� �������� � Salton! ������ ��� ����, �� �������!</p>'
) 
?>

<div class="tabber">
<? 
$output = array_rand($items, 4);
//$output = getRandElementNumbers($items, 4);
foreach ($output as $item) {
?>
    <div class="tabs">
        <?=$items[$item]?>	
    </div>
    
<? } ?>

	<div class="clear"></div>
</div>