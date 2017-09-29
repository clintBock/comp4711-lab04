<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Must extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Echo - subcontroller in a subfolder
	 */
	public function wehave()
	{
		// Issue Echo
		$this->show(5);

	}

}
