<?php

namespace Algenza\Simpledump;

if (! function_exists('simpleDump')) {

	public function simpleDump($var)
	{
		echo "<pre>";
		print_r($var);
		echo "<pre>";
	}
	
}


