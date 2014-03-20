<div class="container">
	<div class="row">
		<div class="span12">
			<div class="well well-small">
				<form class="form-horizontal" action="<?php echo base_url(); ?>alertas/adiciona" method="post">
					<fieldset>

						<!-- Form Name -->
						<legend>Crie uma alerta e receba os novos anúncios no seu e-mail</legend>

						<!-- Appended Input-->
						<div class="control-group">
							<div class="controls">
								<div class="input-append">
									<input id="inewalert" name="inewalert" class="input-xlarge"
										placeholder="preencha aqui o titulo do seu alerta" type="text"
										required=""> 
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
