<?php

require_once __DIR__ . '/../src/CoinSums.php';

class CoinSumsTest extends PHPUnit_Framework_TestCase {

	public function testCanConstruct() {
		new CoinSums();
		$this->assertTrue( true );
	}

	public function testCallGetCoinCombinationCount() {
		$coinSums = new CoinSums();
		$count = $coinSums->getCoinCombinationCount( 1 );
		$this->assertInternalType( 'int', $count );
	}

}
