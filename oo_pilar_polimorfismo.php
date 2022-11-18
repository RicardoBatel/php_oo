<?php

    class Carro extends Veiculo {        
        public $teto_solar = true;

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        public $contra_peso_guidao = true;

        function empinar() {
            echo 'Empina';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o mão e engatar marcha com a pé';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function acelerar() {
            echo 'Acelerar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Caminhao extends Veiculo {}

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF5678', 'Preta');
    $caminhao = new Caminhao('GHI1122', 'Vermelho');

    $carro->trocarMarcha();
    echo '<br/>';
    $moto->trocarMarcha();
    echo '<br/>';
    $caminhao->trocarMarcha();

?>