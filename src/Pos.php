<?php
/**
 * Created by PhpStorm.
 * User: Engin
 * Date: 29.11.2018
 * Time: 04:08
 */

namespace Gunberi\SanalPos;


class Pos
{
	protected $config;

	function __construct($pos)
	{
		$this->config = include(__DIR__ . '/../config/' . $pos . '.php');
	}

	function getConfig() {
		return $this->config;
	}

}
