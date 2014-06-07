<?php

if (!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

/**
 * 用户控制器
 *
 */
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// 检查用户是否已登录
		$email = $this->input->cookie('email');
		$password = $this->input->cookie('password');

		$this->load->model('Users');
		$userInfo = $this->Users->getUserByEmail($email);
		if (empty($userInfo) || $userInfo['password'] != $password)
		{
			redirect(base_url('/signin'));
		}
	}

	/**
	 * 用户首页
	 *
	 */
	public function index()
	{
		$data['title'] = '用户首页';
		$this->load->view('user/index', $data);
	}

	/**
	 * 发起活动
	 *
	 */
	public function newlaunch()
	{
		$data['title'] = '发起扯证';
		$this->load->view('user/newlaunch', $data);
	}

	/**
	 * 近期活动
	 *
	 */
	public function launch()
	{
		$data['title'] = '近期扯证';
		$this->load->view('user/launch', $data);
	}

	/**
	 * 个人资料
	 *
	 */
	public function profiled()
	{
		$data['title'] = '个人资料';
		$this->load->view('user/profiled', $data);
	}
}