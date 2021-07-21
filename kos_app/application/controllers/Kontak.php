<?php 
class Kontak extends CI_Controller
{
    var $limit=10;
    var $offset=10;
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_model');
        $this->load->helper(array('url'));
    }

    function index($page=NULL,$offset='',$key=NULL)
    {
        //print_r($this->prodi_model->ambil_data());
        $data['kontak'] = $this->Kontak_model->ambil_data();
        $this->load->view('Admin/Kontak_list',$data);
    }

    function tambah()
    {
        $data = array(
            'aksi'              => site_url('Kontak/tambah_aksi'),
            'nama_kontak'    => set_value('nama_kontak'),
            'alamat'    => set_value('alamat'),
            'email'    => set_value('email'),
            'no_telepon'    => set_value('no_telepon'),
            'no_rekening'    => set_value('no_rekening'),
            'id_kontak'         => set_value('id_kontak'),
            'button'            => 'Tambah'
        );
        $this->load->view('Admin/Kontak_form',$data);
    }

    function tambah_aksi()
    {

        $this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                    'gambar_pemilik'      =>$gbr['file_name'],
                    'nama_kontak'        => $this->input->post('nama_kontak'),
                    'alamat'        => $this->input->post('alamat'),
                    'email'        => $this->input->post('email'),
                    'no_telepon'        => $this->input->post('no_telepon'),
                    'no_rekening'        => $this->input->post('no_rekening')
                );
                $this->Kontak_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil ditambahkan !!</div></div>");
                redirect('kontak'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data gagal ditambahkan!!</div></div>");
                redirect('kontak'); //jika gagal maka akan ditampilkan form upload
            }
        }


        $data = array(
            'nama_kontak'           => $this->input->post('nama_kontak'),
            'alamat'        => $this->input->post('alamat'),
            'email'        => $this->input->post('email'),
            'no_telepon'        => $this->input->post('no_telepon'),
            'no_rekening'        => $this->input->post('no_rekening')
        );
        $this->Kontak_model->tambah_data($data);
        redirect(site_url('kontak'));
    }

    function delete($id)
    {
        $this->Kontak_model->hapus_data($id);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('kontak');
    }

    function update($id)
    {
        $kontak = $this->Kontak_model->ambil_data_id($id);
        $data = array(
            'aksi'              => site_url('kontak/update_aksi'),
            'nama_kontak'    => set_value('nama_kontak',$kontak->nama_kontak),
            'alamat'    => set_value('alamat',$kontak->alamat),
            'email'    => set_value('email',$kontak->email),
            'no_telepon'    => set_value('no_telepon',$kontak->no_telepon),
            'no_rekening'    => set_value('no_rekening',$kontak->no_rekening),
            'id_kontak'         => set_value('id_kontak',$kontak->id_kontak),
            'button'            => 'Perbarui'
        );
        $this->load->view('Admin/Kontak_form',$data);       
    }

    function update_aksi()
    {

        $this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                    'gambar_pemilik'      =>$gbr['file_name'],
                     'nama_kontak'        => $this->input->post('nama_kontak'),
                    'alamat'        => $this->input->post('alamat'),
                    'email'        => $this->input->post('email'),
                    'no_telepon'        => $this->input->post('no_telepon'),
                    'no_rekening'        => $this->input->post('no_rekening')
                );  

                $id_kontak = $this->input->post('id_kontak');
                $this->Kontak_model->edit_data($id_kontak,$data);

                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('kontak');
            }
            else{
              $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data gagal diubah!!</div></div>");
              redirect('kontak_form', 'refresh');

          }

      }
      $data = array(
                    'nama_kontak'        => $this->input->post('nama_kontak'),
                    'alamat'        => $this->input->post('alamat'),
                    'email'        => $this->input->post('email'),
                    'no_telepon'        => $this->input->post('no_telepon'),
                    'no_rekening'        => $this->input->post('no_rekening')

    );
      $id_kontak = $this->input->post('id_kontak');
      $this->Kontak_model->edit_data($id_kontak,$data);
      redirect('kontak');
  }
}
?>