<?php
require_once './model/racasModel.php';

if($_POST){
    
}else if($_REQUEST){ 
    
}else {
   //selecionar algo no banco de dados
    loadAll();
}

function loadAll(){
    //crio um obj do tipo racas
    $racas = new racasModel();
    $racasList = $racas->loadAll();
    return $racasList;
}
