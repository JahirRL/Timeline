# Linea del tiempo #

## Descripción ##
Aplicación web que lleva un registro cronológico de posts realizados por los usuarios registrados y a la vez los comentarios echos por los usuarios en cada post, para más detalles consultar el archivo del proyecto en: 
> ../Timeline/Recursos/Prueba.pdf

## Notas ##

* Para ejecutar el programa es necesario contar con:
    * Apache
    * MySQL
    * PHP

## Instalación ##
Al cumplir con los requisitos anteriores es necesario:
1. Pasar el archivo a la carpeta localhost correspondiente de Apache
2. Cargar la base de datos
    1. `mysql -u username -p`
    2. `create database Timeline;`
    3. `\q`
    4. `mysql -u root -p Timeline < Timeline.sql`
    ![](/img/Capturas/6.png)

## Base de datos ##

![](/img/Capturas/5.png)

## Capturas de pantalla ##

![](/img/Capturas/1.png)
![](/img/Capturas/2.png)

<p float="left">
<img src="/img/Capturas/3.png" width="400">
<img src="/img/Capturas/4.png" width="400">
</p>
