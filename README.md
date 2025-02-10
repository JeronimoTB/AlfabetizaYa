# Alfabetiza Ya!

Este es un proyecto para gestionar estudiantes y servicios relacionados con la alfabetización. La aplicación está diseñada para ser desplegada fácilmente utilizando contenedores Docker.

## Tecnologías Utilizadas
- **PHP**: Backend del proyecto.
- **MySQL**: Base de datos utilizada para almacenar los datos.
- **Apache**: Servidor web.
- **Docker**: Contenedores para gestionar la infraestructura.
- **phpMyAdmin**: Interfaz gráfica para gestionar la base de datos.

---

## Instrucciones para Ejecutar el Proyecto

### 1. Clona el Repositorio

Primero, necesitas clonar este repositorio en tu máquina local:

```bash
git clone https://github.com/tu-usuario/alfabetiza-ya.git
cd alfabetiza-ya
```
### 2. Asegúrate de Tener Instalado Docker y Docker Compose

Si no tienes Docker instalado, descárgalo desde Docker. También verifica que docker-compose esté disponible.

### 3. Construye y Levanta los Contenedores

Ejecuta el siguiente comando para construir las imágenes y levantar los contenedores:

```bash
docker-compose up -d
```
- Levantará un contenedor MySQL con la base de datos alfabetiza.
- Levantará un contenedor Apache con PHP configurado.
- Levantará un contenedor phpMyAdmin accesible desde el navegador para gestionar la base de datos.

### 4. Accede a la Aplicación

- Aplicación web: Abre tu navegador y visita http://localhost:8080.

- phpMyAdmin: Abre tu navegador y visita http://localhost:8081.
  -  Usuario: root
  -  Contraseña: root
 
---

## Scripts de Base de Datos

El archivo **init.sql** incluye las definiciones de las tablas y datos iniciales para que el proyecto funcione correctamente. Este archivo se ejecuta automáticamente al levantar el contenedor de MySQL.

Si deseas modificar o agregar datos, edita init.sql.
