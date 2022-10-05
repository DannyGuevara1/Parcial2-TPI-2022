<?php
class HomeController
{

    public function showHome()
    {
        require_once 'model/homeM.php';
        require_once 'libs/animales.php';
        $perro = new Perro(
            'Pitbul',
            'es un perro muy agresivo',
            '../img/perro.jpeg'
        );
        $gato = new Gato(
            'Angoro',
            'Es un gato muy peludo',
            '../img/gato.jpeg'
        );
        $elefante = new Elefante(
            'Elefante',
            'es una animal muy grande que vivi en africa',
            '../img/elefante.jpeg'
        );
        $home = new Home;
        $showhome = $home->showHome();
        require_once 'views/' . $showhome;
    }
}
