<?php
//require __DIR__.'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;


class Test extends PHPUnit_Framework_TestCase
{
	public function test_check()
	{
		$array = [1,2,3,4,5];

		$result = $this->generateDumper($array);
		$comparator = $this->comparator($array);
		$this->assertEquals($result,$comparator);
	}
	private function generateDumper(array $val)
	{
		$dumper = new \Algenza\Simpledump\Dumper;
		
		ob_start();
		$dumper->sd($val);
		$output = ob_get_clean();
		return $output;
	}
	private function comparator(array $val)
	{
		ob_start();
		echo '<pre>';print_r($val);echo '</pre>';
		$output = ob_get_clean();
		return $output;		
	}
}