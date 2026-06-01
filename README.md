# Práctica Integradora - Control de Préstamo de Proyectores

**Estudiante:** Jesús Sánchez Paredes  
**Materia:** Desarrollo Móvil Android y Programación Web  

## 📌 Descripción del Proyecto
Este sistema web y móvil permite gestionar de manera remota el control y préstamo de proyectores en los diferentes laboratorios y aulas escolares. Consta de una base de datos MySQL en línea, archivos de servidor en PHP y una aplicación móvil para registrar y consultar datos en tiempo real.

## 🛠️ Tecnologías Utilizadas
- **Backend:** PHP 8 y MySQL (Alojado en servidor en línea)
- **Frontend Móvil:** Android
- **Gestión de Archivos:** FileZilla (FTP)

## 🗃️ Estructura de la Tabla `proyectores`
- `id` (INT, Autoincrementable, Llave primaria)
- `responsable` (VARCHAR)
- `aula` (VARCHAR)
- `equipo` (VARCHAR)
- `estado` (VARCHAR)
- `fecha_registro` (TIMESTAMP)
