<!-- ================== Estilos de contact-us ================== -->

    <h3 class="contact-us-title" id="contact-us">CONTACTANOS</h3>

    <div class="contact-us container">
        <?php foreach($contact_us_array as $contact_us): ?>
        
        <div class="contact-info">
            <h3 class="contact-info-title"><?php echo $contact_us['title']; ?></h3>
            <p class="contact-info-txt"><?php echo $contact_us['description']; ?></p>
            <div class="contact-info-content">
                <p><span class="icon-phone"></span> <?php echo $contact_us['phone']; ?></p>
                <p><span class="icon-whatsapp"></span> <?php echo $contact_us['whatsapp']; ?></p>
                <p><span class="icon-envelope"></span> <?php echo $contact_us['mail']; ?></p>
            </div>

            <a href="#form-contact_us-container"><button class="contact_us-edit">Editar</button></a>
        
        </div>

        <!-- Estilos de contact_us - boton editar -->

  <div class="form-contact_us-container" id="form-contact_us-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#contact_us">X</a>
    </div>

    <form class="form-contact_us" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?php echo $contact_us['id']; ?>">

        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="<?php echo $contact_us['title']; ?>" required><br>
        
        <label for="description">Descripción</label>
        <textarea name="description" id="description" required><?php echo $contact_us['description']; ?></textarea><br>
        
        <label for="phone">Télefono</label>
        <input type="text" name="phone" id="phone" value="<?php echo $contact_us['phone']; ?>" required><br>
        
        <label for="whatsapp">WhatsApp</label>
        <input type="text" name="whatsapp" id="whatsapp" value="<?php echo $contact_us['whatsapp']; ?>" required><br>
        
        <label for="mail">Correo</label>
        <input type="text" name="mail" id="mail" value="<?php echo $contact_us['mail']; ?>" required><br> 
        
        <input type="submit" name="btn-contact_us" value="Modificar">
    </form>
  </div>

        <?php endforeach; ?>

    	<div class="contact-form-container">
            <h3 class="contact-form-container-title">Escribe tus datos</h3>
    		<form class="contact-form" action="" method="post">
    			<input type="text" name="name" placeholder="Escribe tu nombre" required>
    			<input type="text" name="mail" placeholder="Escribe tu correo" required>
    			<input type="text" name="phone" placeholder="Escribe tu télefono">
    			<textarea placeholder="Escribe un mensaje"></textarea>
    			<input type="submit" name="btn-contact" value="Enviar">
    		</form>
    	</div>
    </div>
    <!--Map of Google-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481.65721091017167!2d-92.14670392138582!3d15.033856641544443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e0add7e127ae3%3A0x5fd88adbfe92705f!2sCacahoat%C3%A1n%2C%20Chis.!5e0!3m2!1ses!2smx!4v1592762465529!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
