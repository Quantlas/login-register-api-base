# Login Register Api Rest Base V1

## About

La base de cualquier API REST es poder gestionar usuarios. Con este código podrás inicar tu API con lo básico y desde aquí construirla.

## Características

Usando esta base podrás:

-   Registrar usuarios.
-   Autenticar usuarios registrados.
-   Deslogear usuarios autenticados.

## Get Started

-   Clona el repositorio.
-   Muevete al directorio que clonaste.
-   Ejecuta composer install
    `composer install`
-   Crea la base de datos
-   Configura el .env
    <code>
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lrarb_v1
    DB_USERNAME=root
    DB_PASSWORD=
    </code>
-   Genera la key de la app
    `php artisan key:generate`
-   Ejecuta las migraciones
    `php artisan migrate`
-   Registrar clientes api
    `php artisan passport:install`
-   Lanza el servidor
    `php artisan serve`

**¡Listo para usar!**

## Documentación

[Login Register Api Rest Base V1 Documentación](https://documenter.getpostman.com/view/18045110/2s9YyqiMnC)
