<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	private $title = 'Login Page';

	private $logo = 'mylogo';

	private $login_view = 'login';

	/**
	 * Login page.
	 *
	 * @return HTML
	 **/
	public function login($identity = null, $password = null)
	{
			if ($this->aauth->is_loggedin()) {
					redirect(last_url());
			}

			$this->load->model('logs');

			if($this->input->post('identity') || $identity != null )
			{
					// do check aauth
			}
			else {

				$data['name'] = $this->title;
				$data['logo'] = $this->logo;

				// $data['message'] = $this->session->flashdata('message');

				$this->layout->set_wrapper('login', $data);
				
				$this->layout->render('auth');
			}

	}
}
