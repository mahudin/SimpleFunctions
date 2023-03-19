<?php

$indexes = [];

function randomGen(int $min, int $max, int $quantity): string {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity)[0];
}

function hashOrder(int $number): string
{
	if(!empty($indexes[$number])){
		return $indexes[$number];
	} 		
	else {
		$newHash = str_pad(randomGen(1,9999999,1), 7, '0', STR_PAD_RIGHT);
		$indexes[$number] = $newHash;
		return $newHash;
	}
}
?>