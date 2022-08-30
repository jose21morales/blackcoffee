<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/reservation.css">
	<title>Servicio a domicilio</title>
</head>
<body>

	<div class="form__reservation-background">

	<h3 class="form__reservation-title">Por favor introdice tus datos para que podamos entregarte tu pedido</h3>

		<div class="form__reservation-container">
			<form class="form__reservation" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" class="form__reservation-input" name="first_name" placeholder="Nombre">
				<?php

				if (!empty($errors['first_name'])) {
					echo "<p class='errors'>" . $errors['first_name'] . "</p>";
				}

				?>
				<input type="text" class="form__reservation-input" name="last_name" placeholder="Apellido">
				<?php

				if (!empty($errors['last_name'])) {
					echo "<p class='errors'>" . $errors['last_name'] . "</p>";
				}

				?>
				<select name="tables" class="form__reservation-select">
					<option>Cantidad de mesas</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>

				<?php

				if (!empty($errors['tables'])) {
					echo "<p class='errors'>" . $errors['tables'] . "</p>";
				}

				?>

				<div class="form__reservation-container-date">
					<select name="day" class="form__reservation-select-day">
						<option>Dia</option>
						<?php

							for($i = 1; $i <= 31; $i++) {
								echo "<option>" . $i . "</option>";
							}

						?>
					</select>

					<select name="month" class="form__reservation-select-month">
						<option>Mes</option>
						<?php

						$moth = ['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Ocubre','Nomviembre', 'Diciembre'];

							for($i = 0; $i <= 11; $i++) {
								echo "<option>" . $moth[$i] . "</option>";
							}

						?>
					</select>

					<select name="year" class="form__reservation-select-year">
						<option>Año</option>
						<?php

							for($i = 2020; $i <= 2023; $i++) {
								echo "<option>" . $i . "</option>";
							}

						?>
					</select>					
				</div>


				<?php

				if (!empty($errors['date'])) {
					echo "<p class='errors'>" . $errors['date'] . "</p>";
				}

				?>

				<div class="form__reservation-container-time">
					<select name="hours" class="form__reservation-select-hours">
						<option>HH</option>
						<?php

						for ($i=1; $i <= 12 ; $i++) {
							if ($i > 9) {
								echo "<option>" . $i . "</option>";
							} else {
								echo "<option>" . "0" . $i . "</option>";
							}
						}

						?>
					</select>:
					<select name="minutes" class="form__reservation-select-minutes">
						<option>MM</option>
						<?php

						for ($i=1; $i < 61 ; $i++) {
							if ($i < 10) {
								echo "<option>" . "0" . $i . "</option>";
							} else {
								echo "<option>" . $i . "</option>";
							}
						}

						?>
					</select>:
					<select name="am_pm" class="form__reservation-select-am_pm">
						<option>AM</option>
						<option>PM</option>
					</select>
				</div>

				<?php

				if (!empty($errors['time'])) {
					echo "<p class='errors'>" . $errors['time'] . "</p>";
				}

				?>

				<input type="submit" class="form__reservation-button" name="btn-form__reservation" value="Quiero una mesa">
			</form>	
		</div>
	</div>


</body>
</html>