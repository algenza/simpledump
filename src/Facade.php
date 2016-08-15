<?php
namespace Algenza\Simpledump;

use Illuminate\Support\Facades\Facade;

class DumperFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'dumper';
	}

}