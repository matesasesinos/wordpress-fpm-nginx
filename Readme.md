# Instrucciones

### Importante

La imagen esta construida para utilizar con Docker Desktop **NO WSL**, los volumenes se crean dentro de la carpeta donde se ejecute. En caso de usar **WSL** o **WSL2** se debe cambiar la ruta de los volumenes en *docker-compose.yml* quitando "./" de cada una de las opciones de volumenes.

Ejecutar **docker compose up**

Si vemos el archivo .env podemos cambiar la version de **WordPress**, **nombre de la imagen**, **version de nginx**, etc...

Todos los otros parametros para **WordPress** se puede cambiar en el archivo docker-compose.yml, también se pueden agregar más parametros en la variable de ambiente **WORDPRESS_CONFIG_EXTRA**

La imagen se construye en base a al Dockerfile para poder agregar [WP CLI](https://wp-cli.org/es/)

Para las versiones de **WordPress** tener en cuenta que deben ser **FPM**, si es también **alpine** mejor.

Se utiliza MySQL >=8.0

Se utiliza PHP 8.0 porque para la versión 8.1 de php todavía WordPress esta en beta y puede generar errores.