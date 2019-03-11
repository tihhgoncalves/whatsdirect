<?
include($config->get('site_path') . 'assets/html.head.php');
include($config->get('site_path') . 'assets/html.header.php');
?>
  <header>
    <div class="container">

      <form action="#" method="post">

        <div class="row">

          <div class="col-md-offset-4 col-md-5">

            <p>Digite abaixo o número de celular do seu contato.</p>

          </div>

        </div>

        <div class="row">

            <div class="col-md-offset-4 col-md-1 col-sm-3 col-xs-3">
              <input name="pais" type="text" class="form-control" required="" placeholder="+País" value="+55">
            </div>

            <div class="col-lg-2 col-md-4 col-sm-9 col-xs-9">
              <input name="numero" type="text" class="form-control" required="" placeholder="(47) 9 9999-9999">
            </div>

            <div style="clear: both"></div>

        </div>

        <div class="row padT10">

          <div class="col-md-offset-4 col-md-5">
            <button type="submit" class="btn">Enviar mensagem</button>
          </div>

        </div>

        </div>

      </form>

    </div>

  </header>

</body>
<?
include($config->get('site_path') . 'assets/html.foot.php');
include($config->get('site_path') . 'assets/html.footer.php');
?>