<?php

    class Pai {
        private $nome = 'Carlos';
        protected $sobrenome='Batel';
        public $humor='Feliz';

/*1
        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {

            if(strlen($value)>=3) {
                $this->nome = $value;
            }
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($value) {

            if(strlen($value)>=3) {
                $this->sobrenome = $value;
            }
        }
*/

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }


        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            $x = rand(1,10);

            if($x>=1&&$x<=5){
                $this->executarMania();
            }else{
                $this->responder();
            }            
        }
    }

/*1
    $pai = new Pai();
    echo $pai->humor;
    $pai->humor='Triste';
    echo '<br/>';
    echo $pai->humor;

    echo '<hr/>';

    echo $pai->getNome();
    $pai->setNome('Ricardo');
    echo '<br/>';
    echo $pai->getNome();

    echo '<hr/>';

    echo $pai->getSobrenome();
    $pai->setSobrenome('Durval');
    echo '<br/>';
    echo $pai->getSobrenome();
*/

    class Filho extends Pai {
    /*
        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = $value;
        }
        */
    }


/*
    $pai = new Pai();

    echo $pai->nome;
    $pai->nome='Ricardo';
    echo '<br/>';
    echo $pai->nome;

    echo '<hr/>';

    $pai->executarAcao();
*/

    $filho = new Filho();

    /*
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    echo $filho->getAtributo('humor');
    echo '<br/>';
    echo $filho->getAtributo('sobrenome');    
    $filho->setAtributo('humor', 'Triste');
    echo '<br/>';
    echo $filho->getAtributo('humor');
    $filho->setAtributo('sobrenome', 'Durval');
    echo '<br/>';
    echo $filho->getAtributo('sobrenome');

    echo '<hr/>';

    echo $filho->getAtributo('nome');
    $filho->setAtributo('nome', 'Ricardo');
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo $filho->getAtributo('nome');
*/

    echo '<hr/>';

    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    //exibir os métodos do objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

?>