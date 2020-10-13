<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="userName" class="item_requerid" size="20" maxlength="25" value="<?php print $userName ?>"
		 placeholder="Entrenador 1" />
		<br/>
		<label for="email">Email</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $email ?>"
		 placeholder="entrenador@PokemonCenter.es" />
		<br/>
		<label for="passwd">Clave</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value="<?php print $passwd ?>"
		/>
		<label for="nEntrenador"></label>
		<br/>
		<input type="nombreEntrenador" name="nEntrenador" class="item_requerid" size="16" minlength="4" maxlength="16" value="<?php 			print $nEntrenador ?>"
		/>
		<label for="fCode">Código de amigo</label>
		<br/>
		<input type="friendCode" name="fCode" class="item_requerid" size="16" minlength="16" maxlength="16" value="<?php print $fCode ?>"
		/>
		
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>
