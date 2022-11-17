<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters e setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        function getTelefone() {
            return $this->telefone;
        }

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s), o número de telefone é: $this->telefone.";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    $y->setTelefone('11 2222 2222');
    echo $y->getNome().' possui '.$y->getNumFilhos().' filho(s) e seu telefone é: '.$y->getTelefone();

    echo '<hr/>';

    $x = new Funcionario();
    $x->setNome('Ricardo');
    $x->setNumFilhos(0);
    $x->setTelefone('48 9999 9999');
    echo $x->getNome().' possui '.$x->getNumFilhos().' filho(s) e seu telefone é: '.$x->getTelefone();   

?>