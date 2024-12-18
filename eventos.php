<?php include ("config.php");  ?>
<?php include ("admin/bd/mural.php");  ?>
<?php include ("admin/bd/stream.php");  ?>
<?php include ("admin/bd/locutores.php");  ?>
<?php include ("admin/bd/top5.php");  ?>
<?php include ("admin/bd/anunciantes.php");  ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $page_title; ?> - <?php echo $menu_eventos; ?></title>

<!--=================================
Meta tags
=================================-->
<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="keywords" content="<?php echo $page_words; ?>" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<!-- Favicon --> 
<link rel="icon" href="admin/assets/img/favicon.jpg">
<link rel="shortcut icon" href="admin/assets/img/favicon.jpg" />

<!--=================================
Style Sheets
=================================-->
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.vegas.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/css/<?php echo $corsite; ?>.css">


<script async  src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script defer  src="assets/js/jquery.js"></script>

</head>
<body>

<!--=================================
  Header
  =================================-->
<header>
  <nav class="navbar yamm navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle fa fa-navicon"></button>
        <a class="navbar-brand" href="home.php">
            <img src="admin/assets/img/logo.png" alt="logo" />
        </a>
      </div>
      <div class="nav_wrapper">
        <div class="nav_scroll">
          
          <ul class="nav navbar-nav">

            <li class=""><a href="home.php"><?php echo $menu_home; ?></a></li>

            <li class=""><a href="sobre.php"><?php echo $menu_sobre; ?></i></a></li>

            <li class=""><a href="noticias.php"><?php echo $menu_noticias; ?></i></a></li>

            <?php  
              if ($mural == 1) {
                echo "<li><a href='mural.php'>$menu_mural</i></a></li>";
              }
            ?>

            <li class=""><a href="programacao.php"><?php echo $menu_programacao; ?></i></a></li>

            <li class="active"><a href="eventos.php"><?php echo $menu_eventos; ?></a></li>

            <li class=""><a href="fotos.php"><?php echo $menu_fotos; ?></a></li>

            <li class=""><a href="videos.php"><?php echo $menu_videos; ?></a></li>

            <li class=""><a href="equipe.php"><?php echo $menu_equipe; ?></a></li>

            <li class=""><a href="contato.php"><?php echo $menu_contato; ?></a></li>

          </ul>
        </div>
        <!--/.nav-collapse --> 
        
      </div>
    </div>
  </nav>
</header>

<!--=================================
Vegas Slider Images
=================================-->

<ul class="vegas-slides hidden">
<?php $gallery ="Bg"; include($_SERVER["DOCUMENT_ROOT"]."/admin/includes/gallery-bg.php"); ?> 
</ul>



<!--=================================
JPlayer (Audio Player)
=================================-->


<div id="ajaxArea">
    <div class="pageContentArea">
      <!--=================================
      bread crums
      =================================-->
        <section class="breadcrumb">
             <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <h1><?php echo $menu_eventos; ?></h1>
                          <h5>Últimos Eventos</h5>
                      </div>
                  </div>
             </div>
        </section>
        <div class="clearfix"></div>
      
      
      <!--=================================
      Upcoming events
      =================================-->
      
      <section id="updates">
          <div class="container">
              <div class="row">
                  
      
                  <div class="col-lg-9 col-md-9 col-sm-9">

                          
                          <article class="latest-post">
                          <?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/includes/eventos2.php"); ?>

                          </article><!--\\latest post-->
                          
                    
                  </div><!--latest news-->
                  
                  
            <div class="col-lg-3 col-md-3 col-sm-3">
           <h1>Aplicativos</h1>
           <div class="banner-app">
            <?php include ("admin/bd/$apk_select"); ?>
            <?php include ("admin/bd/$ios_select"); ?>
            </div>
            
            <br/>

            <h1> Locutor Ao vivo</h1>


<?php include ("admin/bd/locutores/$locutor_select"); ?>
<div class="event-feed">
<h1>Peça Sua Música</h1>
<?php include ("admin/bd/$pedido_select"); ?> 
</div>
<br/>

              <h1>Top 5</h1>


               <center><img class="top5" src="admin/assets/img/artistas/artista1.png" /></center>
               <div class="event-feed2">
               
              <h3>01.</h3><h5><?php echo $artista_top1; ?></h5>
               <p><?php echo $musica_top1; ?></p>
                  <center><audio id="music" preload="true">
                  <source src="<?php echo $url1_mp3; ?>">
                 </audio>
                      <div class="aligButton">
                  <button id="pButton" class="play" onclick="play()"></button>
                  </div></center>
              </div>

           
               <center><img class="top5" src="admin/assets/img/artistas/artista2.png" /></center>
               <div class="event-feed2">
              <h3>02.</h3><h5><?php echo $artista_top2; ?></h5>
               <p><?php echo $musica_top2; ?></p>
        <center><audio id="music1" preload="true">
          <source src="<?php echo $url2_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton1" class="play" onclick="play1()"></button>
        </div></center>
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista3.png" /></center>
               <div class="event-feed2">
              <h3>03.</h3><h5><?php echo $artista_top3; ?></h5>
               <p><?php echo $musica_top3; ?></p>
        <center><audio id="music2" preload="true">
          <source src="<?php echo $url3_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton2" class="play" onclick="play2()"></button>
        </div></center>          
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista4.png" /></center>
               <div class="event-feed2">
              <h3>04.</h3><h5><?php echo $artista_top4; ?></h5>
               <p><?php echo $musica_top4; ?></p>
        <center><audio id="music3" preload="true">
          <source src="<?php echo $url4_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton3" class="play" onclick="play3()"></button>
        </div></center>
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista5.png" /></center>
               <div class="event-feed2">
              <h3>05.</h3><h5><?php echo $artista_top5; ?></h5>
               <p><?php echo $musica_top5; ?></p>
        <center><audio id="music4" preload="true">
          <source src="<?php echo $url5_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton4" class="play" onclick="play4()"></button>
        </div></center>
              </div>
              
            </div>
              </div>
          </div>    
      </section>
  </div><!--pageContent-->
</div><!--ajaxwrap-->    

<?php include ("anuncios.php");  ?>


<!--=================================
  Footer
  =================================-->
<?php include ("rodape.php");  ?>

<!--=================================
Script Source
=================================--> 
<script defer  src="stopExecutionOnTimeout"></script>
<script defer  src="assets/js/playtop5.js"></script>

<script defer  src="assets/js/bootstrap.min.js"></script>
<script defer  src="assets/js/jquery.easing-1.3.pack.js"></script>
<script defer  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script defer  src="assets/js/jquery.mousewheel.min.js"></script> 
<script defer  src="assets/js/jflickrfeed.min.js"></script> 
<script defer  src="assets/js/jquery.flexslider-min.js"></script> 
<script defer  src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script> 
<script defer  src="assets/js/tweetie.min.js"></script> 
<script defer  src="assets/js/jquery.prettyPhoto.js"></script> 
<script defer  src="assets/jPlayer/jquery.jplayer.min.js"></script> 
<script defer  src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script> 
<script defer  src="assets/js/jquery.vegas.min.js"></script> 
<script defer  src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> 
<script defer  src="assets/js/jquery.calendar-widget.js"></script> 
<script defer  src="assets/js/isotope.js"></script>
<script defer  src="assets/js/main.js"></script>  

	</script>
	
		<script src="/admin/includes/tracker.php?uri=<?php echo $_SERVER['REQUEST_URI']; ?>&ref=<?php echo $_SERVER['HTTP_REFERER']; ?>"></script>
		<script type="text/javascript">

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', '<?php echo $analytics_id; ?>']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>

</body>
</html>
