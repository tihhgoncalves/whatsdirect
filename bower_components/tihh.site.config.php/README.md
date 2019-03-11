# Objeto de PHP - tihh_config()
Objeto de PHP que controla os par�metros de configura��o do site.

[![Vers�o](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.site.config.php)](#)
[![Size](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.site.config.php)](#)


### Instala��o
Para utilizar esse script, utilize o seguinte comando:

```sh
$ bower install tihh.site.config.php --save
```

P.S.: Caso prefira, voc� pode fazer o download do projeto manualmente.

### Exemplo

```php
  <?php
  
  require('bower_components/tihh.site.config.php/load.php');

  $config = new tihh_config();
  $config->set('site_url', $uri->base());
  $config->set('site_path', __DIR__ . '/');
  $config->set('page_title', 'T�tulo do Meu Site');

  ?>
```

Mais a frente, voc� pode utilizar um par�metro do config assim:

```html
  <img src="<?= $config->get('site_url); ?>images/logo.png">

  <!-- <img src="http://www.meusite.com/images/logo.png"> -->
```

### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.site.config.php/master/logo.png)


Esse script de PHP foi desenvolvido por Tihh Gon�alves (tiago@tiago.art.br). 

Mais informa��es: www.tiago.art.br
