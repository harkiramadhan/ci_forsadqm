<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forsadqm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/indexs
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){	
		$this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['jakarta']    	= $this->db->get_where('t_alumni',array('konsulat'=>'1'))->result();
		$data['bandung']  	  	= $this->db->get_where('t_alumni',array('konsulat'=>'2'))->result();
		$data['bogor']    		= $this->db->get_where('t_alumni',array('konsulat'=>'3'))->result();
		$data['inter']    		= $this->db->get_where('t_alumni',array('konsulat'=>'4'))->result();
		$data['jabar'] 			= $this->db->get_where('t_alumni',array('konsulat'=>'5'))->result();
		$data['jateng']    		= $this->db->get_where('t_alumni',array('konsulat'=>'6'))->result();
		$data['jogja']	    	= $this->db->get_where('t_alumni',array('konsulat'=>'7'))->result();
		$data['kalimantan']    	= $this->db->get_where('t_alumni',array('konsulat'=>'8'))->result();
		$data['malang']    		= $this->db->get_where('t_alumni',array('konsulat'=>'9'))->result();
		$data['nusa']		    = $this->db->get_where('t_alumni',array('konsulat'=>'10'))->result();
		$data['sulawesi']    	= $this->db->get_where('t_alumni',array('konsulat'=>'11'))->result();
		$data['sumatera']    	= $this->db->get_where('t_alumni',array('konsulat'=>'12'))->result();
		$data['surabaya']    	= $this->db->get_where('t_alumni',array('konsulat'=>'13'))->result();
		$data['tangerang']    	= $this->db->get_where('t_alumni',array('konsulat'=>'14'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('index',$data);
		$this->load->view('layout/footer');
	}
	
}
