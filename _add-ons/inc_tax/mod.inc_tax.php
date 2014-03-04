<?php

class Modifier_inc_tax extends Modifier
{
	public function index($value, $parameters=array())
	{
		$config = $this->addon->api('bison')->getBisonConfig();
		$tax = $config['tax_rate'];
		return number_format($value + $value * $tax/100, 2);
	}
}