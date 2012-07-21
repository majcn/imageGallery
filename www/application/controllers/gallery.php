<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->config->load('gallery_config');
        $this->load->model('gallery_model');
    }

    public function index($folderName="No images") {
        $data['title'] = $folderName;
        $data['images'] = $this->gallery_model->getImages($folderName);
        $data['root'] = $this->config->item('rootFolder');
        
        $this->load->view('gallery_view', $data);
    }
}
