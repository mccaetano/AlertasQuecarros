<div class="container well well-small">
	<div class="row">
		<div class="span12">
<?php
$formValidator = validation_errors();
if ($formValidator != '') {
	echo "			<div class=\"alert\">" . PHP_EOL;
	echo "		  		<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . PHP_EOL;
	echo "					$formValidator" .PHP_EOL; 
	echo  "		  	</div>". PHP_EOL;
}
?>
		</div>
	</div>
	<div class="row">
		<div class="span6">
			<h3>Crie sua conta QueroCarros.com agora!</h3>
			<ul>
				<li>Crie e gerencie seus alertas personalizados do QueroCarros.com e receba anúncios novos no seu email.</li>
				<li>Personalize seu perfil de usuário e seus dados cadastrais.</li>
			</ul>
		</div>
		<div class="span6">
<?php echo form_open('usuario/adicionar', array('class'=>'form-horizontal')) . PHP_EOL; ?>
				<fieldset>

					<!-- Form Name -->
					<legend>
						Crie uma conta grátis <a href="<?php echo base_url();?>login"><small>você já tem uma conta
							QueroCarros.com!</small></a>
					</legend>

					<!-- Text input-->
					<div class="control-group">
						<label class="control-label" for="iEmail">Email</label>
						<div class="controls">
							<input id="iEmail" name="iEmail" type="text"
								placeholder="Preencha seu email aqui" class="input-xlarge"
								required="" value='<?php echo set_value('iEmail'); ?>'>
						</div>
					</div>

					<!-- Password input-->
					<div class="control-group">
						<label class="control-label" for="iSenha">Senha</label>
						<div class="controls">
							<input id="iSenha" name="iSenha" type="password"
								placeholder="Preencha sua senha com mánimo 6 dígitos"
								class="input-xlarge" required="">
						</div>
					</div>

					<!-- Password input-->
					<div class="control-group">
						<label class="control-label" for="iRepSenha">Repita a Senha:</label>
						<div class="controls">
							<input id="iRepSenha" name="iRepSenha" type="password"
								placeholder="Preencha sua senha com mánimo 6 dígitos"
								class="input-xlarge" required="">
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<label class="checkbox"> <input type="checkbox" id="iNews" name="iNews" checked="checked">Desejo receber a newsletter do QueroCarrros.com e promoções de parceiros
							</label>
							<label class="checkbox"> <input type="checkbox" id="iAcc" name="iAcc">Aceito os Termos e Política de Privacidade do QueroCarros.com
							</label>
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
