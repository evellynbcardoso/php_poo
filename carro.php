<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    public $velocidade;

    private function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public getVelocidade(){
        rutun $this->velocidade;
    }

    protected function setVelocidade ($novaVelocidade)
    {
        $this->veiculo =  $novaVelocidade;
        if{
            
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