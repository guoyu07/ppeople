<?php

if (!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

/**
 * 用户控制器
 *
 */
class People extends CI_Controller
{

	public function index()
	{
		$this->load->view('people/index');
	}

}