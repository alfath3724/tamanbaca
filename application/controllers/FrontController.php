<?php

/**
 * @property BacaanModel $bacaan
 */
class FrontController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BacaanModel', 'bacaan');
	}

	public function index(){
		$data['data'] = $this->bacaan->getData();
		return $this->load->view('front/index', $data);
	}

	public function about(){
		//halaman about us
		$this->load->view('front/about');
	}

	public function detail($id){
		$data['data'] = $this->bacaan->getOne($id);
		$this->load->view('front/baca', $data);
	}

	public function kategori(){
		//halaman detail bacaan nya
		$this->load->view('front/kategori');
	}
}
