<?php 
define("ACCESS", true);
require_once("gotch.php"); 
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Favori oyununu tahmin ediyoruz!">
    <meta name="author" content="Muhammed KAPLAN">
      <meta property="og:url"       content="<?php echo $items["url"]; ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $items["title"]; ?> Yorum yapmissin!" />
  <meta property="og:description"   content="Evlat, Buraya tiklayarak daha fazla test görebilirsin! "/>
  <meta property="og:image"         content="<?php echo $items["image"]; ?>" />
<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
    <title>Favori Oyununu Tahmin Ediyoruz! | Mcindir</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap-flat.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script type="text/javascript">
          // with jQuery
$.post(
    'https://graph.facebook.com',
    {
        id: '<?php echo $items["url"] ?>',
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
fbxhr.send("<?php echo $items["url"]?>&scrape=true");
      </script>
  </head>

  <body>

<style type="text/css">
body {
  padding-top: 50px;
backgound-color:#f7f7f7;
font-family:"Montserrat", sans-serif;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}

img{
    width:550px!important;
    height:300px!important;
}

	@import url('https://fonts.googleapis.com/css?family=Montserrat:200,400,500,700');
	body{
		margin: 0;
		padding: 0;
		background: #f7f7f7;
		font-family: 'Montserrat', sans-serif;
	}
	.title{
		font-size: 50px;
		margin-bottom: 40px;
		margin-top: 50px;
		text-transform: uppercase;
	}
</style>
    </nav>

    <div class="container">

      <div class="starter-template">
        <div class="title"><b><?php echo $items["title"] ?></b> yorum yapmissin!</div>
        <img src="<?php echo $items["image"]; ?>" alt="<?php echo $items["title"]; ?>" width="550" height="300">
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
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Made by <a href="http://fb.com/hortebrindarr"> Muhammed KAPLAN</a></span>
      </div>
    </footer>
  </body>
</html>
