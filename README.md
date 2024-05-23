<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ReservadorDeAulas

Este proyecto es un sistema diseñado para facilitar a los docentes la gestión de reservas de aulas para sus clases. La plataforma proporciona una solución eficiente y organizada para programar y asegurar el uso adecuado de los espacios de enseñanza, permitiendo a los docentes concentrarse en lo más importante: la enseñanza.

## Características Principales

- **Reservas Intuitivas:** Interfaz sencilla y fácil de usar que permite a los docentes realizar reservas de aulas de manera rápida y eficiente.

- **Administración de Aulas:** Funcionalidades para la gestión de información de las aulas, como capacidad, ubicación y disponibilidad.

- **Facilidades para el administrador:** El administrador tendrá mas facilidades a la hora de reservar aulas

## Instalación

Siga estos pasos para instalar y configurar el proyecto localmente.

### Requisitos Previos

Asegúrese de tener instalados los siguientes requisitos previos:

- PHP >= 7.4
- Composer
- MySQL

### Pasos de Instalación

1. Clonar el repositorio:

    ```bash
    git clone https://gitlab.com/ihatethewronganswer-programacionweb/reservaaulas.git
    ```

2. Entrar al directorio del proyecto:

    ```bash
    cd reservaaulas
    ```

3. Instalar las dependencias de Composer:

    ```bash
    composer install
    ```

4. Copiar el archivo de configuración:

    ```bash
    cp .env.example .env
    ```

5. Configurar las variables de entorno en el archivo `.env` con la información de tu base de datos y otros ajustes necesarios.

    1. asegúrese de cambiar las credenciales por las suyas dentro del archivo .env
    2. debe crear la base de datos, para crear la base de datos siga los pasos que existen dentro del archivo reserva_aulasDATA.sql

6. Generar la clave de aplicación:

    ```bash
    php artisan key:generate
    ```

7. Ejecutar las migraciones y semillas de la base de datos:

    ```bash
    php artisan migrate --seed
    ```

## Iniciar el Proyecto

Una vez que haya completado la instalación, puede iniciar el servidor de desarrollo:

    ```bash
        php artisan serve
    ```

## Disponibilidad
El proyecto lo tendrá disponible dentro de su localhost, comúnmente este se encuentra en el puerto 8000# ReservadorDeAulas-Web
