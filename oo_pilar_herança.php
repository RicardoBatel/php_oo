<?php

    class Carro extends Veiculo {        
        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        public $contra_peso_guidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empina';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF5678', 'Preta');

    echo '<pre>';
    print_r($carro);
    echo '<br/>';
    print_r($moto);
    echo '</pre>';
    
    echo '<hr/>';

    $carro->abrirTetoSolar();
    echo '<br/>';
    $carro->acelerar();

    echo '<hr/>';

    $moto->empinar();
    echo '<br/>';
    $moto->acelerar();

?>