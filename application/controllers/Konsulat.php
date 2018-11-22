<?php
class Konsulat extends CI_Controller{
    function jakarta(){
		$this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['jakarta']    	= $this->db->get_where('t_alumni',array('konsulat'=>'1'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/jakarta',$data);
		$this->load->view('layout/footer');
    }
    function bandung(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['bandung']  	  	= $this->db->get_where('t_alumni',array('konsulat'=>'2'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/bandung',$data);
		$this->load->view('layout/footer');
    }
    function bogor(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['bogor']    		= $this->db->get_where('t_alumni',array('konsulat'=>'3'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/bogor',$data);
		$this->load->view('layout/footer');
    }
    function inter(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['inter']    		= $this->db->get_where('t_alumni',array('konsulat'=>'4'))->result();
		
		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/inter',$data);
		$this->load->view('layout/footer');
    }
    function jabar(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['jabar'] 			= $this->db->get_where('t_alumni',array('konsulat'=>'5'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/jabar',$data);
		$this->load->view('layout/footer');
    }
    function jateng(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['jateng']    		= $this->db->get_where('t_alumni',array('konsulat'=>'6'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/jateng',$data);
		$this->load->view('layout/footer');
    }   
    function jogja(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['jogja']	    	= $this->db->get_where('t_alumni',array('konsulat'=>'7'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/jogja',$data);
		$this->load->view('layout/footer');
    }
    function kalimantan(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['kalimantan']    	= $this->db->get_where('t_alumni',array('konsulat'=>'8'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/kalimantan',$data);
		$this->load->view('layout/footer');
    }
    function malang(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['malang']    		= $this->db->get_where('t_alumni',array('konsulat'=>'9'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/malang',$data);
		$this->load->view('layout/footer');
    }
    function nusa(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['nusa']		    = $this->db->get_where('t_alumni',array('konsulat'=>'10'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/nusa',$data);
		$this->load->view('layout/footer');
    }
    function sulawesi(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['sulawesi']    	= $this->db->get_where('t_alumni',array('konsulat'=>'11'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/sulawesi',$data);
		$this->load->view('layout/footer');
    }
    function sumatera(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['sumatera']    	= $this->db->get_where('t_alumni',array('konsulat'=>'12'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/sumatera',$data);
		$this->load->view('layout/footer');
    }
    function surabaya(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['surabaya']    	= $this->db->get_where('t_alumni',array('konsulat'=>'13'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/surabaya',$data);
		$this->load->view('layout/footer');
    }
    function tangerang(){
        $this->load->model('M_Forsadqm');
		$data['alumni']		= $this->M_Forsadqm->alumni()->result();
		$data['konsulat']	= $this->M_Forsadqm->konsulat()->result();
		$data['angkatan']	= $this->M_Forsadqm->angkatan()->result();

		$data['tangerang']    	= $this->db->get_where('t_alumni',array('konsulat'=>'14'))->result();

		$data['irhaby']			= $this->db->get_where('t_alumni',array('angkatan'=>'1'))->result();
		$data['hamasatuna']		= $this->db->get_where('t_alumni',array('angkatan'=>'2'))->result();
		$data['sirius']			= $this->db->get_where('t_alumni',array('angkatan'=>'3'))->result();
		$data['gradien']		= $this->db->get_where('t_alumni',array('angkatan'=>'4'))->result();
		$data['equator']		= $this->db->get_where('t_alumni',array('angkatan'=>'5'))->result();
		$data['relativity']		= $this->db->get_where('t_alumni',array('angkatan'=>'6'))->result();

		$this->load->view('layout/header');
		$this->load->view('konsulat/tangerang',$data);
		$this->load->view('layout/footer');
    }
}
?>