<div class="container">
	<div class="row">
		<div class="span12">
			<div class="well well-small">
			<?php form_open("alertas/adiciona", array("class"=>"form-horizontal")) ?>
					<fieldset>

						<!-- Form Name -->
						<legend>Crie uma alerta e receba os novos anúncios no seu e-mail</legend>

						<!-- Appended Input-->
						<div class="control-group">
							<div class="controls">
								<div class="input-append">
									<?php form_in ?>
									<input id="inewalert" name="inewalert" class="input-xlarge"
										placeholder="preencha aqui o titulo do seu alerta" type="text"
										required="" value='<?php set_value('inewalert') ?>' > 
									<button type="submit" class="btn">Enviar</button>
								</div>

							</div>
						</div>

					</fieldset>
				</form>

			</div>
		</div>
	</div>
</div>
