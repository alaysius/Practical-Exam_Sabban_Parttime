<?php
$array = array('red','blue','black','red','blue','blue','red','gold');
foreach($array as $v)
{
	$arr[$v][] = 1;
}
foreach($arr as $k => $v)
{
	if(count($v) == 1)
		$o[] = $k;
}
print_r($o);
?>

