<?php

if (isset($_GET['action'])) {

?>

<!-- ================== Estilos de footer ================== -->

<footer class="main-footer">
            <?php foreach($footer_array as $footer): ?>

            <div class="container container--flex">
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">¿Por qué visitarnos?</h2>
                    <p class="footer__column-txt"><?php echo $footer['description']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Contáctanos</h2>
                    <p class="footer__column-txt"><?php echo $footer['place']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['phone']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['mail']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Siguenos en nuestras redes</h2>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['facebook']; ?>" class="icon-facebook">Facebook</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['instagram']; ?>" class="icon-instagram">Instagram</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['twitter']; ?>" class="icon-twitter">Twitter</a></p>
                </div>

            <a href="#form-footer-container"><button class="footer-edit">Editar</button></a>
                
                <p class="copy">&copy; 2022 Coffee-Sweet | Todos los derechos reservados</p>
            </div>
            <?php endforeach; ?>


    </footer>
  <!-- Estilos de footer - boton editar -->

  <div class="form-footer-container" id="form-footer-container">
    <div class="cerrar-center-footer">
        <a class="cerrar-footer" href="#footer">X</a>
    </div>
    
    <form class="form-footer" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="form-footer--flex">
        
        <input type="hidden" name="id" value="<?php echo $footer['id']; ?>">
       
       <div class="form-footer-description">
        <label for="description">¿Por qué visitarnos?</label>
        <textarea type="text" name="description" id="description"><?php echo $footer['description']; ?></textarea><br>
       </div>

       <div class="form-footer-contact">
        
        <label for="place">Lugar</label>
        <input type="text" name="place" id="place" value="<?php echo $footer['place']; ?>"><br>
           
        <label for="phone">Télefono</label>
        <input type="text" name="phone" id="phone" value="<?php echo $footer['phone']; ?>"><br>

        <label for="mail">Correo</label>
        <input type="text" name="mail" id="mail" value="<?php echo $footer['mail']; ?>"><br>
       </div>

       <div class="form-footer-social__networks">
        <label for="facebook">Facebook (Link)</label>
        <input type="text" name="facebook" id="facebook" value="<?php echo $footer['facebook']; ?>"><br>

        <label for="instagram">Instagram (Link)</label>
        <input type="text" name="instagram" id="instagram" value="<?php echo $footer['instagram']; ?>"><br>

        <label for="twitter">Twitter (Link)</label>
        <input type="text" name="twitter" id="twitter" value="<?php echo $footer['twitter']; ?>"><br>
        </div>
    </div>

        <input type="submit" name="btn-footer" value="Modificar">
    </form>
  </div>

    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/open.js"></script>
    <script type="text/javascript" src="../js/navigation.js"></script>
</body>
</html>

<?php

} else {

?>

<footer class="main-footer">
            <?php foreach($footer_array as $footer): ?>

            <div class="container container--flex">
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">¿Por qué visitarnos?</h2>
                    <p class="footer__column-txt"><?php echo $footer['description']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Contáctanos</h2>
                    <p class="footer__column-txt"><?php echo $footer['place']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['phone']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['mail']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Siguenos en nuestras redes</h2>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['facebook']; ?>" class="icon-facebook">Facebook</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['instagram']; ?>" class="icon-instagram">Instagram</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['twitter']; ?>" class="icon-twitter">Twitter</a></p>
                </div>

            <a href="#form-footer-container"><button class="footer-edit">Editar</button></a>
                
                <p class="copy">&copy; 2022 Coffee-Sweet | Todos los derechos reservados</p>
            </div>
            <?php endforeach; ?>


    </footer>
  <!-- Estilos de footer - boton editar -->

  <div class="form-footer-container" id="form-footer-container">
    <div class="cerrar-center-footer">
        <a class="cerrar-footer" href="#footer">X</a>
    </div>
    
    <form class="form-footer" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="form-footer--flex">
        
        <input type="hidden" name="id" value="<?php echo $footer['id']; ?>">
       
       <div class="form-footer-description">
        <label for="description">¿Por qué visitarnos?</label>
        <textarea type="text" name="description" id="description"><?php echo $footer['description']; ?></textarea><br>
       </div>

       <div class="form-footer-contact">
        
        <label for="place">Lugar</label>
        <input type="text" name="place" id="place" value="<?php echo $footer['place']; ?>"><br>
           
        <label for="phone">Télefono</label>
        <input type="text" name="phone" id="phone" value="<?php echo $footer['phone']; ?>"><br>

        <label for="mail">Correo</label>
        <input type="text" name="mail" id="mail" value="<?php echo $footer['mail']; ?>"><br>
       </div>

       <div class="form-footer-social__networks">
        <label for="facebook">Facebook (Link)</label>
        <input type="text" name="facebook" id="facebook" value="<?php echo $footer['facebook']; ?>"><br>

        <label for="instagram">Instagram (Link)</label>
        <input type="text" name="instagram" id="instagram" value="<?php echo $footer['instagram']; ?>"><br>

        <label for="twitter">Twitter (Link)</label>
        <input type="text" name="twitter" id="twitter" value="<?php echo $footer['twitter']; ?>"><br>
        </div>
    </div>

        <input type="submit" name="btn-footer" value="Modificar">
    </form>
  </div>

    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/open.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

<?php
}
?>