<?php

interface INotificador{
    public function enviar($destinatario, $mensagem);
}

// Implementar : e-mail
class NotificadorEmail implements   INotificar{
    public function enviar ($destinatario, $mensagem){
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}";
    }
}

// Implementar:SMS
class NotificadorSMS implements INotificador{
    public function enviar($|destinatario, $mensagem){
        echo "SMS enviar {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatsapp
class NotificadorWhatsapp implements INotificador{
    public function enviar ($destinatario, $mensagem){
        echo "Whatsapp enviado para {$}"
    }
}