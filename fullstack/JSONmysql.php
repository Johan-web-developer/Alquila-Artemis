<?php

$clientes = '[
    {
      "imagen": "rinconC.jpg",
      "Nombre": "Andres Santiago "
      "Apellido":"Rincón Diaz"
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 1
    },
    {
      "imagen": "cliente-anonimo2.jpg",
      "Nombre": "Angela ",
      "Apellido":"Gomez Lizarazo",
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 2
    },
    {
      "imagen": "camiloC.jpg",
      "Nombre": "Camilo Andres ",
      "Apellido":"Caballero",
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 3
    },
    {
      "imagen": "Edwing.jpg",
      "Nombre": "Edwing Stiven Mejia Saenz",
      "Apellido": 19,
      "promedio": 3.9,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 4
    },
    {
      "imagen": "esteban.jpeg",
      "Nombre": "Esteban Dario Ruiz Paredes",
      "Apellido": 19,
      "promedio": 4.1,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 5
    },
    {
      "imagen": "jairo.jpg",
      "Nombre": "Jairo Alonso Cardenas Blanco",
      "Apellido": 17,
      "promedio": 3.9,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 6
    },
    {
      "imagen": "javierAndresNunez.jpeg",
      "Nombre": "Javier Andres Nuñez Sanchez",
      "Apellido": 17,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 7
    },
    {
      "imagen": "pabon.jpg",
      "Nombre": "Jhon Fredy Pabon Bolaño",
      "Apellido": 19,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 8
    },
    {
      "imagen": "joel.jpg",
      "Nombre": "Joel Santiago Abril Gelvez",
      "Apellido": 18,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 9
    },
    {
      "imagen": "camper-anonimo1.jpg",
      "Nombre": "Johan Arley Florez Duran",
      "Apellido": 21,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 10
    },
    {
      "imagen": "jose.jpeg",
      "Nombre": "Jose Arley Pabon Celis",
      "Apellido": 22,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 11
    },
    {
      "imagen": "sepulveda.jpg",
      "Nombre": "Juan David Sepulveda Rojas",
      "Apellido": 18,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 12
    },
    {
      "imagen": "juan.jpeg",
      "Nombre": "Juan Jose Lizarazo Lopez",
      "Apellido": 21,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 13
    },
    {
      "imagen": "villamizar.jpg",
      "Nombre": "Juan Jose",
      "Apellido":" Villamizar Santander",
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 14
    },
    {
      "imagen": "julianV.jpg",
      "Nombre": "Julian Vega Blanco",
      "Apellido": 16,
      "Direccion": "Calle 5 # 28-35",
      "Telefono": 3154317110,
      "IDCliente": 15
    }';


$datosclientes = json_decode($clientes, true);


$server = "localhost";
$user = "root";
$pass = "";
$bd = "constructora";

$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");


foreach ($datosclientes as $cliente) {
    mysqli_query($conexion,"INSERT INTO clientes (IDCliente,Nombre,Apellido,Direccion,Ciudad,Estado,CodigoPostal,Telefono,CorreoElectronico) 
    VALUES ('".$cliente['IDCliente']."','".$cliente['Nombre']."','".$cliente['Apellido']."','".$cliente['Direccion']."','".$cliente['Ciudad']."','".$cliente['Estado']."','".$cliente['CodigoPostal']."','".$cliente['Telefono']."'".$cliente['CorreoElectronico']);	
        
}	


mysqli_close($conexion);
?>