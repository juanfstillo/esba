<?php

class Producto{

    public $id;
    public $nombre;
    public $stock;
    public function __construct($id,$nombre,$stock){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->stock = $stock;


    }

    public static function consultar(){

        $listaProductos=[];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM productos");

        foreach($sql->fetchAll() as $producto){

            $listaProductos[] = new Producto($producto['id'],$producto['nombre'],$producto['stock']);
        }

        return $listaProductos;
    
    
    }


    public static function crear($nombre, $stock){

        $conexionBD = BD::crearInstancia();

        $sql= $conexionBD-> prepare ("INSERT INTO productos( nombre, stock) VALUES(?,?)");

        $sql->execute(array($nombre,$stock));

    }

    public static function borrar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM `productos` WHERE `id`=?");
        $sql->execute(array($id));

    }
    
    public static function buscar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM productos WHERE id=?");
        $sql->execute(array($id));
        $producto = $sql->fetch();
        return new Producto($producto['id'],$producto['nombre'],$producto['stock']);

    }
    
    public static function editar($id,$nombre,$stock){
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("UPDATE `productos` SET `nombre`=?, `stock`=? WHERE `id`=? ");

        $sql->execute(array($nombre,$stock,$id));
    }

}
?>