<?php
class Pessoa_Ctr  extends CI_Controller{

    function __construct() {
        parent::__construct();
        //comunicação com o modelo
       // $this->load->model('Model_Agenda');
    }
    public function index()
    {
        //carrega a view "pessoa/index" no array "$data['conteudo'"
        $data['conteudo'] = "pessoa/index"; 
        
        $this->load->view('masterPage', $data);
    }

}