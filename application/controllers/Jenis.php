<?php
    class Jenis extends CI_Controller{
        function index(){
            $this->load->model('M_jenis');
            $data['jeniskamar'] = $this->M_jenis->tampil_data()->result();
            $this->load->view('partial_admin/head');
            $this->load->view('partial_admin/body');
            $this->load->view('partial_admin/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('partial_admin/sidebar');
            $this->load->view('partial_admin/js');
            $this->load->view('jenis/jenis_kamar_v', $data);
        } 
        function tambah_data(){
            
            $this->load->view('partial_admin/head');
            $this->load->view('partial_admin/body');
            //$this->load->view('partial_admin/navigasi');
            //$this->load->view('admin_v');
            //$this->load->view('partial_admin/sidebar');
            $this->load->view('jenis/tambah_jenis');
            $this->load->view('partisi/js');
        }
        function save(){
            $add =
            [
                'nama_jenis_kamar'            =>  $this->input->post('nama_jenis_kamar'),
                'keterangan'       =>  $this->input->post('keterangan'),
                'harga'            =>  $this->input->post('harga'),
                'foto'             =>  $this->input->post('foto'),
               
            ];
            $this->db->insert('tbl_jenis_kamar',$add);
            redirect('jenis');
        }
        function hapus($id){
            $id = $id;
            $this->db->delete('tbl_jenis_kamar', ['id' => $id]);
            redirect('jenis');
       } 
       function edit($id){
        $this->load->model('M_jenis');
        $data['jenis'] = $this->M_jenis->get_data($id)->row_array();
        $this->load->view('partial_admin/head');
        $this->load->view('partisi_admin/body');
        //$this->load->view('partial_admin/navigasi');
        //$this->load->view('admin_v');
        //$this->load->view('partial_admin/sidebar');
        $this->load->view('partial_home/js');
        $this->load->view('jenis/edit',$data);
    }
    function editsimpan(){
        $id = $this->input->post('id');
        $update =
        [
                'nama_jenis_kamar'            =>  $this->input->post('nama_jenis_kamar'),
                'keterangan'       =>  $this->input->post('keterangan'),
                'harga'            =>  $this->input->post('harga'),
                'foto'             =>  $this->input->post('foto'),
        ];
        $update = $this->db->update('tbl_jenis_kamar',$update, ['id' => $id]);
        redirect('jenis');
    }
}
?>