

<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
    <!-- Target des slides à afficher -->
    <ol class='carousel-indicators'>
        <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
        <li data-target='#carousel-example-generic' data-slide-to='1'></li>
        <li data-target='#carousel-example-generic' data-slide-to='2'></li>
    </ol>

    <!-- Affichage des "slides". -->
    <div class='carousel-inner'>
        <div class='item active'>
            <img src='<?php echo site_url(); ?>assets/img/carousel/1.jpg' width="100%" alt='' />
        </div>
        <div class='item'>
            <img src='<?php echo site_url(); ?>assets/img/carousel/1.jpg' width="100%" alt='' />
        </div>
        <div class='item'>
            <img src='<?php echo site_url(); ?>assets/img/carousel/1.jpg' width="100%" alt='' />
        </div>
    </div>

    <!-- Bouton de controle pour faire défiler le  carousel -->
    <a class='left carousel-control' href='#carousel-example-generic' data-slide='prev'>
        <span class='glyphicon glyphicon-chevron-left'></span>
    </a>
    <a class='right carousel-control' href='#carousel-example-generic' data-slide='next'>
        <span class='glyphicon glyphicon-chevron-right'></span>
    </a>
</div>