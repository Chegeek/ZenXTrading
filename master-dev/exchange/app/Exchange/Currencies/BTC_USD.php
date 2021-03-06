<?php namespace App\Exchange\Currencies;

use Illuminate\Database\Eloquent\Model;

// Ƀitcoin to USD
class BTC_USD extends \App\Exchange\BaseCurrency {


	public function __construct(){
		$this->currency_model = "btc-usd";
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'btc-usd_orders';

}
