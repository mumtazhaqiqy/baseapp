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
			$this->load->helper('my_alert_helper');

			if ($this->aauth->is_loggedin()) {
					redirect(last_url());
			}
			$this->load->model('logs');
			if($this->input->post('identity') || $identity != null )
			{
					// do check aauth
					if($identity == null) {
						$identity = $this->input->post('identity');
						$password = $this->input->post('password');
					}

					if($this->aauth->login($identity, $password, FALSE)){
						redirect('auth/home');
					} else {
						set_message('error', 'username dan password salah');
						redirect('auth/login');
					}

			}
			else {
				$data['name'] = $this->title;
				$data['logo'] = $this->logo;
				$data['login'] = $this->config->item('login');
				$this->layout->set_wrapper('login', $data);

				$this->layout->render('auth');
			}

	}

	public function home()
	{
			$this->layout->auth();
			echo "you're logged in";
	}


	public function logout()
	{
			$this->aauth->logout();
			redirect('auth/login');
	}

	public function create_user()
	{
			$email = $this->input->get('email');
			$pass = $this->input->get('pass');
			$username = $this->input->get('username');

			$this->aauth->create_user($email, $pass, $username);
			return true;
	}
}
