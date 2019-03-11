# Objeto de PHP - tihh_config()
Objeto de PHP que controla os parâmetros de configuração do site.

[![Versão](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.site.config.php)](#)
[![Size](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.site.config.php)](#)


### Instalação
Para utilizar esse script, utilize o seguinte comando:

```sh
$ bower install tihh.site.config.php --save
```

P.S.: Caso prefira, você pode fazer o download do projeto manualmente.

### Exemplo

```php
  <?php
  
  require('bower_components/tihh.site.config.php/load.php');

  $config = new tihh_config();
  $config->set('site_url', $uri->base());
  $config->set('site_path', __DIR__ . '/');
  $config->set('page_title', 'Título do Meu Site');

  ?>
```

Mais a frente, você pode utilizar um parâmetro do config assim:

```html
  <img src="<?= $config->get('site_url); ?>images/logo.png">

  <!-- <img src="http://www.meusite.com/images/logo.png"> -->
```

### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.site.config.php/master/logo.png)


Esse script de PHP foi desenvolvido por Tihh Gonçalves (tiago@tiago.art.br). 

Mais informações: www.tiago.art.br
