<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['ikan'] = $this->db->get('ikan')->result();
		$this->load->view('master/header');
        $this->load->view('home',$data);
        $this->load->view('master/footer');
	}

    public function create()
	{
        if($this->input->server('REQUEST_METHOD') === 'POST'){
            $data = $this->input->post();
            $data['tanggal_tangkap'] = date('Y-m-d',strtotime($data['tanggal_tangkap']));
            $this->db->insert('ikan',$data);
            redirect('home');
        }
        else{
            $this->load->view('master/header');
            $this->load->view('create');
            $this->load->view('master/footer');
        }
    }

    public function update($id)
    {
        if($this->input->server('REQUEST_METHOD') === 'POST'){
            $data = $this->input->post();
            $data['tanggal_tangkap'] = date('Y-m-d',strtotime($data['tanggal_tangkap']));
            $this->db->where('id',$id);
            $this->db->update('ikan',$data);
            redirect('home');
        }
        else{
            $data['item'] = $this->db->get_where('ikan',['id'=>$id])->row();
            $this->load->view('master/header');
            $this->load->view('update',$data);
            $this->load->view('master/footer');
        }
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('ikan');
        redirect('home');
    }
}
