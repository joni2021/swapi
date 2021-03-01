#Star Wars Api

## Sobre la API

Esta es una API de Star Wars, desarrollada con laravel 8 y basada en [swapi](https://swapi.dev/), con datos de personajes, películas, espécies, vehículos, naves espaciales y planetas del mundo de Star Wars.


## Requerimientos

- **PHP >= 7.2**
- **MySQL >= 5.7**

## Instalación

<code>composer install</code>

### Usando doker
Laravel 8 viene con una interfaz de línea de comandos llamada <code>sail</code> para interactuar con el entorno de trajado de laravel en docker.    
Para más información ver la documentación oficial de [sail](https://laravel.com/docs/8.x/sail)

#### Generar el <code>docker-compose.yml</code>
<code>sail:install</code>

#### crear y correr el contenedor con la imagen para laravel
<code>sail up</code>
