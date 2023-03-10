# WordPress (Nginx + PHP 8.0 + Redis)

Esta imagen no esta lista para producción, si miran el docker-compose.yml veran que esta para dev solamente ya que tiene configuraciones básicas activas que no deberían estar activas (por ejemplo el debug), si se usa para producción es bajo su propio riesgo. Les recomiendo pasarsela a un **devops** para que la revise y optimice.

### Importante

La imagen esta construida para utilizar con Docker Desktop **NO WSL**, los volumenes se crean dentro de la carpeta donde se ejecute. En caso de usar **WSL** o **WSL2** se debe cambiar la ruta de los volumenes en *docker-compose.yml* quitando "./" de las opciones de volumenes de mysql (los demás andan sin problema).

Ejecutar **docker compose up**

Si vemos el archivo .env podemos cambiar la version de **WordPress**, **nombre de la imagen**, **version de nginx**, etc...

Todos los otros parametros para **WordPress** se puede cambiar en el archivo docker-compose.yml, también se pueden agregar más parametros en la variable de ambiente **WORDPRESS_CONFIG_EXTRA**

La imagen se construye en base a al Dockerfile para poder agregar [WP CLI](https://wp-cli.org/es/)

Para las versiones de **WordPress** tener en cuenta que deben ser **FPM**, si es también **alpine** mejor.

Se utiliza MySQL >=8.0

Se utiliza PHP 8.0 porque para la versión 8.1 de php todavía WordPress esta en beta y puede generar errores.

### Redis

Para hacer funcionar redis tenemos que instalar un plugin (una vez hecha la instalación del plugin) **[Redis Cache](https://wordpress.org/plugins/redis-cache)**, en la parte de configuración (no importa si muetra "el dependiente no esta instalado") simplemente hacer click en Activar Cache de Objetos y redis comienza a funcionar.

### Dominios locales

Se puede trabajar con un dominio local, por ejemplo *http://miweb.test* agregando en el archivo host de su SO lo siguiente:

127.0.0.1      miweb.test

Luego desde el navegador podemos acceder utilizando *http://miweb.test:5300* donde **5300** es el puerto que pusimos en el .env en la variable **NGINX_PORT**, si en esta variable usamos el puerto 80, no es necesario poner el puerto al dominio.

### Archivo "host"

En Windows encontramos el archivo en *C:\Windows\System32\drivers\etc* necesitamos permisos de administración para modificarlo.
