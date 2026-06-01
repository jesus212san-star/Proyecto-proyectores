CREATE TABLE proyectores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    responsable VARCHAR(100) NOT NULL,
    aula VARCHAR(50) NOT NULL,
    equipo VARCHAR(50) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Registros de prueba coherentes exigidos por la práctica
INSERT INTO proyectores (responsable, aula, equipo, estado) VALUES
('Ing. Alejandro Gómez', 'Laboratorio A', 'Proyector Epson #1', 'En uso'),
('Lic. Beatriz Mendoza', 'Aula 104', 'Proyector BenQ #3', 'Entregado'),
('Mtro. Carlos Peralta', 'Audiovisual 2', 'Proyector Sony #2', 'En uso'),
('Dra. Elena Rostro', 'Laboratorio B', 'Proyector Epson #2', 'Entregado'),
('Ing. Fernando Soto', 'Aula 201', 'Proyector ViewSonic #1', 'Mantenimiento'),
('Lic. Gabriela Nava', 'Aula 102', 'Proyector BenQ #1', 'Entregado'),
('Mtra. Irene Juárez', 'Sala de Juntas', 'Proyector Epson #3', 'En uso'),
('Dr. Jorge Martínez', 'Audiovisual 1', 'Proyector Sony #1', 'Entregado'),
('Ing. Karen Delgado', 'Laboratorio C', 'Proyector ViewSonic #2', 'Entregado'),
('Mtro. Luis Sánchez', 'Aula 205', 'Proyector BenQ #2', 'Mantenimiento');
