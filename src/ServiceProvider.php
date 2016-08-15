<?php

namespace Algenza\Simpledump;

use Illuminate\Support\ServiceProvider as Lsp;
class ServiceProvider extends Lsp
{
	public function register()
	{
		$this->app->singleton('dumper', function ($app)
		{
			return new Dumper;
		});

		$this->app->alias('dumper','Algenza\Simpledump\Dumper');
	}

	public function provides()
	{
		return ['dumper', 'Algenza\Simpledump\Dumper'];
	}
}