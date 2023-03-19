<?php

function findUniqueString(string $string): int
{
		$stringLength = strlen($string);
		if(preg_match("#^[a-z]*$#", $string) && ($stringLength >= 1 && $stringLength <= pow(10,5))){
			$stringAsArray = str_split($string, 1);
			$lengthString = sizeof($stringAsArray);
			for ($i = 0; $i < $lengthString; $i++)
			{
				$j = null;
				for ($j = 0; $j< $lengthString; $j++)
					if ($i != $j && $stringAsArray[$i] == $stringAsArray[$j])
						break;
				if ($j == $lengthString)
					return $i+1;
			}
		}
		return -1;
}
?>