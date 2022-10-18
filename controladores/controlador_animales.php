<?php
    include_once("conexion.php");
    include_once("modelos/animal.php");


    class Controladoranimales {

        public function mostrar(){
            
            
            if ($_SESSION["usuario"]['perfil'] == "administrador"){
            $datosanimales=animal::consultaranimales();
            
        }
        else{
            $id = $_SESSION["usuario"]['id'];
            
             $datosanimales=animal::consultaranimalesusuario($id); } 

        
            include_once "vistas/animales/mostrar.php";
        }

    
        public function crear(){
            include_once "vistas/animales/crear.php";
        }

        public function actualizarRegistro(){
            if($_GET){
            $idanimal=$_GET['id_animal'];
            $Datosanimal=animal::Buscaranimal($idanimal);
            }
            //print_r($Datosanimal); para verificar que sirve
            include_once "vistas/animales/actualizar.php";
            if($_POST){
                
                $idanimal=$_POST["txtid"];
                $nom=$_POST["txtnombre"];
                $sex=$_POST["txtsexo"];
                $edad=$_POST["txtedad"];
                $especie=$_POST["txtespecie"];
                $hm=$_POST["txthistorial"];
                
                animal::Actualizaranimal($idanimal,$nom,$sex,$edad,$especie,$hm);
                echo '<script>';
                echo "window.location.href='index.php?controlador=animales&accion=mostrar' ";
                echo '</script>';
            }
            include_once "./vistas/animales/actualizar.php";
        }


        public function controladorCrearanimal() {
            if ($_POST){
                $id = $_SESSION["usuario"]['id'];
                $nom=$_POST["txtnombre"];
                $sex=$_POST["txtsexo"];
                $edad=$_POST["txtedad"];
                $especie=$_POST["txtespecie"];
                $hm=$_POST["txthistorial"];
                animal::Crearanimal($nom,$sex,$edad,$especie,$hm,$id);
                header("Location: index.php?controlador=animales&accion=mostrar");
            }
           
            
        }

        public function borrarRegistro() {
            if ($_GET['id_animal']){
                $idanimal=$_GET['id_animal'];
                animal::Borraranimal($idanimal);
                echo '<script>';
                echo "window.location.href='index.php?controlador=animales&accion=mostrar' ";
                echo '</script>';
            }
        }

    }  

?>