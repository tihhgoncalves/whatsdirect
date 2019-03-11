<?php
class tihh_config{

  function __construct(){

    //se ainda não foi dado o session_start(), dá!
    if (!isset($_SESSION)) {
      session_start();
    }

  }
  function set($key, $val){
    $_SESSION['tihh_config'][$key] = $val;
  }

  function get($key){
    return $_SESSION['tihh_config'][$key];
  }

}
?>
