Hi :), this is my first web with my friend @Sandysan2005

We are using PHP-apache, MySQL and CSS, with  Docker. 

Docker version 24.0.6

Docker images:

docker pull mysql:latest

docker pull php:7.0-apache

Creation container MySQL

docker run -p 4408:4408 -v C:\Users\Usuario\Desktop\databases\my-first-web\data:/var/lib/mysql --name database -e MYSQL_ROOT_PASSWORD=yourpassword -d mysql:latest

Creation container PHP 

docker run -p 9090:80 -v C:\Users\Usuario\Desktop\PROYECTOS\my-firstweb\src:/var/www/html --name webphp -d --link database php:7.0-apache

