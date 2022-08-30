    <!-- ======================== Contact Us ========================== -->


    <h3 class="contact-us-title" id="contact-us">CONTACTANOS</h3>

    <div class="contact-us container">

        <?php foreach($contact_us_array as $contact_us): ?>
      
      <div class="contact-info">
        <h3 class="contact-info-title"><?php echo $contact_us['title']; ?></h3>
        <p class="contact-info-txt"><?php echo $contact_us['description']; ?></p>
        <div class="contact-info-content">
            <p><span class="icon-phone icon-global"></span> +<?php echo $contact_us['phone']; ?></p>
            <p><span class="icon-whatsapp icon-global"></span> +<?php echo $contact_us['whatsapp']; ?></p>
            <p><span class="icon-envelope icon-global"></span> <?php echo $contact_us['mail']; ?></p>
        </div>
      </div>

        <?php endforeach; ?>

      <div class="contact-form-container">
            <h3 class="contact-form-container-title">Escribe tus datos</h3>
        <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <input type="text" name="name" placeholder="Escribe tu nombre">
          <input type="text" name="mail" placeholder="Escribe tu correo">
          <input type="text" name="phone" placeholder="Escribe tu télefono">
          <textarea name="area_msg" placeholder="Escribe un mensaje"></textarea>
                <?php
                if (!empty($contact_form_errors)) {
                    // echo "<p>$contact_form_errors</p>";
                } else {
                    // echo "<p>$contact_form_errors</p>";
                }
                ?>
          <input type="submit" name="btn-contact" value="Enviar">
        </form>
      </div>
    </div>
    <!--Map of Google-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481.65721091017167!2d-92.14670392138582!3d15.033856641544443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e0add7e127ae3%3A0x5fd88adbfe92705f!2sCacahoat%C3%A1n%2C%20Chis.!5e0!3m2!1ses!2smx!4v1592762465529!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

