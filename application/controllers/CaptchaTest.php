<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaptchaTest extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library("session");
	}

	public function index () {

		$this->load->helper('captcha');

		$vals = array(
      //  'word'          => 'Random word',
        'img_path'      => 'captcha_folder/',
        'img_url'       => 'http://localhost/captcha/captcha_folder/',
        'font_path'     => 'fonts/orangejuice 2.0.ttf',
        'img_width'     => '150',
        'img_height'    => 30,
        'expiration'    => 7200,
        'word_length'   => 5,
        'font_size'     => 16,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(0, 0, 0),
                'border' => array(255, 255, 255),
                'text' => array(255, 255, 255),
                'grid' => array(255, 0, 0)
        )
);

		$captcha = create_captcha($vals);

		$viewData = array (
			"captcha" => $captcha
		);

		$this->load->session->set_userdata("captcha_code", $captcha["word"]);

		$this->load->view("form_view", $viewData);
	}
	public function validate () {
		$personel_adi = $this->input->post("personel_adi");
		$captcha      = $this->input->post("captcha");
		$captcha_code = $this->session->userdata("captcha_code");

		echo $captcha_code;
	}
}
