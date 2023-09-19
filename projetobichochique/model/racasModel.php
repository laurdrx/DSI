<?php


/**
 * Description of racasModel
 *
 * @author aluno
 */
class racasModel {
    //Atributos ou propriedades
    protected $id;
    protected $nome;
    protected $descricao;
    protected $faixaPreco;
    protected $faixaPeso;
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFaixaPreco() {
        return $this->faixaPreco;
    }

    public function getFaixaPeso() {
        return $this->faixaPeso;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setFaixaPreco($faixaPreco): void {
        $this->faixaPreco = $faixaPreco;
    }

    public function setFaixaPeso($faixaPeso): void {
        $this->faixaPeso = $faixaPeso;
    }

        
    //Metodo construtor
    public function __construct() {
        
    }

}
