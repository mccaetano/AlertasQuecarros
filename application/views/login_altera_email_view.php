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
			<?php echo form_open("usuario/alteraemail", array("class"=>"form-horizontal")) . PHP_EOL ?>
					<fieldset>

						<!-- Form Name -->
						<legend>Altera o email do usuário logado</legend>

						<!-- Appended Input-->
						<div class="control-group">
							<label  class="control-label">Email</label>	
							<div class="controls">								
								<input id="iNewEmail" name="iNewEmail" class="input-xlarge"
									placeholder="preencha aqui seu novo endereço de email" type="text"
									required value='<?php set_value('iNewEmail') ?>' >
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-primary">Gravar</button>
							</div>
						</div>
					</fieldset>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>
