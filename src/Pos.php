<?php
/**
 * Created by PhpStorm.
 * User: Engin
 * Date: 29.11.2018
 * Time: 04:08
 */

namespace SanalPos;


class Pos
{
	protected $config;

	function __construct($pos)
	{
		$this->config = include('config/' . $pos . '.php');
	}

}
