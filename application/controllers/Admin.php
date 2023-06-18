<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        // cek login
        if ($this->session->userdata('status') != "v_login" ) {
            redirect(base_url() . 'welcome?pesan=belumlogin');
        }
    }    

    public function index(){ 

     $data['transaksi'] = $this->db->query("select * from transaksi order by id_transaksi desc limit 10")->result();
     $data['pelanggan'] = $this->db->query("select * from pelanggan order by id_pelanggan desc limit 10")->result();
     $data['bajucosplay'] = $this->db->query("select * from bajucosplay order by id_cosplay desc limit 10")->result();
        
        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'welcome?pesan=logout');
    }

    public function bajucosplay(){
        $data['bajucosplay'] = $this->m_rental->get_data('bajucosplay')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/bajucosplay', $data);
        $this->load->view('admin/footer');
    }

    public function bajucosplay_add(){
        $this->load->view('admin/header');
        $this->load->view('admin/bajucosplay_add');
        $this->load->view('admin/footer');

    }

    public function bajucosplay_add_act(){
        $nama = $this->input->post('nama');
        $ukuran = $this->input->post('ukuran');
        $sepatu = $this->input->post('sepatu');
        $uksepatu = $this->input->post('uksepatu');
        $status = $this->input->post('status');

        $this->form_validation->set_rules('nama', 'Nama Baju Cosplay', 'required');
        $this->form_validation->set_rules('status', 'Status Baju Cosplay', 'required');
        
        if($this->form_validation->run() != false){
            $data = array(
                'baju_cosplay' => $nama,
                'ukbaju_cosplay' => $ukuran,
                'sepatu_cosplay' => $sepatu,
                'uksepatu_cosplay' => $uksepatu,
                'status_cosplay' => $status

            );
            $this->m_rental->insert_data($data, 'bajucosplay');
            redirect(base_url(). 'admin/bajucosplay');
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/bajucosplay_add');
            $this->load->view('admin/footer');
        }

    }

    public function bajucosplay_edit($id){
        $where = array(
            'id_cosplay' => $id
        );
        $data['bajucosplay'] = $this->m_rental->edit_data($where, 'bajucosplay')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/bajucosplay_edit', $data);
        $this->load->view('admin/footer');
    }

    public function bajucosplay_update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $ukbaju = $this->input->post('ukbaju');
        $sepatu = $this->input->post('sepatu');
        $uksepatu = $this->input->post('uksepatu');
        $status = $this->input->post('status');

        $this->form_validation->set_rules('nama', 'Nama Baju Cosplay', 'required');
        $this->form_validation->set_rules('status', 'Status Baju Cosplay', 'required');
        
        if($this->form_validation->run() != false){
            $where = array(
                'id_cosplay' => $id
            );
            $data = array(
                'baju_cosplay' => $nama,
                'ukbaju_cosplay' => $ukbaju,
                'sepatu_cosplay' => $sepatu,
                'uksepatu_cosplay' => $uksepatu,
                'status_cosplay' => $status
            );
            $this->m_rental->update_data($where, $data, 'bajucosplay');
            redirect(base_url(). 'admin/bajucosplay');
        }else{
            $where = array(
                'id_cosplay' => $id
            );
            $data['bajucosplay'] = $this->m_rental->edit_data($where, 'bajucosplay')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/bajucosplay_edit', $data);
            $this->load->view('admin/footer');
        }        
    }

    public function bajucosplay_hapus($id){
        $where = array(
            'id_cosplay' => $id
        );
        $this->m_rental->delete_data($where, 'bajucosplay');
        redirect(base_url(). 'admin/bajucosplay');
    }

    public function pelanggan(){
        $data['pelanggan'] = $this->m_rental->get_data('pelanggan')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/pelanggan', $data);
        $this->load->view('admin/footer');
    }

    public function pelanggan_add(){
        $this->load->view('admin/header');
        $this->load->view('admin/pelanggan_add');
        $this->load->view('admin/footer');
    }

    public function pelanggan_add_act(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $hp = $this->input->post('hp');
        $ktp = $this->input->post('ktp');

        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        // $this->form_validation->set_rules('status', 'Status Pacar', 'required');
        
        if($this->form_validation->run() != false){
            $data = array(
                'nama_pelanggan' => $nama,
                'alamat_pelanggan' => $alamat,
                'jk_pelanggan' => $jk,
                'hp_pelanggan' => $hp,
                'ktp_pelanggan' => $ktp

            );
            $this->m_rental->insert_data($data, 'pelanggan');
            redirect(base_url(). 'admin/pelanggan');
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/pelanggan_add');
            $this->load->view('admin/footer');
        }

    }

    public function pelanggan_edit($id){
        $where = array(
            'id_pelanggan' => $id
        );
        $data['pelanggan'] = $this->m_rental->edit_data($where, 'pelanggan')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/pelanggan_edit', $data);
        $this->load->view('admin/footer');
    }

    public function pelanggan_update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $hp = $this->input->post('hp');
        $ktp = $this->input->post('ktp');

        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        
        if($this->form_validation->run() != false){
            $where = array(
                'id_pelanggan' => $id
            );
            $data = array(
                'nama_pelanggan' => $nama,
                'alamat_pelanggan' => $alamat,
                'jk_pelanggan' => $jk,
                'hp_pelanggan' => $hp,
                'ktp_pelanggan' => $ktp
            );
            $this->m_rental->update_data($where, $data, 'pelanggan');
            redirect(base_url(). 'admin/pelanggan');
        }else{
            $where = array(
                'id_cosplay' => $id
            );
            $data['pelanggan'] = $this->m_rental->edit_data($where, 'pelanggan')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/pelanggan_edit', $data);
            $this->load->view('admin/footer');
        }        
    }  
    
    public function pelanggan_hapus($id){
        $where = array(
            'id_pelanggan' => $id
        );
        $this->m_rental->delete_data($where, 'pelanggan');
        redirect(base_url(). 'admin/pelanggan');
    }

    public function transaksi(){
        $data['transaksi'] = $this->db->query("select * from transaksi, bajucosplay, pelanggan where 
        transaksi.cosplay_transaksi = bajucosplay.id_cosplay and 
        transaksi.pelanggan_transaksi = pelanggan.id_pelanggan")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/transaksi', $data);
        $this->load->view('admin/footer');
    } 
    
    public function transaksi_add(){
        $w = array('status_cosplay'=>'1');
        $data['bajucosplay'] = $this->m_rental->edit_data($w, 'bajucosplay')->result();
        $data['pelanggan'] = $this->m_rental->get_data('pelanggan')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/transaksi_add', $data);
        $this->load->view('admin/footer');
    }

    public function transaksi_add_act(){
        $pelanggan = $this->input->post('pelanggan');
        $bajucosplay = $this->input->post('bajucosplay');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $harga = $this->input->post('harga');
        $denda = $this->input->post('denda');
        
        $this->form_validation->set_rules('pelanggan', 'Pelanggan', 'required');
        $this->form_validation->set_rules('bajucosplay', 'Baju Cosplay Sewa', 'required');
        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tgl_kembali', 'Tanggal Kembali ', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('denda', 'Denda', 'required');

        if($this->form_validation->run() != false){
            $data = array(
                'karyawan_transaksi' => $this->session->userdata('id'),
                'pelanggan_transaksi' => $pelanggan,
                'cosplay_transaksi' => $bajucosplay,
                'tgl_pinjam_transaksi' => $tgl_pinjam,
                'tgl_kembali_transaksi' => $tgl_kembali,
                'harga_transaksi' => $harga,
                'denda_transaksi' => $denda,
                'tgl_transaksi' => date('Y-m-d'),
            );
            $this->m_rental->insert_data($data, 'transaksi');
            $d = array(
                'status_cosplay' => '2'
            );
            $w = array(
                'id_cosplay' => $bajucosplay
            );
            $this->m_rental->update_data($w, $d, 'bajucosplay');
            redirect(base_url(). 'admin/transaksi');      
        }else{
            $w = array('status_cosplay'=>'1');
            $data['bajucosplay'] = $this->m_rental->edit_data($w, 'bajucosplay')->result();
            $data['pelanggan'] = $this->m_rental->get_data('pelanggan')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/transaksi_add', $data);
            $this->load->view('admin/footer');
        }
        
    }

    public function transaksi_hapus($id){
        $w = array(
            'id_transaksi' => $id
        );
        $data = $this->m_rental->edit_data($w, 'transaksi')->row();

        $ww = array(
            'id_cosplay' => $data->id_cosplay
        );

        $data2 = array(
            'status_cosplay' => '1'
        );

        $this->m_rental->update_data($ww, $data2, 'bajucosplay');

        $this->m_rental->delete_data($w, 'transaksi');
        redirect(base_url(). 'admin/transaksi');
    }

    public function transaksi_selesai($id){
        $data['bajucosplay'] = $this->m_rental->get_data('bajucosplay')->result();
        $data['pelanggan'] = $this->m_rental->get_data('pelanggan')->result();
        $data['transaksi'] = $this->db->query("select * from transaksi, bajucosplay, pelanggan where 
        transaksi.pelanggan_transaksi = pelanggan.id_pelanggan and transaksi.cosplay_transaksi = 
        bajucosplay.id_cosplay and id_transaksi = '$id'")->result();

        $this->load->view('admin/header');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('admin/footer');
        
    }

    public function transaksi_selesai_act(){
        $id = $this->input->post('id');
        $tgl_dikembalikan = $this->input->post('tgl_dikembalikan');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $baju_cosplay = $this->input->post('baju_cosplay');
        $denda = $this->input->post('denda');
        
        $this->form_validation->set_rules('tgl_dikembalikan', 'Tanggal di kembalikan', 'required');
        
        if($this->form_validation->run() != false){
            $batas_kembali = strtotime($tgl_kembali);
            $dikembalikan = strtotime($tgl_dikembalikan);
            $selisih = abs(($batas_kembali - $dikembalikan)/(60*60*24));
            $total_denda = $denda*$selisih;

            $data = array(
                'tgl_dikembali_transaksi' => $tgl_dikembalikan,
                'status_transaksi' => '1',
                'totaldenda_transaksi' => $total_denda
            );
            $w = array(
                'id_transaksi' => $id
            );

            $this->m_rental->update_data($w, $data, 'transaksi');

            $data2 = array(
                'status_cosplay' => '1'
            );

            $w2 = array(
                'id_cosplay' => $baju_cosplay
            );

            $this->m_rental->update_data($w2, $data2, 'bajucosplay');
            redirect(base_url(). 'admin/transaksi');
        } else{
            $data['bajucosplay'] = $this->m_rental->get_data('bajucosplay')->result();
            $data['pelanggan'] = $this->m_rental->get_data('pelanggan')->result();
            $data['transaksi'] = $this->db->query("select * from transaksi, bajucosplay, pelanggan 
            where transaksi.cosplay_transaksi = bajucosplay.id_cosplay and transaksi.pelanggan_transaksi 
            = pelanggan.id_pelanggan and id_transaksi = '$id'")->result();

            $this->load->view('admin/header');
            $this->load->view('admin/transaksi_selesai', $data);
            $this->load->view('admin/footer');

        }        

    }

    // masuk ke pertemuan ke 13
    public function laporan(){
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');

        if($this->form_validation->run() != false){
            $data['laporan'] = $this->db->query("select * from transaksi, bajucosplay, pelanggan where cosplay_transaksi=id_cosplay 
            and pelanggan_transaksi=id_pelanggan and date(tgl_transaksi) >= '$dari'")->result();

            $this->load->view('admin/header');
            $this->load->view('admin/laporan_filter', $data);
            $this->load->view('admin/footer');
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/laporan');
            $this->load->view('admin/footer');
        }        
        
    }

    public function laporan_print(){
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        if($dari != "" && $sampai != ""){
            $data['laporan'] = $this->db->query("select * from transaksi, bajucosplay, pelanggan where cosplay_transaksi=id_cosplay 
            and pelanggan_transaksi=id_pelanggan and date(tgl_transaksi)>= '$dari'")->result();

            $this->load->view('admin/laporan_print', $data);            
        }else{
            redirect("admin/laporan");
        }
    }
}