# Objeto de PHP - tihh_db_mysql()
Objeto de PHP que administra conexões de um site com o banco de dados de MySQL.

[![Versão](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.php.obj.db.mysql)](#)
[![Size](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.php.obj.db.mysql)](#)


### Instalação
Para utilizar esse script, utilize o seguinte comando:

```
  bower install tihh.php.obj.db.mysql --save
```

P.S.: Caso prefira, você pode fazer o download do projeto manualmente.

### Exemplo

```
  <?
  
  require('bower_components/tihh.php.obj.db.mysql/load.php');
  
  $db = new tihh_db_mysql('localhost', 'root', '123', 'db1');
  $usuarios = $db->LoadObjects('SELECT * FROM usuario ORDER BY Nome ASC');
  
  foreach($usuarios as $usuario){
    echo('Usuário: ' . $usuario->Nome . "\r\n");
  }
  
  ?>
```

### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.php.obj.db.mysql/master/logo.png)


Esse script de PHP foi desenvolvido por Tihh Gonçalves (tiago@tiago.art.br). 

Mais informações: www.tiago.art.br
