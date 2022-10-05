<?php
class ReptilController
{

    public function showReptiles()
    {
        require_once 'model/reptilesM.php';
        require_once 'libs/animales.php';
        $ana = new Anaconda(
            'anaconda',
            'es una serpiente muy larga',
            '../img/anaconda.jpeg'
        );
        $rana = new Rana(
            'Rana',
            'saltan mucho',
            '../img/rana.jpeg'
        );
        $tor = new Tortuga(
            'tortuga',
            'es un animal pequeno',
            '../img/tortuga.jpeg'
        );
        $rep = new Reptil;
        $showR = $rep->showReptil();
        require_once 'views/' . $showR;
    }
}
