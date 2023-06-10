<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);


require_once ('./Conectar/conectar.php');

class Cliente extends Conectar{
    public function get_cliente(){
        try {
            $conectar=parent::Conexion();
             parent::set_name();
             $stm=$conectar->prepare("SELECT * FROM Clientes");
             $stm->execute();
        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }

    public function get_cliente_id($IDCliente){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM Clientes WHERE IDCliente=?");
            $stm->binValue(1,$IDCliente);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeption $e) {
            return $e->getMessage();
        }
    }

    public function insert_cliente($IDCliente,$Nombre,$Apellido,$Direccion, $Ciudad, $Estado, $CodigoPostal, $Telefono,$CorreoELectronico ){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO Clientes(IDCliente,Nombre,Apellido,Direccion,Ciudad,Estado,CodigoPostal,Telefono,CorreoElectronico) VALUES(?,?,?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$IDCliente);
        $stm->bindValue(2,$Nombre);
        $stm->bindValue(3,$Apellido);
        $stm->bindValue(4,$Direccion);
        $stm->bindValue(5,$Ciudad);
        $stm->bindValue(6,$Estado);
        $stm->bindValue(7,$CodigoPostal);
        $stm->bindValue(8,$Telefono);
        $stm->bindValue(9,$CorreoELectronico);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function update_cliente($IDCliente,$Nombre,$Apellido,$Direccion, $Ciudad, $Estado, $CodigoPostal, $Telefono,$CorreoELectronico){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE Clientes set Nombre=?, Apellido=?, Direccion=?, Ciudad=?, Estado=?, CodigoPostal=?, Telefono=?, CorreoElectronico=?  WHERE IDCliente=?";
        $sql=$conectar->prepare($sql);
        $stm->bindValue(1,$IDCliente);
        $stm->bindValue(2,$Nombre);
        $stm->bindValue(3,$Apellido);
        $stm->bindValue(4,$Direccion);
        $stm->bindValue(5,$Ciudad);
        $stm->bindValue(6,$Estado);
        $stm->bindValue(7,$CodigoPostal);
        $stm->bindValue(8,$Telefono);
        $stm->bindValue(9,$CorreoELectronico);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


    }
    
    public function delete_cliente($IDCliente){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="DELETE FROM Clientes WHERE IDCliente=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$IDCliente);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>
