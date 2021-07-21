<?php 
class Fasilitas extends CI_Controller
{
    var $limit=10;
    var $offset=10;
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fasilitas_model');
        $this->load->helper(array('url'));
    }

    function index($page=NULL,$offset='',$key=NULL)
    {
        //print_r($this->prodi_model->ambil_data());
        $data['fasilitas'] = $this->Fasilitas_model->ambil_data();
        $this->load->view('Admin/Fasilitas_list',$data);
    }

    function tambah()
    {
        $data = array(
            'aksi'              => site_url('Fasilitas/tambah_aksi'),
            'nama_fasilitas'    => set_value('nama_fasilitas'),
            'id_fasilitas'         => set_value('id_fasilitas'),
            'button'            => 'Tambah'
        );
        $this->load->view('Admin/Fasilitas_form',$data);
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
                    'gambar_fasilitas'      =>$gbr['file_name'],
                    'nama_fasilitas'        => $this->input->post('nama_fasilitas')

                );
                $this->Fasilitas_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil ditambahkan !!</div></div>");
                redirect('fasilitas'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data gagal ditambahkan!!</div></div>");
                redirect('fasilitas'); //jika gagal maka akan ditampilkan form upload
            }
        }


        $data = array(
            'nama_fasilitas'           => $this->input->post('nama_fasilitas')
        );
        $this->Fasilitas_model->tambah_data($data);
        redirect(site_url('fasilitas'));
    }

    function delete($id)
    {
        $this->Fasilitas_model->hapus_data($id);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('fasilitas');
    }

    function update($id)
    {
        $fasilitas = $this->Fasilitas_model->ambil_data_id($id);
        $data = array(
            'aksi'              => site_url('fasilitas/update_aksi'),
            'nama_fasilitas'    => set_value('nama_fasilitas',$fasilitas->nama_fasilitas),
            'id_fasilitas'         => set_value('id_fasilitas',$fasilitas->id_fasilitas),
            'button'            => 'Perbarui'
        );
        $this->load->view('Admin/Fasilitas_form',$data);       
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
                    'gambar_fasilitas'      =>$gbr['file_name'],
                    'nama_fasilitas'        => $this->input->post('nama_fasilitas')
                );  

                $id_fasilitas = $this->input->post('id_fasilitas');
                $this->Fasilitas_model->edit_data($id_fasilitas,$data);

                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('fasilitas');
            }
            else{
              $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data gagal diubah!!</div></div>");
              redirect('fasilitas_form', 'refresh');

          }

      }
      $data = array(
        'nama_fasilitas'           => $this->input->post('nama_fasilitas')

    );
      $id_fasilitas = $this->input->post('id_fasilitas');
      $this->Fasilitas_model->edit_data($id_fasilitas,$data);
      redirect('fasilitas');
  }
}
?>