<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?> 
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
			<?php echo form_open("usuario/alterasenha", array("class"=>"form-horizontal")) . PHP_EOL ?>
					<fieldset>

						<!-- Form Name -->
						<legend>Altera a senha do usuário logado</legend>

						<!-- Appended Input-->
						<div class="control-group">
							<label  class="control-label">Senha</label>	
							<div class="controls">								
								<input id="iSenha" name="iSenha" class="input-xlarge"
									placeholder="preencha aqui sua nova senha" type="password"
									required="" value='<?php set_value('iSenha') ?>' >
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">Repetir Senha</label>	
							<div class="controls">								
								<input id="iSenhaRep" name="iSenhaRep" class="input-xlarge"
									placeholder="repita aqui sua nova senha" type="password"
									required="" value='<?php set_value('iSenhaRep') ?>' >
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-primary">Gravar</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
