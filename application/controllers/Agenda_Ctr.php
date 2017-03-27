<?php
class Agenda_Ctr  extends CI_Controller{

    function __construct() {
        parent::__construct();
        //comunicação com o modelo
        $this->load->model('Model_Agenda');
    }
    public function index()
    {
        $data['conteudo'] = "agenda/index"; 
        
        $data['selectAgenda'] = $this->Model_Agenda->selectAgenda();
        
        $data['selectPessoa'] = $this->Model_Agenda->selectPessoa();
        
        $data['selectAgendaPessoa'] = $this->Model_Agenda->selectAgendaPessoa();
         
        $this->load->view('masterPage', $data);
    }
    
    public function insert() {
        $dados = $this->input->post();
        
        if(isset($dados)){
            $txtIdPessoa = $dados['txtPessoa'];
            $txtData = $dados['txtData'];
            $txtHora = $dados['txtHora'];
            $txtLocal = $dados['txtLocal'];
            $txtPauta = $dados['txtPauta'];
            $this->Model_Agenda->inserirAgenda($txtIdPessoa,$txtData,$txtHora,$txtLocal,$txtPauta);
            redirect('');
        }
        
    }
    
    public function eliminar($id = NULL)
    {
        if($id != NULL)
        {
            $this->Model_Agenda->elimineCompromisso($id);
             redirect('');
        }
    }
    
    public function editar($id = NULL)
    {
        if($id != NULL)
        { 
            //Quando a view agenda/edit chama esse controlador
            $data['conteudo'] = "agenda/edit"; 
            $data['editeCompromisso'] = $this->Model_Agenda->editeCompromisso($id);
            $data['selectPessoa'] = $this->Model_Agenda->selectPessoa();
            $this->load->view('masterPage', $data);
        }
        else
        {
             redirect('');
        } 
    }
    
    public function update($id = NULL)
    {
         $dados = $this->input->post();
        
        if(isset($dados)){
            $txtIdAgenda = $dados['txtIdAgenda'];
            $txtIdPessoa = $dados['txtPessoa'];
            $txtData = $dados['txtData'];
            $txtHora = $dados['txtHora'];
            $txtLocal = $dados['txtLocal'];
            $txtPauta = $dados['txtPauta'];
            $this->Model_Agenda->updateAgenda($txtIdAgenda,$txtIdPessoa,$txtData,$txtHora,$txtLocal,$txtPauta);
            redirect('');
        }
    }

}