<?php

abstract class Animal {
    public $nombre;
    public $descripcion;
    public $img;
    abstract public function __construct($nombre, $descripcion, $img);
    abstract public function Carta();
    abstract public function comer();
    abstract public function andar();
    abstract public function dormir();
}