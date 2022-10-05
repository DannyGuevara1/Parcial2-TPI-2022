<?php

interface IComportamientosMamiferos{
    public function reproducenLeche();
    public function cazan();
}
interface IComportamientosAves{
    public function vuelan();
    public function alimentarCrias();
}
interface IComportamientosReptiles{
    public function atacan();
    public function esconderse();
}
interface IComportamientosPeces{
    public function nadar();
    public function reproducirse();
}
