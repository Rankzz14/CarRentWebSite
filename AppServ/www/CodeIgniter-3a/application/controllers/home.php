<?php
class home extends CI_Controller {
    //action, fonksiyon, metot
    public function index()
    {
        $this->load->view('home_view');
    }

    public function contact()
    {
        $this->load->view('home_contact_view');
    }
}
?>