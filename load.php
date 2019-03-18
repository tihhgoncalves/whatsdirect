<?
set_include_path(__DIR__);

/* Objeto de Banco de Dados*/
//require('bower_components/tihh.php.obj.db.mysql/load.php');
//$db = new tihh_db_mysql('localhost', 'root', '123', 'db1');

/* Objeto de Config */
require('bower_components/tihh.site.config.php/load.php');
$config = new tihh_config();

//carrega config.php
require('config.php');

/* Objeto de URI */
require('bower_components/tihh.site.uri.php/load.php');
$uri = new tihh_uri();

/* Objeto Router */
require('bower_components/tihh.site.router.php/load.php');
$router = new tihh_router();

/* Objeto TablePost */
require('bower_components/tihh.php.obj.db.mysql.sql.post/load.php');

/* FUNÇÕES */
require('bower_components/tihh.php.fnc.getTags/load.php');
?>