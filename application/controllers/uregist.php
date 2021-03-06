<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 11 Desember 2017
 */
class Uregist extends CI_Controller
{
     /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('regist_model'); 
        $this->load->model('mape_model'); 
        $this->load->model('mapping_model'); 
        $this->load->model('event_model'); 
        $this->load->model('sie_model'); 
        $this->load->model('mahasiswa_model'); 
        $this->load->model('detailpendaftaran_model'); 
    }

    /**
     * This function is used to load the add new regist form
     */
    function addNew()
    {       
        // $userId = $this->vendorId;
		// $this->global['pageTitle'] = 'TEDI : Add New Data';
        // $data['regist'] = $this->regist_model->addNewReg($userId);
        $idEvent = $this->uri->segment('2');
        $data['event'] = $this->mape_model->eventInfo($idEvent);
        $data['sie'] = $this->mape_model->mapeventInfo($idEvent);

        $this->load->view("form", $data, NULL);
    }

    function addNewRegist()
    {
        $idEvent = $this->uri->segment('2');
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('nim','Nim','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('nama','Nama','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('telepon','Telepon','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('prodi','Prodi','required');
        $this->form_validation->set_rules('angkatan','Angkatan','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('kelas','Kelas','trim|required');
        $this->form_validation->set_rules('jenkel','Jenkel','trim|required');
        $this->form_validation->set_rules('cv','Cv','required');
        $this->form_validation->set_rules('krs','Krs','required');
        // $this->form_validation->set_rules('sie','Sie','trim|required');
        if($this->form_validation->run() == FALSE)
        {
            $this->addNew();
        }
        else
        {
			// Mengambil segala inputan dari inputan user
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $telepon = $this->input->post('telepon');
            $prodi = $this->input->post('prodi');
            $angkatan = $this->input->post('angkatan');
            $kelas = $this->input->post('kelas');
            $jenkel = $this->input->post('jenkel');
            $cv = $this->input->post('cv');
            $krs = $this->input->post('krs');
            $sie = $this->input->post('sie');
			
			// ----------- Upload PDF dan KRS -----------//
			
            $namaFile = "dokumenEvently".time(); //nama file diberi nama langsung dan diikuti fungsi time
            $config['upload_path'] = './assets/mahasiswa/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 1000;
            $config['file_name'] = $namaFile; //nama yang terupload nantinya

            $this->load->library('upload', $config);
            
			// ----------- push data ke tabel PENDAFTARAN -----------//
			
            $regInfo = array('nim'=>$nim,'cv'=>$cv,'krs'=>$krs, 'createdDtm'=>date('Y-m-d H:i:s'));
            $result = $this->regist_model->addNewReg($regInfo);
            
			// --------- get id_pendaftaran -----------
			
			$getIdRegist = $this->regist_model->getRegist();
			
            foreach ($getIdRegist as $record) {
                $idRegist = $record->id_pendaftaran;
            }
			
            // $getIdEvent = $this->event_model->listEvent(4);
            // foreach ($getIdEvent as $record2) {
            //     $idEvent = $record2->id_event;
            // }

			// ----------- push data ke tabel MAHASISWA -----------//
            
            $mhsInfo = array('nim' =>$nim,'kelas' =>$kelas,'nama' =>$nama,'no_telp' =>$telepon,'angkatan' =>$angkatan,'jenkel' =>$jenkel,'id_prodi' =>$prodi);
            $this->mahasiswa_model->addNewMhs($mhsInfo);

			// --------- get id_mapping_event ----------
            
			$ziez = implode(",",$sie);
            $getIdMape = $this->mape_model->getMape($idEvent,$ziez[0]);

                foreach ($getIdMape as $record3) {
                    $idMape = $record3->id_mapping_event;
            }
            if($ziez[2] != null){
                $getIdMape2 = $this->mape_model->getMape($idEvent,$ziez[2]);
                foreach ($getIdMape2 as $record3) {
                    $idMape2 = $record3->id_mapping_event;
                }
                $dpInfo = array('id_pendaftaran' =>$idRegist,'id_mapping_event' =>$idMape,'status' =>"proses",'createdDtm'=>date('Y-m-d H:i:s'));
                $dpInfo2 = array('id_pendaftaran' =>$idRegist,'id_mapping_event' =>$idMape2,'status' =>"proses",'createdDtm'=>date('Y-m-d H:i:s'));
                $this->detailpendaftaran_model->addNewDp($dpInfo);
                $this->detailpendaftaran_model->addNewDp($dpInfo2);
            }else{
                $dpInfo = array('id_pendaftaran' =>$idRegist,'id_mapping_event' =>$idMape,'status' =>"proses",'createdDtm'=>date('Y-m-d H:i:s'));
                $this->detailpendaftaran_model->addNewDp($dpInfo);
            }

            if($result > 0)
            {
                $this->session->set_flashdata('success', "ID Regist=".$idRegist." |ID mape2=".$idMape2." |ID mape=".$idMape." |ziez=".$ziez);
            }
            else
            {
                $this->session->set_flashdata('error', 'Sie creation failed');
            }
                
            redirect('viewDetail/'.$idEvent);
        }
    }
    function do_upload() {
            $nim = $this->input->post('nim');
        // setting konfigurasi upload
        $namaFile = "berkasEvently".time(); 
        $config['upload_path'] = './assets/mahasiswa/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['file_name'] = $namaFile;
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('cv');
        $result1 = $this->upload->data();
        // upload gambar 2
        $this->upload->do_upload('krs');
        $result2 = $this->upload->data();
        // upload gambar 1
        // menyimpan hasil upload
        $result = array('cv'=>$result1,'krs'=>$result2);

        $regInfo = array('nim'=>$nim,'cv'=>$result['cv']['file_name'].'.pdf','krs'=>$result['krs']['file_name'].'.pdf', 'createdDtm'=>date('Y-m-d H:i:s'));
        $this->regist_model->addNewReg($regInfo);

        // // menampilkan hasil upload
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // // cara akses file name dari gambar 1
        echo  $result['cv']['file_name']."<br>";
        // cara akses file name dari gambar 1
        echo  $result['krs']['file_name']."<br>";
        // cara akses file name dari gambar 1
        // echo  $result['lele'];
    }
}