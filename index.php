<?php 
define("ACCESS", true);
require_once("db.php"); 
$url = 'http://'.$_SERVER['HTTP_HOST'].'/';


?>
<?php



  $al = $db-> prepare("SELECT * FROM icerde ORDER BY RAND() LIMIT 10");
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
      <meta property="og:url"       content="http://icerde.mcindir.com/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $row["icerde"]; ?>" />
  <meta property="og:description"   content="Evlat, Buraya tiklayarak daha fazla test görebilirsin! "/>
  <meta property="og:image"         content="<?php echo $base ?>/assets/img/<?php echo $row["ic_resim"]; ?>.png" />
  <meta http-equiv="refresh" content="2;URL='https://www.mcindir.com/minecraft-plugins/english-counter-strike-csgo-minigame-plugin-for-minecraft-free/" />    
<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
    <title>Favori Oyununu Tahmin Ediyoruz! | Mcindir</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap-flat.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <script type="text/javascript">
          // with jQuery
$.post(
    'https://graph.facebook.com',
    {
        id: '<?php echo $url; ?>',
        scrape: true
    },
    function(response){
        console.log(response);
    }
);

// with "vanilla" javascript
var fbxhr = new XMLHttpRequest();
fbxhr.open("POST", "https://graph.facebook.com", true);
fbxhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
fbxhr.send("<?php echo $url; ?>&scrape=true");
      </script>
<style type="text/css">
body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}

img{
    width:500px!important;
    height:300px!important;
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
        <img src="<?php echo $base ?>/assets/img/<?php echo $row["ic_resim"]?>.png" alt="<?php echo $row["icerde"]; ?>" width="500" height="300">
        <h1><?php echo $row["icerde"] ?></h1>
        <p class="lead">Wow, sen tam bir <?php echo $row["icerde"] ?> hayranısın!<br> Alttaki paylaş butonundan paylaşarak hangi tayfadan olduğunu göster millete!</p>
      </div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5089133101627366"
     data-ad-slot="7433208330"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84746540-3', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>
