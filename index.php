<?php require_once("functions.php"); require_once("db.php"); 

header("")
?>
<?php

      $al = $db-> prepare("SELECT * FROM oyuncular ORDER BY RAND() LIMIT 1");
  $al -> execute();
  $row = $al -> fetch(PDO::FETCH_ASSOC);

    ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Favori oyununu tahmin ediyoruz!">
    <meta name="author" content="Muhammed KAPLAN">
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Sen tam bir <?php echo $row["oyuncu"]; ?> hayranisin!" />
  <meta property="og:description"   content="Evlat, bize göre sen tam bir <?php echo $row["oyuncu"]; ?> hayranısın!" />
  <meta property="og:image"         content="<?php echo $base ?>/assets/img/<?php echo $row["oyuncu_resim"]?>.jpg" />
    <meta http-equiv="refresh" content="1;url=https://www.9oyunn.com"> 
    <link rel="icon" href="../../favicon.ico">

    <title>Favori Oyununu Tahmin Ediyoruz! | 9Oyunn</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap-flat.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<style type="text/css">
body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}
</style>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://www.9oyunn.com">Favori oyunun?</a>
        </div>

      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <img src="<?php echo $base ?>/assets/img/<?php echo $row["oyuncu_resim"]?>.jpg" alt="sa">
        <h1><?php echo $row["oyuncu"] ?></h1>
        <p class="lead">Wow, sen tam bir <?php echo $row["oyuncu"] ?> hayranısın!<br> Alttaki paylaş butonundan paylaşarak hangi tayfadan olduğunu göster millete!</p>
      </div>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
