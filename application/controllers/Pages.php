<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller{
	//home is the name of the page to be loaded
	public function view($page='about'){
		 
	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
        	// renderss the default error page
                show_404();


        }
        //capitalze the first letter
        $data['title']= ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');


} 
}

?>