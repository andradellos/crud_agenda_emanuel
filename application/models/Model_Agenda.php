<?php
class  Model_agenda extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selectAgenda()
    {
        $query = $this->db->query("select * from agenda");
        return $query->result();
    }
    
    public function selectPessoa()
    {
        $query = $this->db->query("select * from pessoa");
        return $query->result();
    }
    public function inserirAgenda( $txtIdPessoa, $txtData, $txtHora, $txtLocal, $txtPauta)
    {
        $arrayDados = array(
            'id_pessoa' => $txtIdPessoa,
            'data' => $txtData,
            'hora' => $txtHora,
            'local' => $txtLocal,
            'pauta' => $txtPauta            
        );
        $this->db->insert('agenda', $arrayDados);
    }
    
    public function selectAgendaPessoa()
    {
        $query = $this->db->query("select * from agenda A inner join pessoa P on A.id_pessoa=P.id_pessoa ");
        return $query->result();
    }
    
    public function elimineCompromisso($id)
    {
        $this->db->where('id_agenda', $id);
        $this->db->delete('agenda');
    }
    
    public function editeCompromisso($id)
    {  
         $query = $this->db->query("select  * from agenda WHERE id_agenda=$id");
        return $query->result();
    }
    
     public function  updateAgenda($txtIdAgenda,$txtIdPessoa,$txtData,$txtHora,$txtLocal,$txtPauta)
     {
          $arrayDados = array(
            'id_pessoa' => $txtIdPessoa,
            'data' => $txtData,
            'hora' => $txtHora,
            'local' => $txtLocal,
            'pauta' => $txtPauta            
        );
          $this->db->where('id_agenda', $txtIdAgenda);
        $this->db->update('agenda', $arrayDados);
     }
    
}