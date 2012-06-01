<?php

function removeFromBeginning($haystack, $needle)
{
	if (mb_strpos($haystack, $needle) === 0)
	{
		$length_needle = mb_strlen($needle);
		return mb_substr($haystack, $length_needle);
	}

	return $haystack;
}

?>
