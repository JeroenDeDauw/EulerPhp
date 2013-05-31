<?php

require_once __DIR__ . '/../src/CoinSums.php';

class CoinSumsTest extends PHPUnit_Framework_TestCase {

	public function testCanConstruct() {
		new CoinSums();
		$this->assertTrue( true );
	}

}
