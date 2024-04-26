Objetivo del Proyecto
Desarrollar una aplicación web en Laravel para la gestión de reservas en salones de belleza, permitiendo a los usuarios administrar clientes, servicios y reservas de manera eficiente.

Estructura del Proyecto
El proyecto sigue la siguiente estructura de archivos y carpetas:

app/: Contiene los archivos de la lógica de negocio, incluyendo modelos, controladores y otros.
database/migrations/: Aquí se encuentran los archivos de migración para la creación de las tablas en la base de datos.
resources/: Contiene los archivos de vistas, estilos y scripts.
routes/: Define las rutas de la aplicación.
public/: Carpeta pública que contiene los activos estáticos, como imágenes, CSS y JavaScript.
Requisitos Previos
PHP >= 8.2.13
Composer
Node.js y npm (para compilar assets)
Git
Configuración del Proyecto
Clonar el repositorio desde GitHub:


git clone <url_del_repositorio> en este caso https://github.com/JohanStiven8310/SGRSB.git
Instalar las dependencias de PHP con Composer:


composer install
Instalar las dependencias de JavaScript con npm:

npm install
Compilar los activos (CSS y JavaScript):

npm run dev
Configurar el archivo .env con la información de la base de datos y otras configuraciones necesarias.
Generar la clave de la aplicación:


php artisan key:generate
Ejecutar las migraciones para crear las tablas en la base de datos:


php artisan migrate
Iniciar el servidor de desarrollo:


php artisan serve

Funcionamiento
Una vez configurado el proyecto y en funcionamiento, los usuarios pueden acceder a las siguientes funcionalidades:

Gestión de Clientes: Permite agregar, editar, eliminar y ver detalles de clientes.
Gestión de Servicios: Permite agregar, editar, eliminar y ver detalles de servicios ofrecidos por el salón de belleza.
Gestión de Reservas: Permite realizar reservas asociando clientes y servicios, además de gestionar la fecha, hora y comentarios de la reserva.
Desarrollo y Contribución
El desarrollo del proyecto sigue las mejores prácticas de Laravel, incluyendo el uso de migraciones, modelos, controladores y rutas para la implementación de las funcionalidades requeridas.

Para contribuir al proyecto, se recomienda:

Crear una nueva rama para trabajar en nuevas funcionalidades o correcciones de errores:


git checkout -b nombre_de_la_rama en este caso jean-quinones que es mi compañero y yo trabajo en la main, mi nombre de usuario en los commits aparece como JohanStiven8310

Desarrollar y probar los cambios localmente.
Hacer commit de los cambios y subir la rama al repositorio remoto:

git add .
git commit -m "Descripción del cambio"
git push origin nombre_de_la_rama
Crear una solicitud de extracción (pull request) en GitHub para revisar y fusionar los cambios en la rama main.



