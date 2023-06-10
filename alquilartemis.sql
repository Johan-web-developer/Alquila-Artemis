CREATE DATABASE constructora;

use constructora;

CREATE TABLE Clientes (
  IDCliente INT PRIMARY KEY,
  Nombre VARCHAR(50),
  Apellido VARCHAR(50),
  Direccion VARCHAR(100),
  Ciudad VARCHAR(50),
  Estado VARCHAR(50),
  CodigoPostal VARCHAR(10),
  Telefono VARCHAR(15),
  CorreoElectronico VARCHAR(100)
);

CREATE TABLE Productos (
  IDProducto INT PRIMARY KEY,
  Nombre VARCHAR(100),
  Descripcion TEXT,
  Precio DECIMAL(10, 2),
  ProveedorID INT,
  FOREIGN KEY (ProveedorID) REFERENCES Proveedores(IDProveedor)
);

CREATE TABLE Proveedores (
  IDProveedor INT PRIMARY KEY,
  Nombre VARCHAR(100),
  Direccion VARCHAR(100),
  Ciudad VARCHAR(50),
  Estado VARCHAR(50),
  CodigoPostal VARCHAR(10),
  Telefono VARCHAR(15),
  CorreoElectronico VARCHAR(100)
);

CREATE TABLE Pedidos (
  IDPedido INT PRIMARY KEY,
  ClienteID INT,
  Fecha DATE,
  Total DECIMAL(10, 2),
  FOREIGN KEY (ClienteID) REFERENCES Clientes(IDCliente)
);

CREATE TABLE DetallesPedido (
  IDDetalle INT PRIMARY KEY,
  PedidoID INT,
  ProductoID INT,
  Cantidad INT,
  PrecioUnitario DECIMAL(10, 2),
  Subtotal DECIMAL(10, 2),
  FOREIGN KEY (PedidoID) REFERENCES Pedidos(IDPedido),
  FOREIGN KEY (ProductoID) REFERENCES Productos(IDProducto)
);
