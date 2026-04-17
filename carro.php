<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    public $velocidade;

    private function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade(){
        return $this->velocidade;
    }

    public function getCarro(){
        return $this->modelo;
    }

    protected function setVelocidade ($novaVelocidade)
    {
        if ($novaVelocidade >= 0 && $novaVelocidade <201){
            $this->velocidade = $novaVelocidade;
        }else{
            echo "ERRO : Velocidade ultrapassou o limitede velocidade";
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->velocidade = 5000; // Velocidade de foguete?
$meuCarro->velocidade = -60;   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->velocidade . " km/h";
?>