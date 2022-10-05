<?php
require_once 'libs/animalAbstract.php';
require_once 'libs/InterfazesAnimal.php';
require_once 'libs/traitAnimal.php';

abstract class Mamifero extends Animal implements IComportamientosMamiferos{
    public $nombre;
    public $descripcion;
    public $img;
    public function __construct($nombre, $descripcion, $img){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->img = $img;

    }
    public function Carta(){
        echo '
        <div class="body--cart">
                <div class="body--card__img"> <img src="'.$this->img.'" alt="ppero"> </div>
                <div class="titulo">
                    <h3>'.$this->nombre.'</h3>
                </div>
                <div class="body--cart__description">
                    <p>'.$this->descripcion.'</p>
                    
                </div>


            </div>';
    }
    public function comer(){
        return 'comemos';
    }
    public function andar(){
        return 'andamos';
    }
    public function dormir(){
        return 'dormimos';
    }
}

class Perro extends Mamifero{
    public function reproducenLeche(){

    }
    public function cazan(){

    }
}
class Gato extends Mamifero{
    public function reproducenLeche(){
        
    }
    public function cazan(){

    }
}
class Elefante extends Mamifero{
    public function reproducenLeche(){
        
    }
    public function cazan(){

    }
}

/** aves*/
abstract class Aves extends Animal implements IComportamientosAves{
    public $nombre;
    public $descripcion;
    public $img;
    public function __construct($nombre, $descripcion, $img){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->img = $img;

    }
    public function Carta(){
        echo '
        <div class="body--cart">
                <div class="body--card__img"> <img src="'.$this->img.'" alt="ppero"> </div>
                <div class="titulo">
                    <h3>'.$this->nombre.'</h3>
                </div>
                <div class="body--cart__description">
                    <p>'.$this->descripcion.'</p>
                    
                </div>


            </div>';
    }
    public function comer(){
        return 'comemos';
    }
    public function andar(){
        return 'andamos';
    }
    public function dormir(){
        return 'dormimos';
    }
}

class Torogos extends Aves{
    public function vuelan(){
        return 'valondo';
    }
    public function alimentarCrias(){
        return 'alimentando crias';
    }
}
class Pinguino extends Aves{
    public function vuelan(){
        return 'valondo';
    }
    public function alimentarCrias(){
        return 'alimentando crias';
    }
}

class Avestrus extends Aves{
    public function vuelan(){
        return 'valondo';
    }
    public function alimentarCrias(){
        return 'alimentando crias';
    }
}

/**reptil */
abstract class Reptiles extends Animal implements IComportamientosReptiles{
    public $nombre;
    public $descripcion;
    public $img;
    public function __construct($nombre, $descripcion, $img){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->img = $img;

    }
    public function Carta(){
        echo '
        <div class="body--cart">
                <div class="body--card__img"> <img src="'.$this->img.'" alt="ppero"> </div>
                <div class="titulo">
                    <h3>'.$this->nombre.'</h3>
                </div>
                <div class="body--cart__description">
                    <p>'.$this->descripcion.'</p>
                    
                </div>


            </div>';
    }
    public function comer(){
        return 'comemos';
    }
    public function andar(){
        return 'andamos';
    }
    public function dormir(){
        return 'dormimos';
    }
}
class Anaconda extends Reptiles{
    public function atacan(){

    }
    public function esconderse(){

    }
}

class Rana extends Reptiles{
    public function atacan(){

    }
    public function esconderse(){

    }
}

class Tortuga extends Reptiles{
    public function atacan(){

    }
    public function esconderse(){

    }
}
