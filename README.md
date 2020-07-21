# Maleteo
## Descripción
Esta web se compone de un frontal estático con un formulario sencillo de 3 campos.

Cuando se rellena el formulario y se le da a enviar te lleva a otra página estática donde te informa que los datos se han metido correctamente.

También cuenta con una ruta para poder consultar todas las solicitudes que se han registrado a través del formulario mencionado anteriormente.

## Dependencias
Para poder iniciar el proyecto necesitamos como pre-requisitos necesitamos lo siguiente:

* Docker

# Cómo arrancar el proyecto
1. Clonar este repo
2. `docker-compose up --build` - Esto levantará los 3 servicios que necesitamos (que se encuentran dentro del archivo `docker-compose.yml`).
3. En otra terminal ejecutamos `docker-compose exec php bash` - Entramos dentro del contenedor de PHP.
4. Una vez dentro del contenedor ejecutamos `composer install` - Esto nos instalará las dependencias necesarias dentro del contenedor.
5. Cuando `composer install` ha finalizado escribimos `exit` para salir del contendor.
6. Ejecutamos `docker-compose exec mysql bash` - Entramos dentro del contenedor de la bd.
7. Ejecutamos el comando `./scripts/create_tables.sh` y acto seguido `exit` para salir del contendor.

Una vez ejecutados los pasos anteriores podremos navegar a nuestra ruta principal.

## Puerto
localhost:8008/maleteo

### Rutas
* /maleteo - Página principal
* /maleteo/solicitudes - Listado de solicitudes realizadas en el formulario de la página principal.

### Información addicional
Este proyecto ha sido desarrollado en OS X 10.15.5 usando la versión de docker 2.3.0.3(45519)