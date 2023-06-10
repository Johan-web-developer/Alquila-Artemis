<?php 

header('Content-Type: application/json');

require_once("./Conectar/conectar.php");
require_once("Cliente(1).php");


$clientes = new Cliente();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$clientes->get_cliente();
       echo json_encode($datos);
    break;

    case "GetId":
        $datos=$clientes->get_cliente_id($body["IDCliente"]);
        echo json_encode($datos);
  
    break;


    case "insert":
        $datos=$clientes->insert_cliente($body["IDCliente"], $body["Nombre"],$body["Apellido"],$body["Direccion"] ,$body["Ciudad"] ,$body["Estado"], $body["CodigoPostal"] , $body["Telefono"] , $body["CorreoElectronico"]);
        echo json_encode("insertado correctamente");
  
      break;

    case "update":
        $datos=$clientes->update_cliente($body["IDCliente"], $body["Nombre"],$body["Apellido"],$body["Direccion"] ,$body["Ciudad"] ,$body["Estado"], $body["CodigoPostal"] , $body["Telefono"] , $body["CorreoElectronico"]);
        echo json_encode("Datos actualizados correctamente");
  
    break;

    case "delete":
        $datos=$clientes->delete_cliente($body["IDCliente"]);
        echo json_encode("Datos eliminados   correctamente");
  
      break;

}

    

?>