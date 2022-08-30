
    <?php foreach($welcome_array as $welcome): ?>
    
<div class="welcome__color">
    <div class="welcome container" id="welcome">
    	<img src="img/<?php echo $welcome['img']; ?>" class="welcome__img" alt="Foto de bienvenida">
    	<div class="welcome__container">
    		<h3 class="welcome__title"><?php echo strtoupper($welcome['title']); ?></h3>
    		<p class="welcome__txt"><?php echo $welcome['txt']; ?></p>
    	    <p class="welcome-p"><a class="welcome__link" href="controller/services.controller.php?action=services">Servicios &raquo;</a></p>
    	</div>
    </div>
</div>
    <?php endforeach; ?>

    <?php foreach($experience_array as $experience): ?>

<div class="experience__color">
    <div class="experience container">
    	<div class="experience__container">
    		<h3 class="experience__title"><?php echo strtoupper($experience['title']); ?></h3>
    		<p class="experience__txt"><?php echo $experience['txt']; ?></p>
    	</div>
    	<img src="img/<?php echo $experience['img']; ?>" class="experience__img" alt="Nuestra experiencia">
    </div>
</div>

    <?php endforeach; ?>

    <div class="our-personal">
    	<div class="our-personal-color">
    		<h3 class="our-personal-title">REPOSTEROS</h3>
            <div class="chefs-flex container">

            <?php foreach($personal_array as $personal): ?>

    	    <div class="chefs">
                <div class="chefs-img__content">
    		        <img src="img/<?php echo $personal['img']; ?>" class="chefs-img" alt="Chef1">
                </div>
    		    <div class="chefs__content">
    		        <p class="chefs-name"><?php echo ucwords($personal['name']); ?></p>
    		        <p class="chefs-age"><?php echo $personal['age'] . " años"; ?></p>
    		    </div>
    	    </div>

            <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- ================== Styles of coffee ================== -->

    <div id="our-coffee"></div>

    <div class="column__coffee-background">
        <div class="column__coffee-container container">
            <h3 class="column__coffee-container-title">NUESTROS CAFES</h3>
            <div class="column__coffee-content">

                <?php foreach($coffee_array as $coffee): ?>

                <div class="column__coffee">
                    <div class="column__coffee-content__img">
                        <img src="img/<?php echo $coffee['img']; ?>" class="column__coffee-img" alt="<?php echo $coffee['title']; ?>">
                    </div>
                    <div class="column__coffee-text">
                        <h4 class="column__coffee-title"><?php echo ucwords($coffee['title']); ?></h4>
                        <p class="column__coffee-price__before"><i><s>$<?php echo $coffee['price'] + 10; ?>.00</s></i></p>
                        <p class="column__coffee-price"><?php echo "$" . $coffee['price'] . ".00"; ?></p> 
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
        </div>        
    </div>

    <!-- ================== Styles of cakes ================== -->

    <div id="our-cakes"></div>

    <div class="column__cake-background">
        <div class="column__cake-container container">
        	<h3 class="column__cake-container-title">NUESTROS POSTRES</h3>
        	<div class="column__cake-content">

                <?php foreach($cakes_array as $cakes): ?>

        	    <div class="column__cake">
                    <div class="column__cake-content__img">
        		        <img src="img/<?php echo $cakes['img']; ?>" class="column__cake-img" alt="<?php echo $cakes['title']; ?>">
                    </div>
        		    <div class="column__cake-text">
        		        <h4 class="column__cake-title"><?php echo ucwords($cakes['title']); ?></h4>
                        <p class="column__cake-price__before"><i><s>$<?php echo $cakes['price'] + 10; ?>.00</s></i></p>
        		        <p class="column__cake-price">$<?php echo $cakes['price']; ?>.00</p>
        		    </div>
        	    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- ======================== Galeria ========================== -->

    <div class="gallery-background">
        <h2 class="gallery-title" id="gallery">GALERIA</h2>

        <ul class="gallery container">
        <?php foreach($gallery_array as $gallery): ?>

            <li class="gallery__li"><a href="#<?php echo $gallery['id']; ?>"><img src="img/<?php echo $gallery['img']; ?>" class="gallery__img" alt="<?php echo $gallery['name']; ?>"></a></li>

        <!-- Gallery - Modal -->

        <?php require("model/pag_modal.php"); ?>

        <div class="gallery__modal" id="<?php echo $gallery['id']; ?>">
            <div class="gallery__modal--overflow">
                <a class="gallery__modal-close" href="#index.php">X</a>
            </div>
            <h2 class="gallery__modal-title"><?php echo $gallery['name']; ?></h2>
            <div class="gallery__modal-content">
                <img src="img/<?php echo $gallery['img']; ?>" class="gallery__modal-img" alt="Imagen 1">
            </div>
        </div>

        <?php endforeach; ?>

        </ul>

        <!-- Paginación -->

        <?php require("model/paginacion.php"); ?>

        <?php

        //Operacion matematica para boton siguiente y atras
        $incrementNum = (($pagina +1) <= $total_paginas)?($pagina +1):1;
        $decrementNum = (($pagina -1) < 1)?1:($pagina -1);

        ?>
    <nav class="nav">
        <ul class="paginacion">
            <li class="li btn"><a class="pag-link" href="?pagina=<?php echo $decrementNum; ?>">&laquo;</a></li>

        <?php

        //Se resta y suma con el numero de pag actual con el cantidad de 
        //numeros  a mostrar
        $desde = $pagina-(ceil($post_por_pagina/2) -1);
        $hasta = $pagina+(ceil($post_por_pagina/2) -1);

        //Se valida
        $desde=($desde < 1)?1:$desde;
        $hasta=($hasta < $post_por_pagina)?$post_por_pagina:$hasta;
        //Se muestra los numeros de paginas
        for ($i=$desde; $i <= $hasta ; $i++) {
            //Se valida la paginacion total
            //de registros
            if ($i <= $total_paginas) {
                //Validamos la pag activo
                if ($i == $pagina) {
                    echo "<li class='li' id='active'><a class='pag-link' href='?pagina=" . $i . "#gallery'>" . $i . "</a></li>";
                } else {
                    echo "<li class='li'><a class='pag-link' href='?pagina=" . $i . "#gallery'>" . $i . "</a></li>";
                }
            }
        }

        echo "<li class='li'><a class='pag-link' href='?pagina=" . $incrementNum . "#gallery'>&raquo;</a></li></ul></nav>";

        ?>

        </ul>
    </nav>
    </div>

