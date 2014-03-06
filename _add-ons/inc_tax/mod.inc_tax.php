<?php

class Modifier_inc_tax extends Modifier
{
	public function index($value, $parameters=array())
	{
		$config = $this->addon->api('bison')->getBisonConfig();
		$tax = $config['tax_rate'];
		$decimal = $config['decimal_point'];
		$separator = $config['thousands_separator'];
		$value = str_replace($decimal, '.', str_replace($separator, '', $value));
		return number_format($value + $value * $tax/100, 2, $decimal, $separator);
	}
}