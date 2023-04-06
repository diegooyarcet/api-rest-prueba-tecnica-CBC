<h1>#API REST - Prueba técnica para CBC</h1><br>
<h2>Instalación de PHP y Composer</h2>
Este proyecto requiere PHP y Composer para funcionar. Si ya tienes estos componentes instalados, puedes omitir esta sección.<br>

<h3>Instalación de PHP</h3>
Para instalar PHP en sistemas Linux basados en Debian/Ubuntu, puedes ejecutar los siguientes comandos en la terminal:<br>

$ sudo apt-get update<br>
$ sudo apt-get install php<br>
<h3>Instalación de Composer</h3>
Para instalar Composer en sistemas Linux basados en Debian/Ubuntu, puedes ejecutar los siguientes comandos en la terminal:<br>

$ sudo apt-get update<br>
$ sudo apt-get install composer<br>
<h2>Descargar e instalar el proyecto</h2>
Para descargar e instalar el proyecto, debes ejecutar los siguientes comandos en la terminal:<br>
$ git clone [url]<br>
$ cd [carpeta]<br>
$ composer install<br>
$ cp .env.example .env<br>
$ php artisan migrate<br>
$ php artisan db:seed # sugerido<br>
$ php artisan serve<br>
<br><strong>Nota</strong>: Reemplaza [url] con la URL del repositorio que deseas clonar y [carpeta] con el nombre de la carpeta donde deseas instalar el proyecto.<br>

<h3>Ejecutar el proyecto</h3>
Para ejecutar el proyecto, debes ejecutar el siguiente comando en la terminal:<br>
$ php artisan serve<br>
Esto iniciará el servidor de desarrollo de Laravel y podrás acceder al proyecto desde tu navegador web en la dirección http://localhost:8000.
