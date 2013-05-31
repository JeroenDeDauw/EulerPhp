<?php

class CoinSums {

	protected $coinValues;

	public function __construct() {
		$this->coinValues = array( 1, 2, 5, 10, 20, 50, 100, 200 );
	}

	public function getCoinCombinationCount( $amount ) {
		return 0;
	}

}