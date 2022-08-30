    <!-- ======================== About Us ========================== -->

    <h3 class="about-title" id="about">ACERCA DE... NOSOTROS</h3>

    <div class="about-our__company-background">
        <div class="about-our__company container">
            <h3 class="about-our__company-title">NUESTRA EMPRESA</h3>
            <p class="about-our__company-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
            <div class="about-our__company-content__img">
                <img class="about-our__company-img" src="../../img/coffee.jpg">
            </div>
            <p class="about-our__company-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <div class="about__us-container">
        <h3 class="about__us-container-title container">¿Quienes somos?</h3>
        <?php foreach($about_array_one as $about): ?>
        <div class="about container">

            <div class="about__column">
                <div class="about__column--column1">
                    <img src="../../img/<?php echo $about['img']; ?>" class="about__column-img" alt="Cofundador" title="Cofundador">                
                </div>
                <div class="about__column--column2">
                    <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
                    <p class="about__column-txt"><?php echo $about['description']; ?></p>
                </div>
            </div>

        </div>

    <!-- Estilos de about - boton borrar -->

    <div class="about-delete-container" id="<?php echo $about['name']; ?>">
        <div class="about-delete-content">
            <h3 class="about-delete-title">¿Esta seguro que desea borrar a <?php echo ucwords($about['name']); ?>?</h3>
            <div class="about-delete-buttons">
                <a class="about-delete-cancel" href="#about">Cancelar</a>
                <a class="about-delete-accept" href="model/delete_about.php?id=<?php echo $about['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>

        <?php endforeach; ?>

        <?php foreach($about_array_two as $about): ?>
        <div class="dark-green">
                <div class="about container">

                    <div class="about__column about__column-dark">
                        <div class="about__column--column2">
                            <h3 class="about__column-name-dark"><?php echo ucwords($about['name']); ?></h3>
                            <p class="about__column-txt-dark"><?php echo $about['description']; ?></p>
                        </div>
                        <div class="about__column--column1 about__column--column1-dark">
                            <img src="../../img/<?php echo $about['img']; ?>" class="about__column-img-dark" alt="Cofundador" title="Cofundador">                
                        </div>
                    </div>

                </div>
        </div>
        <?php endforeach; ?>

        <?php foreach($about_array_three as $about): ?>
        <div class="about container">

            <div class="about__column">
                <div class="about__column--column1">
                    <img src="../../img/<?php echo $about['img']; ?>" class="about__column-img" alt="Cofundador" title="Cofundador">                
                </div>
                <div class="about__column--column2">
                    <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
                    <p class="about__column-txt"><?php echo $about['description']; ?></p>
                </div>
            </div>

        </div>
        <?php endforeach; ?>    

    </div>

    <!-- Estilos de about - boton agregar -->

    <div class="container">
        <a href="#form-about-container"><button class="about-add">Añadir</button></a>
    </div>


  <div class="form-about-container" id="form-about-container">
    <div class="cerrar-center">
        <a class="cerrar" href="#about">X</a>
    </div>
    
    <form class="form-about" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="cakes-id">

        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name" placeholder="Nombre:"><br>

        <label for="description">Descripción</label><br>
        <textarea name="description" placeholder="Descripcion:"></textarea><br>

        <label for="image">Seleccionar una imagen cuadrada (Ej. 500 x 500)</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_about)): ?>
             <p class="errors"><?php echo $errors_about; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-about" value="Modificar">
    </form>
  </div>

    <!-- Boton para subir -->

    <div class="button-up-container container">
        <a title="Ir arriba" class="button-up" href="#admin"><span class="icon-arrow-up"></span></a>
    </div>
