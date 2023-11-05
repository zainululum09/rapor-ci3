<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data = [
			'page_title'=> 'Beranda'
		];
		$this->template->load('template','test', $data);
	}

    public function data()
    {
        $data = [
            'page_title' => 'Data Master'
        ];
        $this->template->load('template', 'admin/data', $data);
    }

}
