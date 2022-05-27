<?php
require "./core/candidato.php";
require "./core/lista.php";
class queryBuilder
{
    public $pdo;
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    function createTables(){
        $sql = "CREATE TABLE liste(
            id int,
            nome varchar(50) not null,
            constraint PRIMARY KEY(id)
            );
            create table candidati(
            id int,
            nome varchar(50) not null,
            cognome varchar(50) not  null,
            n_voti integer not null,
            id_lista integer not null,
            constraint PRIMARY KEY(id),
            constraint candidato_lista Foreign KEy(id_lista) references liste(id)
            )";
        $this->execute($sql);
    }
    function selectAll($table, String $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    
    function getCandidatiDaLista($id_lista){
        $statement = $this->pdo->prepare("SELECT nome, cognome, n_voti FROM candidati WHERE id_lista = {$id_lista}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, candidato::class);
    }
    function getCandidato($id_candidato){
        $statement = $this->pdo->prepare("SELECT nome, cognome, n_voti FROM candidati WHERE id_lista = {$id_candidato}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, candidato::class);
    }
    function votaCandidato($id){
        $sql = "UPDATE `candidati` SET `n_voti` = n_voti + 1 WHERE `id`= {$id}";
        $this->execute($sql);
    }
    function execute($sql){
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
    
}
