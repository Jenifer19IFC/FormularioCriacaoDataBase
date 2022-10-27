<?php

class Tabela{

    public $nome;
    public $listCampos = array();
    public $db;

    function __concstruct(){
        $this->db = new DataBase();
    }
    
    function getDb(){
        return $this->db;
    }
    function setDb($db){
        $this->db = $db;
    }


    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function getListCampos() {
		return $this->listCampos;
	}

	//function setListCampos($listCampos = array()) {
	///	$this->listCampos = $listCampos;
	//}


}

?>