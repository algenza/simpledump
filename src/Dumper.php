<?php

namespace Algenza\Simpledump;

class Dumper
{
	/**
	 * Simple Pretty Print Vars
	 * 
	 * @param mixed $var
 	 */
	public function sd($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

}


