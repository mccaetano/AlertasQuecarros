<?php 
echo <<<HTML
<div class="container well well-small">
	<form>
		<fieldset>
			<div class="row">
				<div class="span12">
					<legend>Edição do Alerta</legend>
				</div>
			</div>
			<div class="row">
				<div class="span4">Preço:</div>
				<div class="span4">Marca:</div>
				<div class="span4">Fotos:</div>
			</div>
			<div class="row">
				<div class="span4">
					<div class="form-group">
						<div class="controls">
							<select id="iPrecoDe" name="iPrecoDe" class="form-control span2">
								<option value="0">Qualquer</option>
								<option value="5000">5.000,00</option>
								<option value="10000">10.000,00</option>
								<option value="20000">20.000,00</option>
								<option value="30000">30.000,00</option>
								<option value="40000">40.000,00</option>
								<option value="50000">50.000,00</option>
								<option value="60000">60.000,00</option>
								<option value="70000">70.000,00</option>
								<option value="80000">80.000,00</option>
								<option value="90000">90.000,00</option>
								<option value="100000">100.000,00</option>
								<option value="150000">150.000,00</option>
								<option value="200000">200.000,00</option>
							</select>&nbsp;-&nbsp; <select id="iPrecoAte" name="iPrecoAte"
								class="form-control span2">
								<option value="0">Qualquer</option>
								<option value="5000">5.000,00</option>
								<option value="10000">10.000,00</option>
								<option value="20000">20.000,00</option>
								<option value="30000">30.000,00</option>
								<option value="40000">40.000,00</option>
								<option value="50000">50.000,00</option>
								<option value="60000">60.000,00</option>
								<option value="70000">70.000,00</option>
								<option value="80000">80.000,00</option>
								<option value="90000">90.000,00</option>
								<option value="100000">100.000,00</option>
								<option value="150000">150.000,00</option>
								<option value="200000">200.000,00</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<select id="iMarca" name="iMarca" class="form-control">
HTML;
foreach ($data['Marcas'] as $marcas) {
		echo "<option value=\"" . $marcas->cd_marca . "\">" . $marcas->st_marcas . "</option>" . PHP_EOL;	
}
echo <<<HTML
	
						<option value="0">Indiferente</option>
						<option value="2">Só anúncios com imagens</option>
					</select>
				</div>
				<div class="span4">
					<select id="iFotos" name="iFotos" class="form-control">
						<option value="0">Indiferente</option>
						<option value="2">Só anúncios com imagens</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="span4">Ano:</div>
				<div class="span4">Modelo:</div>
				<div class="span4">Tipo Combustível:</div>
			</div>
			<div class="row">
				<div class="span4">
					<div class="form-group">
						<div class="form-controls">
							<select id="iAnoDe" name="iAnoDe" class="form-control  span2">
								<option value="1">Option one</option>
								<option value="2">Option two</option>
							</select>&nbsp;-&nbsp; <select id="iAnoAte" name="iAnoAte"
								class="form-control  span2">
								<option value="1">Option one</option>
								<option value="2">Option two</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<input id="iModelo" name="iModelo" placeholder="Modelo"
						class="form-control" type="text">
				</div>
				<div class="span4">
					<select id="iTipoCombustivel" name="iTipoCombustivel"
						class="form-control">
						<option value="0">Indiferente</option>
						<option value="1">Gasolina</option>
						<option value="2">Flex</option>
						<option value="3">Diesel</option>
						<option value="4">Álcool</option>
						<option value="5">GNV</option>
						<option value="6">Elétrico</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="span4">Número Portas:</div>
				<div class="span4">Cidade:</div>
				<div class="span4">Transmissão:</div>
			</div>
			<div class="row">
				<div class="span4">
					<div class="form-group">
						<div class="form-controls">
							<select id="iNumeroPortasDe" name="iNumeroPortasDe"
								class="form-control span2">
								<option value="0">Qualquer</option>
								<option value="2">2 portas</option>
								<option value="3">3 portas</option>
								<option value="4">4 portas</option>
								<option value="5">5 portas</option>
							</select>&nbsp;-&nbsp; <select id="iNumeroPortasAte"
								name="iNumeroPortasAte" class="form-control span2">
								<option value="0">Qualquer</option>
								<option value="2">2 portas</option>
								<option value="3">3 portas</option>
								<option value="4">4 portas</option>
								<option value="5">5 portas</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<input id="iCidade" name="iCidade" placeholder="Cidade"
						class="form-control" type="text">
				</div>
				<div class="span4">
					<select id="iTransmissao" name="iTransmissao" class="form-control">
						<option value="0">Indiferente</option>
						<option value="1">Manual</option>
						<option value="2">Automático</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="span4">Quilometragem:</div>
				<div class="span4">Estado:</div>
				<div class="span4">Tipo:</div>
			</div>
			<div class="row">
				<div class="span4">
					<div class="form-group">
						<div class="form-controls">
							<select id="iQuilometragemDe" name="iQuilometragemDe"
								class="form-control span2">
								<option value="0">Qualquer</option>
								<option value="5000">5.000 km</option>
								<option value="10000">10.000 km</option>
								<option value="20000">20.000 km</option>
								<option value="30000">30.000 km</option>
								<option value="40000">40.000 km</option>
								<option value="50000">50.000 km</option>
								<option value="60000">60.000 km</option>
								<option value="70000">70.000 km</option>
								<option value="80000">80.000 km</option>
								<option value="90000">90.000 km</option>
								<option value="100000">100.000 km</option>
								<option value="150000">150.000 km</option>
								<option value="200000">200.000 km</option>
							</select>&nbsp;-&nbsp; <select id="iQuilometragemAte"
								name="iQuilometragemAte" class="form-control span2">
								<option value="0">Qualquer</option>
								<option value="5000">5.000 km</option>
								<option value="10000">10.000 km</option>
								<option value="20000">20.000 km</option>
								<option value="30000">30.000 km</option>
								<option value="40000">40.000 km</option>
								<option value="50000">50.000 km</option>
								<option value="60000">60.000 km</option>
								<option value="70000">70.000 km</option>
								<option value="80000">80.000 km</option>
								<option value="90000">90.000 km</option>
								<option value="100000">100.000 km</option>
								<option value="150000">150.000 km</option>
								<option value="200000">200.000 km</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<input id="iEstado" name="iEstado" placeholder="Estado"
						class="form-control input-md" type="text">
				</div>
				<div class="span4">
					<select id="iTipo" name="iTipo" class="form-control">
						<option value="0">Indifetente</option>
						<option value="1">Hatch</option>
						<option value="2">Sedã</option>
						<option value="3">Utilitário Esportivo</option>
						<option value="4">Van</option>
						<option value="5">Picape</option>
						<option value="6">Conversível</option>
						<option value="7">Jipe</option>
						<option value="8">Blindados</option>
						<option value="9">Utilitário</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="span8"></div>
				<div class="span4">
					<label class="checkbox"> <input type="checkbox" value=""> Preço
						Reduzido
					</label>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<select id="iTipoAgendamento" name="iTipoAgendamento"
						class="form-control">
						<option value="1">Diário</option>
						<option value="2">Semanal</option>
					</select>
					<a href="#">Cancelar Alerta</a>
				</div>
				<div class="span4">
					<button type="submit" class="btn btn-primary">Enviar</button>
					<button type="button" class="btn">Cancelar</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>
HTML;
