<?php
require_once './model/ConexaoMysql.php';

if($_POST){
    
}else if($_REQUEST){ 
    
}

/*
 * Carrega uma lista de dados
 */
function carregarDados(){
        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM racas';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
       
        //Desconectar do banco
        $db->Desconectar();
        
        return $resultList;
}