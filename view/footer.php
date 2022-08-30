<?php

if (isset($_GET['action'])) {

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
                <p class="copy">&copy; 2022 Coffee-Sweet | Todos los derechos reservados</p>
            </div>
            <?php endforeach; ?>
    </footer>
    <script type="text/javascript" src="../js/menu.js"></script>
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
                <p class="copy">&copy; 2022 Coffee-Sweet | Todos los derechos reservados</p>
            </div>
            <?php endforeach; ?>
    </footer>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

<?php
}
?>