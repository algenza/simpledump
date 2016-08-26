<?php

namespace Algenza\Simpledump;

class Dumper
{
	public function sd($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

}


