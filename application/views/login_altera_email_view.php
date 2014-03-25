<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?> 
<div class="container well well-small">
	<div class="row">
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
									required="" value='<?php set_value('iNewEmail') ?>' >
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
