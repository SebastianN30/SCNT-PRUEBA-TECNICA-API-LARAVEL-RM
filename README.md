# Explorador de API de Rick & Morty con Laravel
Versión 1

El explorador de API de Rick y Morty es una aplicación web desarrollada fullstack en Javascript (Node.JS y React) que implementa la API pública de Rick y Morty y agrega ejemplos de usabilidad, navegación, consulta y gestión CRUD.

Esta aplicación se desarrolla con el objetivo de solucionar una prueba tecnica en laravel

## INSTALACION
- git clone https://github.com/SebastianN30/SCNT-PRUEBA-TECNICA-API-LARAVEL-RM.git

## COMPILACIÓN FRONTEND
- Para compilar las extends de laravel es necesario ejecutar el comando de (php artisan composer o composer update)

## EJECUCION
- ### BACKEND
  - php artisan serve

## CAPTURAS
- Captura de base de datos conectada
![](storage\app\public\imagenes\Conexion.png)
- Captura de registro eliminado por medio de un id
![](storage\app\public\imagenes\Eliminar.png)
- Captura de registro insertado
![](storage\app\public\imagenes\Escribir.png)
- Captura de registros completos o si requiere de uno en especifico puede agregar un id
![](storage\app\public\imagenes\Leer.png)

## FEATURES
- Consume la API de RyM online a través del backend propio
- El backend expone API para manejo de CRUD de personajes
- La entidad personajes existe localmente en una base de datos SQLite
- Se incluyó TOKEN para consumo de API, con laravel es necesario tomar ese token y asignarlo para rutas de tipo post

## STACK UTILIZADO
- Laravel (PHP)
- Bootstrap
- SQLite
- Git y npm

## AUTOR
- Sebastian Nope (@SebastianN30)

## CONCLUSIONES
El desarrollo de la prueba tiene un proceso de entendimiento, en donde es necesario tener experiencia con el consumo de api's y la habilidad con un app como postman
ya que es primordial en el mundo back y para el consumo de endpoints


## FECHA DE ÚLTIMA ACTUALIZACIÓN
28/08/2023

por @SebastianN30