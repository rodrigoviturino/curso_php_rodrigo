<?php
    
    class Conta{
        private $saldo;

        public function deposito($valor){
            if($valor > 0){
                $this->saldo = $this->saldo + $valor;
            }
        }
        
        public function saque ($valor){
            if($valor <= $this->saldo && saldo > 0){
                $this->saldo -= $valor;
            }
        }

        public function saldo(){
            echo $this->saldo;
        }
    }

    $conta = new Conta();
    $conta->deposito(1000);

    echo "Saldo: " . $conta->saldo();