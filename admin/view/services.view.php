    <!-- ======================== Services ========================== -->

    <h3 class="service-title" id="services">SERVICIOS</h3>

        <div class="home__delivery">
            <div class="home__delivery-background">
                <div class="home__delivery--flex container">
                    <div class="home__delivery-column home__delivery-column--1">
                        <h2 class="home__delivery-title">Servicio a domicilio</h2>
                        <p class="home__delivery-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="home_delivery.controller.php"><button class="home__delivery-button">Mandame un café</button></a>
                    </div>
                    <div class="home__delivery-column home__delivery-column--2">
                        <div class="home__delivery-border__img">
                            <img class="home__delivery-img" src="../img/coffee.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reservation__table">
            <div class="reservation__table-background">
                <div class="reservation__table--flex container">
                    <div class="reservation__table-column reservation__table-column--1">
                        <img class="reservation__table-img" src="../../img/reservation.jpeg">
                    </div>
                    <div class="reservation__table-column reservation__table-column--2">
                        <h2 class="reservation__table-title">Reservaciones</h2>
                        <p class="reservation__table-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="../controller/reservation.controller.php"><button class="reservation__table-button">¡Quiero una mesa!</button></a>
                    </div>
                </div>
            </div>
        </div>

<div class="service__container-background">
    <div class="service__container container">

        <?php foreach($services_array as $services): ?>
        
        <div class="service__column">
            <div class="service__column-content__img">
                <img src="../../img/<?php echo $services['img']; ?>" class="service__column-img" alt="Cafeteria" title="Cafeteria">                
            </div>

            <div class="service__column-text">
                <h3 class="service__column-title"><?php echo ucwords($services['title']); ?> </h3>
                <p class="service__column-txt"><? echo $services['txt']; ?></p>
            </div>

            <a href="<?php echo '#' . $services['title']; ?>"><button class="services-delete">Borrar</button></a>

            <!-- Estilos de services - boton borrar -->

            <div class="services-delete-container" id="<?php echo $services['title']; ?>">
                <div class="services-delete-content">
                    <h3 class="services-delete-title">¿Esta seguro que desea borrar <?php echo ucwords($services['title']); ?>?</h3>
                    <div class="services-delete-buttons">
                        <a class="services-delete-cancel" href="#services">Cancelar</a>
                        <a class="services-delete-accept" href="model/delete_services.php?id=<?php echo $services['id']; ?>">Aceptar</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>
    <a href="#form-services-container"><button class="services-add">Añadir</button></a>
</div>

<!-- Estilos de servicios - boton agregar -->

  <div class="form-services-container" id="form-services-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#services">X</a>
    </div>
    
    <form class="form-services" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="services-id">

        <label for="services-title">Titulo</label><br>
        <input type="text" name="services-title" id="services-title" placeholder="Nombre:"><br>

        <label for="services-text">Descripción</label><br>
        <textarea name="services-text" placeholder="Descripción:"></textarea><br>

        <label for="image">Seleccionar una imagen cuadrada (Ej. 500 x 500)</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_services)): ?>
             <p class="errors"><?php echo $errors_services; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-services" value="Modificar">
    </form>
  </div>
