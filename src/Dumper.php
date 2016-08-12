<?php

namespace Algenza\Simpledump;

class Dumper
{
	public function simpleDump($var)
	{
		echo "<pre>";
		print_r($var);
		echo "<pre>";
	}
}

