<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->config->load('gallery_config');
        $this->load->helper('directory');
        
        $this->rootFolder = $this->config->item('rootFolder');
        $this->albumFolder = $this->config->item('albumFolder');
    }

    function getImages($folder) {
        $images = array();
        $files = directory_map("./$this->albumFolder/$folder/images");
        if ($files) {
                sort($files);
	        foreach($files as $file) {
	            $img['name'] = $file;
	            $img['url'] = "$this->rootFolder/$this->albumFolder/$folder/images/$file";
	            $img['thumb'] = "$this->rootFolder/$this->albumFolder/$folder/thumbnails/$file";
	            array_push($images, $img);
	        }
        }
        return $images;
    }
}
