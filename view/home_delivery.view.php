<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/home_delivery.css">
	<title>Servicio a domicilio</title>
</head>
<body>


	<div class="form__delivery-background">

	<h3 class="form__delivery-title">Por favor introdice tus datos para que podamos entregarte tu pedido</h3>

		<div class="form__delivery-container">
			<form class="form__delivery" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" class="form__delivery-input" name="first_name" placeholder="Nombre">
				<?php

				if (!empty($errors['first_name'])) {
					echo "<p class='errors'>" . $errors['first_name'] . "</p>";
				}

				?>
				<input type="text" class="form__delivery-input" name="last_name" placeholder="Apellido">
				<?php

				if (!empty($errors['last_name'])) {
					echo "<p class='errors'>" . $errors['last_name'] . "</p>";
				}

				?>
				<input type="text" class="form__delivery-input" name="address" placeholder="Dirección">
				<?php

				if (!empty($errors['address'])) {
					echo "<p class='errors'>" . $errors['address'] . "</p>";
				}

				?>
				<input type="text" class="form__delivery-input" name="city" placeholder="Ciudad">
				<?php

				if (!empty($errors['city'])) {
					echo "<p class='errors'>" . $errors['city'] . "</p>";
				}

				?>
				<input type="text" class="form__delivery-input" name="phone" placeholder="Télefono">
				<?php

				if (!empty($errors['phone'])) {
					echo "<p class='errors'>" . $errors['phone'] . "</p>";
				}

				?>
				<input type="submit" class="form__delivery-button" name="btn-form__delivery" value="Mandame mi café">
			</form>
		</div>
	</div>

</body>
</html>