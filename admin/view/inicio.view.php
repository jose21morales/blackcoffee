
    <!-- ================== Estilos de welcome ===================== -->

    <?php foreach($welcome_array as $welcome): ?>
    
<div class="welcome__color">
    <div class="welcome container" id="welcome">
    	<img src="../img/<?php echo $welcome['img']; ?>" class="welcome__img" alt="Foto de bienvenida">
    	<div class="welcome__container">
    		<h3 class="welcome__title"><?php echo strtoupper($welcome['title']); ?></h3>
    		<p class="welcome__txt"><?php echo $welcome['txt']; ?></p>
    	    <p class="welcome-p"><a class="welcome__link" href="controller/services.controller.php?action=services">Servicios &raquo;</a></p>

            <center>
                <a href="#form-welcome-container"><button class="welcome-edit">Editar</button></a>
            </center>

    	</div>
    </div>
</div>

    <?php endforeach; ?>

  <div class="form-welcome-container" id="form-welcome-container">    
    <div class="cerrar-center">
        <a class="cerrar" href="#welcome">X</a>
    </div>
    <form class="form-welcome" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="welcome-id" value="<?php echo $welcome['id']; ?>">
        <label for="welcome-title">Titulo</label><br>
        <input type="text" name="welcome-title" id="welcome-title" value="<?php echo $welcome['title']; ?>"><br>
        <label for="welcome-txt">Descripción</label><br>
        <textarea name="welcome-txt" id="welcome-txt"><?php echo $welcome['txt']; ?></textarea><br>
        <label for="welcome-image">Imagen</label><br>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_welcome)): ?>
             <p class="errors"><?php echo $errors_welcome; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-welcome" value="Modificar">
    </form>
  </div>

  <!-- ================== Estilos de experience ================== -->

    <?php foreach($experience_array as $experience): ?>

<div class="experience__color">
    <div class="experience container">
    	<div class="experience__container">
    		<h3 class="experience__title"><?php echo strtoupper($experience['title']); ?></h3>
    		<p class="experience__txt"><?php echo $experience['txt']; ?></p>

            <center>
                <a href="#form-experience-container"><button class="experience-edit">Editar</button></a>
            </center>
    	</div>
    	<img src="../img/<?php echo $experience['img']; ?>" class="experience__img" alt="Nuestra experiencia">
    </div>
</div>

    <?php endforeach; ?>

  <div class="form-experience-container" id="form-experience-container">    
    <div class="cerrar-center">
        <a class="cerrar" href="#experience">X</a>
    </div>
    <form class="form-experience" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="experience-id" value="<?php echo $experience['id']; ?>">

        <label for="experience-title">Titulo</label>
        <input type="text" name="experience-title" id="experience-title" value="<?php echo $experience['title']; ?>"><br>

        <label for="experience-txt">Descripción</label>
        <textarea name="experience-txt" id="experience-txt"><?php echo $experience['txt']; ?></textarea><br>
        
        <label for="image">Imagen</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_experience)): ?>
             <p class="errors"><?php echo $errors_experience; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-experience" value="Modificar">
    </form>
  </div>

    <!-- ================== Estilos de personal ================== -->

    <div class="our-personal">
        <div class="our-personal-color">
            <h3 class="our-personal-title">REPOSTEROS</h3>
            <div class="chefs-flex container">

            <?php foreach($personal_array as $personal): ?>

            <div class="chefs">
                <div class="chefs-img__content">
                    <img src="../img/<?php echo $personal['img']; ?>" class="chefs-img" alt="<?php echo $personal['name']; ?>">
                </div>
                <div class="chefs__content">
                    <p class="chefs-name"><?php echo ucwords($personal['name']); ?></p>
                    <p class="chefs-age"><?php echo $personal['age'] . " años"; ?></p>
                </div>

                <a href="<?php echo '#' . $personal['name']; ?>"><button class="personal-delete">Borrar</button></a>
                
    <!-- Estilos de personal - boton borrar -->

    <div class="personal-delete-container" id="<?php echo $personal['name']; ?>">
        <div class="personal-delete-content">
            <h3 class="personal-delete-title">¿Esta seguro que desea borrar a <?php echo ucwords($personal['name']); ?>?</h3>
            <div class="personal-delete-buttons">
                <a class="personal-delete-cancel" href="#personal">Cancelar</a>
                <a class="personal-delete-accept" href="model/delete_personal.php?id=<?php echo $personal['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>
            </div>

            <?php endforeach; ?>

            </div>

            <a href="#form-personal-container"><button class="personal-add">Añadir</button></a>

        </div>
    </div>


    <!-- Estilos de personal - boton Agregar -->

  <div class="form-personal-container" id="form-personal-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#personal">X</a>
    </div>    

    <form class="form-personal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="personal-id">

        <label for="personal-name">Nombre</label>
        <input type="text" name="personal-name" id="personal-name" placeholder="Nombre:"><br>

        <label for="personal-age">Edad</label>
        <input type="text" name="personal-age" id="personal-age" placeholder="Edad:"><br>

        <label for="image">Seleccionar una imagen cuadrada (Ej. 500 x 500)</label><br>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_personal)): ?>
             <p class="errors"><?php echo $errors_personal; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-personal" value="Modificar">
    </form>
  </div>

    <!-- ================== Estilos de coffee ================== -->

    <div id="our-coffee"></div>

    <div class="column__coffee-background">
        <div class="column__coffee-container container">
            <h3 class="column__coffee-container-title">NUESTROS CAFES</h3>
            <div class="column__coffee-content">

                <?php foreach($coffee_array as $coffee): ?>

                <div class="column__coffee">
                    <div class="column__coffee-content__img">
                        <img src="../img/<?php echo $coffee['img']; ?>" class="column__coffee-img" alt="<?php echo $coffee['title']; ?>">
                    </div>
                    <div class="column__coffee-text">
                        <h4 class="column__coffee-title"><?php echo ucwords($coffee['title']); ?></h4>
                        <p class="column__coffee-price__before"><i><s>$<?php echo $coffee['price'] + 10; ?>.00</s></i></p>
                        <p class="column__coffee-price"><?php echo $coffee['price']; ?></p>

                        <a href="<?php echo '#' . $coffee['title']; ?>"><button class="coffee-delete">Borrar</button></a>
                    
    <!-- Estilos de coffee - boton borrar -->

    <div class="coffee-delete-container" id="<?php echo $coffee['title']; ?>">
        <div class="coffee-delete-content">
            <h3 class="coffee-delete-title">¿Esta seguro que desea borrar <?php echo ucwords($coffee['title']); ?>?</h3>
            <div class="coffee-delete-buttons">
                <a class="coffee-delete-cancel" href="#coffee">Cancelar</a>
                <a class="coffee-delete-accept" href="model/delete_coffee.php?id=<?php echo $coffee['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>
                </div>

            </div>

            <?php endforeach; ?>

        </div>
            <a href="#form-coffee-container"><button class="coffee-add">Añadir</button></a>
        </div>
    </div>


    <!-- Estilos de coffee - boton agregar -->

  <div class="form-coffee-container" id="form-coffee-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#coffee">X</a>
    </div>
    
    <form class="form-coffee" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="coffee-id">

        <label for="coffee-title">Titulo</label><br>
        <input type="text" name="coffee-title" id="coffee-title" placeholder="Nombre:"><br>

        <label for="coffee-price">Precio</label>
        <input type="text" name="coffee-price" id="coffee-price" placeholder="Precio:"><br>

        <label for="image">Imagen</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_coffee)): ?>
             <p class="errors"><?php echo $errors_coffee; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-coffee" value="Modificar">
    </form>
  </div>

    <!-- ================== Estilos de cakes ================== -->

    <div id="our-cakes"></div>

    <div class="column__cake-background">
        <div class="column__cake-container container">
        <h3 class="column__cake-container-title">NUESTROS POSTRES</h3>
    	<div class="column__cake-content">

            <?php foreach($cakes_array as $cakes): ?>

            <div class="column__cake">
                    <div class="column__cake-content__img">
                        <img src="../img/<?php echo $cakes['img']; ?>" class="column__cake-img" alt="<?php echo $cakes['title']; ?>">
                    </div>
                <div class="column__cake-text">
                        <h4 class="column__cake-title"><?php echo ucwords($cakes['title']); ?></h4>
                        <p class="column__cake-price__before"><i><s>$<?php echo $cakes['price'] + 10; ?>.00</s></i></p>
                        <p class="column__cake-price">$<?php echo $cakes['price']; ?>.00</p>

                <a href="<?php echo '#' . $cakes['title']; ?>"><button class="cakes-delete">Borrar</button></a>
                
    <!-- Estilos de cakes - boton borrar -->

    <div class="cakes-delete-container" id="<?php echo $cakes['title']; ?>">
        <div class="cakes-delete-content">
            <h3 class="cakes-delete-title">¿Esta seguro que desea borrar <?php echo ucwords($cakes['title']); ?>?</h3>
            <div class="cakes-delete-buttons">
                <a class="cakes-delete-cancel" href="#cakes">Cancelar</a>
                <a class="cakes-delete-accept" href="model/delete_cakes.php?id=<?php echo $cakes['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>
                </div>
            </div>

            <?php endforeach; ?>

        </div>
            <a href="#form-cakes-container"><button class="cakes-add">Añadir</button></a>
        </div>
    </div>


    <!-- Estilos de cakes - boton agregar -->

  <div class="form-cakes-container" id="form-cakes-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#cakes">X</a>
    </div>

    <form class="form-cakes" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="cakes-id">

        <label for="cakes-title">Nombre</label><br>
        <input type="text" name="cakes-title" id="cakes-title" placeholder="Nombre:"><br>
        
        <label for="cakes-price">Precio</label><br>
        <input type="text" name="cakes-price" id="cakes-price" placeholder="Precio:"><br>

        <label for="image">Imagen</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_cakes)): ?>
             <p class="errors"><?php echo $errors_cakes; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-cakes" value="Modificar">
    </form>
  </div>

    <!-- ======================== Galeria ========================== -->


    <div class="gallery-background">
        <h2 class="gallery-title" id="gallery">GALERIA</h2>

        <ul class="gallery container">
        <?php foreach($gallery_array as $gallery): ?>

            <li class="gallery__li"><a href="#<?php echo $gallery['id']; ?>"><img src="../img/<?php echo $gallery['img']; ?>" class="gallery__img" alt="<?php echo $gallery['name']; ?>"></a></li>

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
        <a href="controller/gallery.controller.php"><button class="gallery-edit">Editar</button></a>

        </ul>
    </nav>
    </div>
