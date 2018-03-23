<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Target des slides à afficher -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- Affichage des "slides". -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo site_url(); ?>assets/img/carousel/1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="<?php echo site_url(); ?>assets/img/carousel/1.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="<?php echo site_url(); ?>assets/img/carousel/1.jpg" alt="New York">
    </div>
  </div>

  <!-- Bouton de controle pour faire défiler le  carousel -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>