<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters e setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

/*
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
*/

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s), hoje ocupa o cargo de $this->cargo, com salário de R$ $this->salario,00. O telefone de contato é: $this->telefone";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    $y->__set('telefone', '11 2222 2222');
    $y->__set('cargo', 'Aux. Adm.');
    $y->__set('salario', 1500);
    echo $y->resumirCadFunc();
    echo '<hr/>';

    $x = new Funcionario();
    $x->__set('nome', 'Ricardo');
    $x->__set('numFilhos', 'nenhum');
    $x->__set('telefone', '48 9999 9999');
    $x->__set('cargo', 'Desenvolvedor');
    $x->__set('salario', 3500);
    echo $x->resumirCadFunc();
?>