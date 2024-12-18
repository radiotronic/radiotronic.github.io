<!--=================================
  Footer
  =================================-->
<footer>



  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <h4><span class="fa fa-sitemap"></span>Menu</h4>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <ul class="sitemap">
              <li><a href="home"><?php echo $menu_home; ?></a></li>
              <li><a href="sobre"><?php echo $menu_sobre; ?></a></li>
              <li><a href="noticias"><?php echo $menu_noticias; ?></a></li>
              <?php  
              if ($mural == 1) {
                echo "<li><a href='mural'>$menu_mural</a></li>";
              }
            ?>
              <li><a href="programacao"><?php echo $menu_programacao; ?></a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <ul class="sitemap">
              <li><a href="eventos"><?php echo $menu_eventos; ?></a></li>
              <li><a href="fotos"><?php echo $menu_fotos; ?></a></li>
              <li><a href="videos"><?php echo $menu_videos; ?></a></li>
              <li><a href="equipe"><?php echo $menu_equipe; ?></a></li>
              <li><a href="contato"><?php echo $menu_contato; ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--\\column-->
      
      <div class="col-lg-3 col-md-3 col-sm-3">
        <h4><span class="fa fa-info-circle"></span>Informações</h4>
        <p><?php echo $page_title; ?></p>
        <p><?php echo $page_desc; ?></p>
        <p>Todos os direitos reservados.</p>
        <a href="<?php echo $facebook_url; ?>" target="_bank"><i class="fa fa-facebook fa-2x"></i></a> 
        <a href="<?php echo $twitter_url; ?>" target="_bank"><i class="fa fa-twitter fa-2x"></i></a> 
        <a href="<?php echo $youtube_url; ?>" target="_bank"><i class="fa fa-youtube fa-2x"></i></a> 
        <a href="<?php echo $google_url; ?>" target="_bank"><i class="fa fa-google-plus fa-2x"></i></a> 
        <a href="<?php echo $instagram_url; ?>" target="_bank"><i class="fa fa-instagram fa-2x"></i></a>

      </div>
      <!--\\column-->
      
      <div class="col-lg-3 col-md-3 col-sm-3">
        <h4><span class="fa fa-umbrella"></span>Previsão do Tempo</h4>
        
        <?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/data/pages/previsao-do-tempo.html"); ?>   
      </div>
      <!--\\column-->
      
      <div class="col-lg-3 col-md-3 col-sm-3">
        <h4><span class="fa fa-envelope"></span>Contato</h4>

         <i class="fa fa-envelope-o fa-2x"></i> <?php echo $email_contact; ?>
         <br/><br/>
         <i class="fa fa-whatsapp fa-2x"></i> <?php echo $nub_whatsapp; ?>
         <br/><br/>
         <i class="fa fa-facebook fa-2x"></i><a href="<?php echo $facebook_url; ?>" target="_bank"> Facebook</a>
         <br/><br/>
         <i class="fa fa-twitter fa-2x"></i><a href="<?php echo $twitter_url; ?>" target="_bank"> Twitter</a>
                 
      </div>
      <!--\\column--> 
      
    </div>
    <!--\\row-->     
    <ul class="social">
    <hr> 

        <li><a href="<?php echo $facebook_url; ?>" target="_bank"><span class="fa fa-facebook"></span></a></li>
        <li><a href="<?php echo $twitter_url; ?>" target="_bank"><span class="fa fa-twitter"></span></a></li>
        <li><a href="<?php echo $pinterest_url; ?>" target="_bank"><span class="fa fa-pinterest"></span></a></li>
        <li><a href="<?php echo $linkedin_url; ?>" target="_bank"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="<?php echo $flickr_url; ?>" target="_bank"><span class="fa fa-flickr"></span></a></li>
        <li><a href="<?php echo $youtube_url; ?>" target="_bank"><span class="fa fa-youtube"></span></a></li>
        <li><a href="<?php echo $google_url; ?>" target="_bank"><span class="fa fa-google-plus"></span></a></li>
        <li><a href="<?php echo $instagram_url; ?>" target="_bank"><span class="fa fa-instagram"></span></a></li>
      </ul>
      <p class="text-center"><?php echo $page_title; ?> © <?php echo date(Y); ?>  - Todos os direitos reservados.</p>
      
      
      
  </div>
  <!--\\container--> 

</footer>

        