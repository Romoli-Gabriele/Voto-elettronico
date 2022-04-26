<?php
class lista{
    public $id;
    public $nome;

    public function getCandidati(){
        $query->getCandidatiDaLista($this->id);
    }
}