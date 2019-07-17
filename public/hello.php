<?php
function createRange($number)
{
	$data = [];
	for($i = 0; $i < $number; $i++)
	{
		$data[] = time();
	}

	return $data;
}

$result = createRange(10);
foreach($result as $value)
{
	sleep(1);
	echo $value.'<br>';
}