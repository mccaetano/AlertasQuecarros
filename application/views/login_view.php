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
		<div class="span12">
	   		<?php echo form_open('login/validate', array('class'=>'form-horizontal')) . PHP_EOL; ?>
				<fieldset>
					<legend>Login</legend>
					<div class="control-group">
						<label class="control-label" for="iloginEmail">Email</label>
						<div class="controls">
							<input type="text" id="iloginEmail" name="iloginEmail"
								placeholder="Endereço de Email" value="<?php echo set_value('iloginEmail'); ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="iloginSenha">Senha</label>
						<div class="controls">
							<input type="password" id="iloginSenha"  name="iloginSenha"
							placeholder="Senha">
						</div>
					</div>					
					<div class="control-group">
						<div class="controls">
							<label class="checkbox"> <input type="checkbox" checked="checked">Lembrar-me
							</label>
							<button class="btn btn-small btn-primary" type="submit">Entrar</button>							
							<a href="<?php echo base_url() ?>usuario/recupera" >esqueci minha senha</a>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
