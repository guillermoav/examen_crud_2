Fue realizado en un entorno local a través de XAMPP con la versión de PHP 7.4.1

Los archivos de la carpeta mvc se deben de colocar en la raiz

se debe de instalar la base de datos con el nombre crud_2019


Se debe de crear un archivo en la raiz con el nombre ".htaccess" e insertar el siguiente contenido

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
