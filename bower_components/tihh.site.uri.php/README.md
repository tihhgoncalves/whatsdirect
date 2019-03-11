# Objeto de PHP - tihh_uri()
Objeto de PHP que retorna a url base do site.

[![Vers�o](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.site.uri.php)](#)
[![Size](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.site.uri.php)](#)


### Instala��o
Para utilizar esse script, utilize o seguinte comando:

```sh
$ bower install tihh.site.uri.php --save
```

P.S.: Caso prefira, voc� pode fazer o download do projeto manualmente.

### Exemplo

```php
  <?php
  
  require('bower_components/tihh.site.uri.php/load.php');

  $uri = new tihh_URI();

  echo $uri->base(); // http://www.teste.com.br/base/

  ?>
```

### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.site.uri.php/master/logo.png)


Esse script de PHP foi desenvolvido por Tihh Gon�alves (tiago@tiago.art.br). 

Mais informa��es: www.tiago.art.br
