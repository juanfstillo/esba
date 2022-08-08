<?php

include_once("modelos/producto.php");

include_once("conexion.php");

BD::crearInstancia();

class ControladorProductos{
        
        public function inicio(){

        $productos = Producto::consultar();

        include_once("vistas/productos/inicio.php");

        }
        public function crear(){
   
            if($_POST){
        
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $stock=$_POST['stock'];
            Producto::crear($nombre,$stock);
            header("Location:./?controlador=productos&accion=inicio");

            }
            include_once("vistas/productos/crear.php");


        }
        public function editar(){

            

            if($_POST){
                // print_r($_POST);
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $stock=$_POST['stock'];

                Producto::editar($id,$nombre,$stock);
                header("Location:./?controlador=productos&accion=inicio");


            }
            $id = $_GET['id'];

            $producto = (Producto::buscar($id));

            include_once("vistas/productos/editar.php");


        }
        public function borrar(){
            print_r($_GET);
            $id = $_GET['id'];
            Producto::borrar($id);
            header("Location:./?controlador=productos&accion=inicio");
        }
}
?>