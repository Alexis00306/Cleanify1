CREATE DATABASE IF NOT EXISTS Cleanify;
USE Cleanify;

-- Tabla de Tipos de Usuario (Administrador, Cliente)
CREATE TABLE IF NOT EXISTS tipo_usuario (
    id_tipo_usuario INT AUTO_INCREMENT PRIMARY KEY,
    tipo_usuario ENUM('Administrador', 'Cliente') NOT NULL
);

CREATE TABLE IF NOT EXISTS usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    foto VARCHAR(255) DEFAULT 'default.jpg',
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    direccion TEXT DEFAULT '',
    correo VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    id_tipo_usuario INT NOT NULL,
    FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario(id_tipo_usuario) ON DELETE CASCADE
);


-- Tabla de Categorías
CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(100) NOT NULL
);

-- Tabla de Productos
CREATE TABLE IF NOT EXISTS productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    imagen VARCHAR(255),
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion TEXT,
    stock INT NOT NULL DEFAULT 0,
    precio DECIMAL(10,2) NOT NULL,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria) ON DELETE CASCADE
);

-- Tabla de Ventas
CREATE TABLE IF NOT EXISTS venta (
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) ON DELETE CASCADE
);

-- Tabla de Detalles de Venta
CREATE TABLE IF NOT EXISTS detalle_venta (
    id_detalle INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES venta(id_venta) ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE CASCADE
);



-- Insertar tipo de usuarios
INSERT INTO tipo_usuario (tipo_usuario) VALUES ('Administrador');
INSERT INTO tipo_usuario (tipo_usuario) VALUES ('Cliente');

-- Insertar usuarios
INSERT INTO usuario (foto, nombre, apellidos, direccion, correo, password, id_tipo_usuario) 
VALUES ('carlos.jpg', 'Carlos', 'Maldonado', 'DEl hospital #14, Qro', 'alexis@cleanify.com', '123456', 2);

-- Insertar categorías
INSERT INTO categoria (categoria) VALUES ('Limpiadores');
INSERT INTO categoria (categoria) VALUES ('Desinfectantes');
INSERT INTO categoria (categoria) VALUES ('Multiusos');
INSERT INTO categoria (categoria) VALUES ('Higiene');
INSERT INTO categoria (categoria) VALUES ('Cuidados del hogar');
INSERT INTO categoria (categoria) VALUES ('Accesorios');
;

-- Insertar productos
-- Limpiadores
INSERT INTO productos (imagen, nombre_producto, descripcion, stock, precio, id_categoria) VALUES
('01.PNG', 'Limpiador Multiusos Clorox', 'Limpiador multiusos Clorox para diversas superficies.', 100, 107.82, 1),
('02.PNG', 'Limpiador en Espuma Lysol', 'Limpiador en espuma Lysol, ideal para la limpieza profunda.', 80, 116.82, 1),
('03.PNG', 'Limpiador de Vidrios Windex', 'Limpiador de vidrios Windex para superficies brillantes.', 120, 89.82, 1),
('04.PNG', 'Limpiador de Cocina Ajax', 'Limpiador de cocina Ajax, eficaz contra grasa.', 90, 71.82, 1),
('05.PNG', 'Limpiador de Baño Scrub Free', 'Limpiador de baño Scrub Free para eliminar manchas y suciedad.', 60, 134.82, 1),
('06.PNG', 'Limpiador de Piso Pine-Sol', 'Limpiador de piso Pine-Sol para una limpieza profunda.', 50, 161.82, 1);

-- Desinfectantes
INSERT INTO productos (imagen, nombre_producto, descripcion, stock, precio, id_categoria) VALUES
('07.PNG', 'Desinfectante Spray Lysol', 'Desinfectante en spray Lysol para eliminar gérmenes.', 150, 98.82, 2),
('08.PNG', 'Desinfectante Doméstico Clorox', 'Desinfectante doméstico Clorox para desinfectar superficies.', 200, 125.82, 2),
('09.PNG', 'Desinfectante en Gel Purell', 'Gel desinfectante Purell para manos.', 300, 62.82, 2),
('10.PNG', 'Desinfectante Multiusos Dettol', 'Desinfectante multiusos Dettol para todo tipo de superficies.', 130, 89.82, 2),
('11.PNG', 'Desinfectante Lysol en Toallitas', 'Toallitas desinfectantes Lysol para limpieza rápida.', 110, 143.82, 2),
('12.PNG', 'Desinfectante en Aerosol Mr. Clean', 'Desinfectante en aerosol Mr. Clean para eliminar bacterias.', 90, 104.22, 2);

-- Multiusos
INSERT INTO productos (imagen, nombre_producto, descripcion, stock, precio, id_categoria) VALUES
('13.PNG', 'Multiusos Mr. Clean', 'Multiusos Mr. Clean para limpiar todas las superficies.', 150, 77.22, 3),
('14.PNG', 'Multiusos Cif', 'Multiusos Cif para una limpieza sin esfuerzo.', 180, 70.82, 3),
('15.PNG', 'Multiusos Formula 409', 'Multiusos Formula 409, efectivo contra grasa y manchas.', 160, 98.82, 3),
('16.PNG', 'Multiusos Elbow Grease', 'Multiusos Elbow Grease para eliminar manchas difíciles.', 110, 111.42, 3),
('17.PNG', 'Multiusos CleanQuick', 'Multiusos CleanQuick para una limpieza rápida y eficiente.', 140, 86.22, 3),
('18.PNG', 'Multiusos Scrub Daddy', 'Multiusos Scrub Daddy, ideal para superficies delicadas.', 200, 66.42, 3);

-- Higiene
INSERT INTO productos (imagen, nombre_producto, descripcion, stock, precio, id_categoria) VALUES
('19.PNG', 'Jabón Líquido Dove', 'Jabón líquido Dove para una limpieza suave.', 250, 53.82, 4),
('20.PNG', 'Toallitas Húmedas Wet Ones', 'Toallitas húmedas Wet Ones para limpieza rápida.', 300, 77.22, 4),
('21.PNG', 'Desinfectante de Manos Bath & Body Works', 'Desinfectante de manos Bath & Body Works, aroma floral.', 150, 98.82, 4),
('22.PNG', 'Jabón Líquido Softsoap', 'Jabón líquido Softsoap para mantener la piel hidratada.', 200, 62.82, 4),
('23.PNG', 'Gel Antibacterial Germ-X', 'Gel antibacterial Germ-X, ideal para el cuidado de manos.', 220, 44.82, 4),
('24.PNG', 'Toallitas Higiénicas Huggies', 'Toallitas higiénicas Huggies, suaves y seguras.', 180, 86.22, 4);

-- Cuidados del hogar
INSERT INTO productos (imagen, nombre_producto, descripcion, stock, precio, id_categoria) VALUES
('25.PNG', 'Limpiador de Pisos Swiffer', 'Limpiador de pisos Swiffer para una limpieza sin esfuerzo.', 100, 161.82, 5),
('26.PNG', 'Ambientador Febreze', 'Ambientador Febreze para un ambiente fresco y limpio.', 120, 116.82, 5),
('27.PNG', 'Protector de Tapicería Scotchgard', 'Protector de tapicería Scotchgard para mantener tus muebles como nuevos.', 80, 233.82, 5),
('28.PNG', 'Cera para Muebles Pledge', 'Cera para muebles Pledge para un brillo duradero.', 90, 134.82, 5),
('29.PNG', 'Limpiador de Alfombras Hoover', 'Limpiador de alfombras Hoover para una limpieza profunda.', 60, 287.82, 5),
('30.PNG', 'Limpiador de Ventanas Glass Plus', 'Limpiador de ventanas Glass Plus, ideal para vidrios y espejos.', 110, 77.22, 5);

-- Accesorios
INSERT INTO productos (imagen, nombre_producto, descripcion, stock, precio, id_categoria) VALUES
('31.PNG', 'Esponja Scotch-Brite', 'Esponja Scotch-Brite, ideal para la limpieza diaria.', 300, 35.82, 6),
('32.PNG', 'Trapeador Swiffer', 'Trapeador Swiffer para una limpieza eficiente en pisos.', 150, 152.82, 6),
('33.PNG', 'Paño Microfibra OXO', 'Paño de microfibra OXO para una limpieza suave y efectiva.', 180, 93.42, 6),
('34.PNG', 'Cepillo de Baño Scrub Daddy', 'Cepillo de baño Scrub Daddy, eficiente para eliminar manchas.', 200, 89.82, 6),
('35.PNG', 'Guantes de Limpieza Rubbermaid', 'Guantes de limpieza Rubbermaid para protección y comodidad.', 250, 64.62, 6),
('36.PNG', 'Escoba y Recogedor OXO', 'Escoba y recogedor OXO para una limpieza completa del hogar.', 90, 278.82, 6);
