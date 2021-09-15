<html>
  <head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Clément Colné &mdash; libreoupas</title>
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
	    <?php
          include "assets/php/visitor.php";
          include "assets/php/section.php";
          include "libreoupas-engine/main.php";
          include "assets/php/navigation.php";
          include "assets/php/theme.php";
          addCorrectTheme()
      ?>
  </head>
	<body>
        <div class="container-fluid">
            <header class="page-header">
                <a href="index.php">
                    <img id="Logo" src="assets/img/logo.png" class="logo img-responsive"/>
                </a>
            </header>
            <?php addNavigationBar(); ?>
            <section id="content" class="row">
                <?php addContent($edt, $free, $type) ?>
            </section>
            <footer class="page-footer text-center">
                Designed by <a href="https://www.nresoftware.fr">NRESoftware</a>&nbsp;&nbsp;&nbsp;&mdash;&nbsp;&nbsp;&nbsp;Created by <a href="http://clementcolne.com/">Clement Colne</a>
            </footer
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>
