create database zapateria;
use zapateria;

create table proveedor(
  id_proveedor int(100) auto_increment primary key,
  nombre varchar(100) NULL,
  correo varchar(100) NULL,
  usuario varchar(100) NULL,
  telefono int(20) NULL,
  domicilio varchar(100) NULL,
  cp int(20) NULL,
  ciudad varchar(100) NULL
);

-- Insertar datos en la tabla proveedor
INSERT INTO proveedor (nombre, correo, usuario, telefono, domicilio, cp, ciudad)
VALUES
('Proveedor1', 'proveedor1@example.com', 'usuario1', 1234567890, 'Calle 123', 12345, 'Ciudad A'),
('Proveedor2', 'proveedor2@example.com', 'usuario2', 9876543210, 'Avenida XYZ', 54321, 'Ciudad B'),
('Proveedor3', 'proveedor3@example.com', 'usuario3', 5555555555, 'Carrera 456', 67890, 'Ciudad C');
