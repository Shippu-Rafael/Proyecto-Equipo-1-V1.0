<?php

include_once 'conexion.php';

class producto
{
    private $id;
    private $nombre;
    private $categoria;
    private $cantidad;
    private $descripcion;
    private $fecha;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }


    public function getCantidad()
    {
        return $this->cantidad;
    }


    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getFecha()
    {
        return $this->fecha;
    }


    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }



    function altaProducto(){

        try {

            $pdo = new Conexion();



            $query = $pdo->prepare("INSERT INTO producto (nombre,
        categoria, cantidad, descripcion, fecha) VALUES ('" . $this->getNombre() . "',
        '" . $this->getCategoria() . "',
        '" . $this->getCantidad() . "',
        '" . $this->getDescripcion() . "',
        '" . $this->getFecha() ."');");

            echo "INSERT INTO producto (nombre,
        categoria, cantidad, descripcion, fecha) VALUES ('" . $this->getNombre() . "',
                '" . $this->getCategoria() . "',
                '" . $this->getCantidad() . "',
                '" . $this->getDescripcion() . "',
                '" . $this->getFecha() . "');";

            $query->execute();

        } catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;

    }


    function Mmodificar()
    {
        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("SELECT * FROM producto  WHERE id=".$this->getId().";");
            $query->execute();
            $resultado = $query->fetchAll();
            foreach ($resultado as $value) {
                $this->setId($value['id']);
                $this->setNombre($value['nombre']);
                $this->setCategoria($value['categoria']);
                $this->setCantidad($value['cantidad']);
                $this->setDescripcion($value['descripcion']);
                $this->setFecha($value['fecha']);
            }

        }
        catch (PDOException $e)
        {
        echo $query . "<br>" . $e->getMessage();
    }

        $pdo = null;


    }

    function productoModificarGuardar() {

        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("UPDATE producto"
                . " SET nombre = :nombre,"
                . " categoria = :categoria,"
                . " cantidad = :cantidad,"
                . " descripcion = :descripcion,"
                . " fecha = :fecha WHERE id = :id;");


            $query->bindValue(':id', $this->getId());
            $query->bindValue(':nombre', $this->getNombre());
            $query->bindValue(':categoria', $this->getCategoria());
            $query->bindValue(':cantidad', $this->getCantidad());
            $query->bindValue(':descripcion', $this->getDescripcion());
            $query->bindValue(':fecha', $this->getFecha());

            $query->execute();

        }
        catch(PDOException $e)
        {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;

    }

    function Mconsulta(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM producto;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Mmodificar.php?id=' . $value['id'] .'" class="btn btn-default">Modificar</a>';
            $producto[$key] = array(
                $value['id'],
                $value['nombre'],
                $value['categoria'],
                $value['cantidad'],
                $value['descripcion'],
                $value['fecha'],


                $modificar


            );
        }

        return $producto;

    }
    function Mconsulta1(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_cristalerias;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Mmodificar.php?id=' . $value['id'] .'" class="btn btn-default">Modificar</a>';
            $producto[$key] = array(
                $value['id'],
                $value['nombre'],
                $value['categoria'],
                $value['cantidad'],
                $value['descripcion'],
                $value['fecha'],


                $modificar


            );
        }

        return $producto;

    }
    function Mconsulta2(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_cocina;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Mmodificar.php?id=' . $value['id'] .'" class="btn btn-default">Modificar</a>';
            $producto[$key] = array(
                $value['id'],
                $value['nombre'],
                $value['categoria'],
                $value['cantidad'],
                $value['descripcion'],
                $value['fecha'],


                $modificar


            );
        }

        return $producto;

    }
    function Mconsulta3(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_decorativo;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Mmodificar.php?id=' . $value['id'] .'" class="btn btn-default">Modificar</a>';
            $producto[$key] = array(
                $value['id'],
                $value['nombre'],
                $value['categoria'],
                $value['cantidad'],
                $value['descripcion'],
                $value['fecha'],


                $modificar


            );
        }

        return $producto;

    }
    function Mconsulta4(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_muebles;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Mmodificar.php?id=' . $value['id'] .'" class="btn btn-default">Modificar</a>';
            $producto[$key] = array(
                $value['id'],
                $value['nombre'],
                $value['categoria'],
                $value['cantidad'],
                $value['descripcion'],
                $value['fecha'],


                $modificar


            );
        }

        return $producto;

    }
    function Mconsulta5(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_desechable;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Mmodificar.php?id=' . $value['id'] .'" class="btn btn-default">Modificar</a>';
            $producto[$key] = array(
                $value['id'],
                $value['nombre'],
                $value['categoria'],
                $value['cantidad'],
                $value['descripcion'],
                $value['fecha'],


                $modificar


            );
        }

        return $producto;

    }
    function Meliminar(){

        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("DELETE FROM producto"
                . " WHERE id = :id;");
            $query->bindValue(':id', $this->getId());
            $query->execute();

        }
        catch(PDOException $e)
        {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;


    }




}//Fin de la clase Cuenta
