<?php

include_once 'conexion.php';

class usuario
{
    private $IdUsuario;
    private $nombreUsuario;
    private $usuario;
    private $password;
    private $privilegios;
    private $fechaU;

    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }


    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;
    }


    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }


    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    }


    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getPrivilegios()
    {
        return $this->privilegios;
    }


    public function setPrivilegios($privilegios)
    {
        $this->privilegios = $privilegios;
    }

    /**
     * @return mixed
     */
    public function getFechaU()
    {
        return $this->fechaU;
    }

    /**
     * @param mixed $fechaU
     */
    public function setFechaU($fechaU)
    {
        $this->fechaU = $fechaU;
    }



    function usuarioAlta() {

        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("INSERT INTO usuario ("
                . " nombreUsuario, usuario, password, privilegios, fechaU) values("
                . " :nombreUsuario, :usuario, :password, :privilegios, :fechaU);");
            $query->bindValue(':nombreUsuario', $this->getNombreUsuario());
            $query->bindValue(':usuario', $this->getUsuario());
            $query->bindValue(':password', $this->getPassword());
            $query->bindValue(':privilegios', $this->getPrivilegios());
            $query->bindValue(':fechaU', $this->getFechaU());
            $query->execute();

        }
        catch(PDOException $e)
        {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;

    }
    function Umodificar(){
        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("SELECT * FROM usuario  WHERE IdUsuario=" . $this->getIdUsuario().";");
            $query->execute();
            $resultado = $query->fetchAll();
            foreach ($resultado as $value) {
                $this->setIdUsuario($value['IdUsuario']);
                $this->setNombreUsuario($value['nombreUsuario']);
                $this->setUsuario($value['usuario']);
                $this->setPassword($value['password']);
                $this->setPrivilegios($value['privilegios']);
                $this->setFechaU($value['fechaU']);
            }

        }
        catch (PDOException $e)
        {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;


    }

    function usuarioModificarGuardar() {

        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("UPDATE usuario"
                . " SET nombreUsuario = :nombreUsuario,"
                . " usuario = :usuario,"
                . " password = :password,"
                . " privilegios = :privilegios,"
                . " fechaU = :fechaU WHERE IdUsuario = :IdUsuario;");


            $query->bindValue(':IdUsuario', $this->getIdUsuario());
            $query->bindValue(':nombreUsuario', $this->getNombreUsuario());
            $query->bindValue(':usuario', $this->getUsuario());
            $query->bindValue(':password', $this->getPassword());
            $query->bindValue(':privilegios', $this->getPrivilegios());
            $query->bindValue(':fechaU', $this->getFechaU());

            $query->execute();

        }
        catch(PDOException $e)
        {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;

    }
    function Uconsulta(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_usuario;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Umodificar.php?IdUsuario=' . $value['IdUsuario'] .'" class="btn btn-default">Modificar</a>';
            $usuario [$key] = array(
                $value['IdUsuario'],
                $value['nombreUsuario'],
                $value['usuario'],
                $value['privilegios'],
                $value['fechaU'],


                $modificar


            );
        }

        return $usuario;

    }
    function Uconsulta1(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_gerente;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Umodificar.php?IdUsuario=' . $value['IdUsuario'] .'" class="btn btn-default">Modificar</a>';
            $usuario[$key] = array(
                $value['IdUsuario'],
                $value['nombreUsuario'],
                $value['usuario'],
                $value['privilegios'],
                $value['fechaU'],


                $modificar


            );
        }

        return $usuario;

    }
    function Uconsulta2(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_chofer;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Umodificar.php?IdUsuario=' . $value['IdUsuario'] .'" class="btn btn-default">Modificar</a>';
            $usuario[$key] = array(
                $value['IdUsuario'],
                $value['nombreUsuario'],
                $value['usuario'],
                $value['privilegios'],
                $value['fechaU'],


                $modificar


            );
        }

        return $usuario;

    }
    function Uconsulta3(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_encargado;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Umodificar.php?IdUsuario=' . $value['IdUsuario'] .'" class="btn btn-default">Modificar</a>';
            $usuario[$key] = array(
                $value['IdUsuario'],
                $value['nombreUsuario'],
                $value['usuario'],
                $value['privilegios'],
                $value['fechaU'],


                $modificar


            );
        }

        return $usuario;

    }
    function Uconsulta4(){
        $pdo = new Conexion();
        $query = $pdo->prepare('SELECT * FROM vs_adminin;');
        $query->execute();


        $resultado = $query->fetchAll();

        foreach ($resultado as $key => $value) {
            $modificar = '<a href="Umodificar.php?IdUsuario=' . $value['IdUsuario'] .'" class="btn btn-default">Modificar</a>';
            $usuario[$key] = array(
                $value['IdUsuario'],
                $value['nombreUsuario'],
                $value['usuario'],
                $value['privilegios'],
                $value['fechaU'],


                $modificar


            );
        }

        return $usuario;

    }
    function Ueliminar(){

        try {

            $pdo = new Conexion();
            $query = $pdo->prepare("DELETE FROM usuario"
                . " WHERE IdUsuario = :IdUsuario;");
            $query->bindValue(':IdUsuario', $this->getIdUsuario());
            $query->execute();

        }
        catch(PDOException $e)
        {
            echo $query . "<br>" . $e->getMessage();
        }

        $pdo = null;


    }


}