<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container well well-small">
	<div class="row">
		<div class="span12">
<?php
if ($mensagem) {
	echo "			<div class=\"alert\">" . PHP_EOL;
	echo "		  		<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . PHP_EOL;
	echo "					$mensagem" .PHP_EOL; 
	echo  "		  	</div>". PHP_EOL;
}
?>
		</div>
	</div>
	<div class="row">
		<div class="span6">
			<h3>Recupere sua senha agora!</h3>
			<ul>
				<li>Para recuperar sua  preencha o seu email e clique em enviar.</li>
				<li>o Querocarros.com leh enviará sua senha para seu email.</li>
			</ul>
		</div>
		<div class="span6">
<?php echo form_open('usuario/enviaemail', array('class'=>'form-horizontal')) . PHP_EOL; ?>
				<fieldset>

					<!-- Form Name -->
					<legend>
						Recupere seu email.</a>
					</legend>

					<!-- Text input-->
					<div class="control-group">
						<label class="control-label" for="iEmail">Email</label>
						<div class="controls">
							<input id="iEmail" name="iEmail" type="text"
								placeholder="Preencha seu email aqui" class="input-xlarge"
								required value='<?php echo set_value('iEmail'); ?>'>
						</div>
					</div>

					<!-- Button -->
					<div class="control-group">
						<label class="control-label" for=""></label>
						<div class="controls">
							<button class="btn btn-primary">Enviar</button>
						</div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>
</div>
