<?php if(!isset($_GET['action'])) { ?>

   <div class="banner" id="banner">
      <div class="banner__color">
         <div class="banner__content container">
            <div class="banner__text">
                <?php foreach($banner_array as $banner): ?>
                  <h1 id="banner__title" class="banner__title"><?php echo $banner['title']; ?></h1>
                  <h3 id="banner__txt" class="banner__txt"><?php echo $banner['txt']; ?></h3>
                <?php endforeach; ?>
             </div>
             <div class="banner__buttons">
               <div class="banner__buttons-content">
                  <div class="banner__buttons-to_bottom"></div>
               </div>
             </div>
         </div>
       </div>
   </div>

<?php } else { ?>

    <div class="services-banner" id="banner">
        <div class="services-banner__color">
            <div class="services-banner__content container">
               <div class="services-banner__text">
                  <?php foreach($bannerTwo as $banner): ?>
                  <h1 id="banner__title" class="services-banner__title"><?php echo $banner['title']; ?></h1>
                  <h3 id="banner__txt" class="services-banner__txt"><?php echo $banner['txt']; ?></h3>
                <?php endforeach; ?>
               </div>
               <div class="services-banner__buttons">
                  <a class="services-banner__buttons-link color-green" href="../#our-coffee">Nuestros Cafés</a>
                  <a class="services-banner__buttons-link" href="../#our-cakes">Nuestros Postres</a>
               </div>
           </div>
        </div>
    </div>

<?php } ?>