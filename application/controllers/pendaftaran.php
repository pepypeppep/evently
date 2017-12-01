<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Pendaftaran extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'TEDI : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function pendaftaranListing()
    {   
        $userId = $this->vendorId;
            
        $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaran($userId);
            
        $this->global['pageTitle'] = 'TEDI : List Pendaftaran';
            
        $this->loadViews("pendaftaran", $this->global, $data, NULL);
    }
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     */
    function diterima($id_pendaftaran)
    {           
		$status = array('status'=>'diterima');
		
        $data['pendaftaranRecords'] = $this->pendaftaran_model->diterima($id_pendaftaran, $status);
            
        $this->global['pageTitle'] = 'TEDI : List Pendaftaran';
            
        $this->pendaftaranListing();
    }
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     */
    function ditolak($id_pendaftaran)
    {           
		$status = array('status'=>'ditolak');
		
        $data['pendaftaranRecords'] = $this->pendaftaran_model->ditolak($id_pendaftaran, $status);
            
        $this->global['pageTitle'] = 'TEDI : List Pendaftaran';
            
        $this->pendaftaranListing();
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>