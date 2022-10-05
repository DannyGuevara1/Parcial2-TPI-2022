<?php
class AveController
{

    public function showAves()
    {
        require_once 'model/avesM.php';
        require_once 'libs/animales.php';
        $torogos = new Torogos(
            'torogos',
            'Es el ave nacional del salvador',
            '../img/torogos.jpeg'
        );
        $pin = new Pinguino(
            'Pinguino',
            'Es el ave del altartida',
            '../img/pinguino.jpeg'
        );
        $avestrus = new Avestrus(
            'avestrus',
            'es una ave muy grande',
            '../img/avestrus.jpeg'
        );

        
        $ave = new Ave;
        $showave = $ave->showAves();
        require_once 'views/' . $showave;
    }
}
