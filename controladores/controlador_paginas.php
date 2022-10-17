<?php
    class ControladorPaginas {

        public function inicio(){
            include_once "vistas/paginas/inicio.php";
        }

        public function nosotros(){
            include_once "vistas/paginas/nosotros.php";
        }

        public function animales(){
            include_once "vistas/paginas/animales.php";
        }

        public function consejos(){
            include_once "vistas/paginas/consejos.php";
        }

        public function registro(){
            include_once "vistas/paginas/registro.php";
        }

        public function login(){
            include_once "vistas/paginas/login.php";
        }
    }

?>