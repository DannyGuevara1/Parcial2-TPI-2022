<?php
class Layout{

    public static function showHeader(){
        require_once 'views/header.php';
    }

    public static function showFooter(){
        require_once 'views/footer.php';
    }

    public static function showHome(){
        
        require_once 'views/homeViews.php';
    }

    public static function showPeces(){
        require_once 'views/pecesViews.php';
    }

    public static function showAves(){
        require_once 'views/avesViews.php';
    }

    public static function showReptiles(){
        require_once 'views/reptilesViews.php';
    }

}