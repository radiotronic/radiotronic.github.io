<?php include ("config.php");  ?>
<?php include ("admin/bd/player.php");  ?>
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
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
  <link rel="icon" href="admin/assets/img/favicon.jpg">
  <link rel="shortcut icon" href="admin/assets/img/favicon.jpg" />
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

  <style type="text/css">
    #audio-player {
  position: <?php echo $pos_player ?>;
  width: 100%;
    height: 31px;
  left: -17px;
  border-top: #e62948 solid 2px;
  border-bottom: #e62948 solid 2px;
  bottom: 0;
  z-index: 9999;
  transition: all .2s ease-in-out;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  background: <?php echo $back_player ?>;
}
  </style>
  <link rel="stylesheet" href="assets/css/main.css">

  <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $corsite; ?>.css">
  <?php if ($pos_player == "fixed") {
    echo "<style> 
    #audio-player{
    
    border-bottom: none;
  }
    </style>";
  }else{
    echo "<style> 
    #audio-player{
    border-top: none;
  }
    </style>";

    } ?>


  <script async  src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script defer  src="assets/js/jquery.js"></script>


</head>
<body>
<section id="audio-player">

<iframe src="https://player.mestrestream.xyz/player-barra/<?php echo $port_stream; ?>/0000" frameborder="0" width="100%" height="31"></iframe>
        

  </section>
<script defer  src="assets/js/bootstrap.min.js"></script>
<script defer  src="assets/js/jquery.easing-1.3.pack.js"></script>
<script defer  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script defer  src="assets/js/jquery.mousewheel.min.js"></script> 

<script defer  src="assets/js/main.js"></script>  


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
