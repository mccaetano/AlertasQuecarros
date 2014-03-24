<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container well well-small">
	<?php echo form_open("alertas/altera", array("class"=>"form-horizontal")) ?>
		<fieldset>
			<div class="row">
				<div class="span12">
					<legend>Edição do Alerta</legend>
				</div>
			</div>
			<div class="row">
				<div class="span12">Título</div>
			</div>
			<div class="row">
				<div class="span12">
					<div class="form-group">
						<div class="form-controls">
							<input type="text" class="form-control input-xxlarge" id="iTitulo" name="iTitulo" placeholder="Preencha com o Título" value="<?php echo $alerta[0]->titulo ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span4">Preço:</div>
				<div class="span4">Marca:</div>
				<div class="span4">Fotos:</div>
			</div>
			<div class="row">
				<div class="span4">
					<div class="row">
						<div class="span2">
							<select id="iPrecoDe" name="iPrecoDe" class="form-control span2">
<?php 
	for ($i=0; $i<=200000;$i=$i+10000) {
		$selected = $alerta[0]->precoDe == $i ? "selected" : "";
		$value = $i == 0  ? "Qualquer" : number_format($i, 2, ",", ".");
		echo "								<option value=\"$i\" $selected>$value</option>" . PHP_EOL; 
	}
?>							
							</select>
						</div>
						<div class="span2"> 
							<select id="iPrecoAte" name="iPrecoAte"
								class="form-control span2">
<?php 
	for ($i=0; $i<=200000;$i=$i+10000) {
		$selected = $alerta[0]->precoAte == $i ? "selected" : "";
		$value = $i == 0  ? "Qualquer" : number_format($i, 2, ",", ".");
		echo "								<option value=\"$i\" $selected>$value</option>" . PHP_EOL; 
	}
?>							
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<select id="iMarca" name="iMarca" class="form-control">
<?php 
/*foreach ($marcas as $marca) {
		echo "					<option value=\"" . $marca->cd_marca . "\">" . ltrim($marca->st_marca) . "</option>" . PHP_EOL;	
}*/
?>
					</select>
				</div>
				<div class="span4">
					<select id="iFotos" name="iFotos" class="form-control">
						<option value="0" <?php echo $alerta[0]->fotos == 0 ? "selected" : "" ?>>Indiferente</option>
						<option value="2" <?php echo $alerta[0]->fotos == 1 ? "selected" : "" ?>>Só anúncios com imagens</option>
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
					<div class="row">
						<div class="span2">
							<select id="iAnoDe" name="iAnoDe" class="form-control  span2">
								<option value="0">Qualquer</option>
<?php 
$datein = date('Y') - 20;
$dateout = date('Y');
for ($i=$datein;$i<=$dateout;$i++) {
	echo "								<option value=\"$i\"" . ($alerta[0]->anoDe == $i ? "selected" : "") . ">$i</option>" . PHP_EOL;
}
?>
							</select>
						</div>
						<div class="span2">
							<select id="iAnoAte" name="iAnoAte"
								class="form-control  span2">									
								<option value="0">Qualquer</option>
<?php 
for ($i=$datein;$i<=$dateout;$i++) {
	echo "								<option value=\"$i\"" . ($alerta[0]->anoAte == $i ? "selected" : "") . ">$i</option>" . PHP_EOL;
}
?>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<select id="iModelo" name="iModelo" class="form-control">
						<option value="0">Indiferente</option>
<?php 
/*
foreach ($modelos as $modelo) {
		echo "							<option value=\"" . $modelo->cd_modelo . "\">" . ltrim($modelo->st_modelo) . "</option>" . PHP_EOL;	
}
*/
?>
					</select>		
				</div>
				<div class="span4">
					<select id="iTipoCombustivel" name="iTipoCombustivel"
						class="form-control">
						<option value="0" <?php echo $alerta[0]->tipocombustivel == 0 ? "selected" : "" ?>>Indiferente</option>
						<option value="1" <?php echo $alerta[0]->tipocombustivel == 1 ? "selected" : "" ?>>Gasolina</option>
						<option value="2" <?php echo $alerta[0]->tipocombustivel == 2 ? "selected" : "" ?>>Flex</option>
						<option value="3" <?php echo $alerta[0]->tipocombustivel == 3 ? "selected" : "" ?>>Diesel</option>
						<option value="4" <?php echo $alerta[0]->tipocombustivel == 4 ? "selected" : "" ?>>Álcool</option>
						<option value="5" <?php echo $alerta[0]->tipocombustivel == 5 ? "selected" : "" ?>>GNV</option>
						<option value="6" <?php echo $alerta[0]->tipocombustivel == 6 ? "selected" : "" ?>>Elétrico</option>
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
					<div class="row">
						<div class="span2">
							<select id="iNumeroPortasDe" name="iNumeroPortasDe"
								class="form-control span2">
								<option value="0" <?php echo $alerta[0]->numeroPortasDe == 0 ? "selected" : "" ?>>Qualquer</option>
								<option value="2" <?php echo $alerta[0]->numeroPortasDe == 1 ? "selected" : "" ?>>2 portas</option>
								<option value="3" <?php echo $alerta[0]->numeroPortasDe == 2 ? "selected" : "" ?>>3 portas</option>
								<option value="4" <?php echo $alerta[0]->numeroPortasDe == 3 ? "selected" : "" ?>>4 portas</option>
								<option value="5" <?php echo $alerta[0]->numeroPortasDe == 4 ? "selected" : "" ?>>5 portas</option>
							</select>
						</div>
						<div class="span2">
							<select id="iNumeroPortasAte"
								name="iNumeroPortasAte" class="form-control span2">
								<option value="0" <?php echo $alerta[0]->numeroPortasAte == 0 ? "selected" : "" ?>>Qualquer</option>
								<option value="2" <?php echo $alerta[0]->numeroPortasAte == 1 ? "selected" : "" ?>>2 portas</option>
								<option value="3" <?php echo $alerta[0]->numeroPortasAte == 2 ? "selected" : "" ?>>3 portas</option>
								<option value="4" <?php echo $alerta[0]->numeroPortasAte == 3 ? "selected" : "" ?>>4 portas</option>
								<option value="5" <?php echo $alerta[0]->numeroPortasAte == 4 ? "selected" : "" ?>>5 portas</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<input id="iCidade" name="iCidade" placeholder="Cidade"
						class="form-control" type="text" value="<?php echo $alerta[0]->cidade ?>">
				</div>
				<div class="span4">
					<select id="iTransmissao" name="iTransmissao" class="form-control">
						<option value="0" <?php echo $alerta[0]->transmissao == 0 ? "selected" : "" ?>>Indiferente</option>
						<option value="1" <?php echo $alerta[0]->transmissao == 1 ? "selected" : "" ?>>Manual</option>
						<option value="2" <?php echo $alerta[0]->transmissao == 2 ? "selected" : "" ?>>Automático</option>
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
					<div class="row">
						<div class="span2">
							<select id="iQuilometragemDe" name="iQuilometragemDe"
								class="form-control span2">
								<option value="0" <?php echo $alerta[0]->quilometragemDe == 0 ? "selected" : "" ?>>Qualquer</option>
								<option value="5000" <?php echo $alerta[0]->quilometragemDe == 5000 ? "selected" : "" ?>>5.000 km</option>
								<option value="10000" <?php echo $alerta[0]->quilometragemDe == 10000 ? "selected" : "" ?>>10.000 km</option>
								<option value="20000" <?php echo $alerta[0]->quilometragemDe == 20000 ? "selected" : "" ?>>20.000 km</option>
								<option value="30000" <?php echo $alerta[0]->quilometragemDe == 30000 ? "selected" : "" ?>>30.000 km</option>
								<option value="40000" <?php echo $alerta[0]->quilometragemDe == 40000 ? "selected" : "" ?>>40.000 km</option>
								<option value="50000" <?php echo $alerta[0]->quilometragemDe == 50000 ? "selected" : "" ?>>50.000 km</option>
								<option value="60000" <?php echo $alerta[0]->quilometragemDe == 60000 ? "selected" : "" ?>>60.000 km</option>
								<option value="70000" <?php echo $alerta[0]->quilometragemDe == 70000 ? "selected" : "" ?>>70.000 km</option>
								<option value="80000" <?php echo $alerta[0]->quilometragemDe == 80000 ? "selected" : "" ?>>80.000 km</option>
								<option value="90000" <?php echo $alerta[0]->quilometragemDe == 90000 ? "selected" : "" ?>>90.000 km</option>
								<option value="100000" <?php echo $alerta[0]->quilometragemDe == 100000 ? "selected" : "" ?>>100.000 km</option>
								<option value="150000" <?php echo $alerta[0]->quilometragemDe == 150000 ? "selected" : "" ?>>150.000 km</option>
								<option value="200000" <?php echo $alerta[0]->quilometragemDe == 200000 ? "selected" : "" ?>>200.000 km</option>
							</select>
						</div>
						<div class="span2"> 
							<select id="iQuilometragemAte"
								name="iQuilometragemAte" class="form-control span2">
								<option value="0" <?php echo $alerta[0]->quilometragemAte == 0 ? "selected" : "" ?>>Qualquer</option>
								<option value="5000" <?php echo $alerta[0]->quilometragemAte == 5000 ? "selected" : "" ?>>5.000 km</option>
								<option value="10000" <?php echo $alerta[0]->quilometragemAte == 10000 ? "selected" : "" ?>>10.000 km</option>
								<option value="20000" <?php echo $alerta[0]->quilometragemAte == 20000 ? "selected" : "" ?>>20.000 km</option>
								<option value="30000" <?php echo $alerta[0]->quilometragemAte == 30000 ? "selected" : "" ?>>30.000 km</option>
								<option value="40000" <?php echo $alerta[0]->quilometragemAte == 40000 ? "selected" : "" ?>>40.000 km</option>
								<option value="50000" <?php echo $alerta[0]->quilometragemAte == 50000 ? "selected" : "" ?>>50.000 km</option>
								<option value="60000" <?php echo $alerta[0]->quilometragemAte == 60000 ? "selected" : "" ?>>60.000 km</option>
								<option value="70000" <?php echo $alerta[0]->quilometragemAte == 70000 ? "selected" : "" ?>>70.000 km</option>
								<option value="80000" <?php echo $alerta[0]->quilometragemAte == 80000 ? "selected" : "" ?>>80.000 km</option>
								<option value="90000" <?php echo $alerta[0]->quilometragemAte == 90000 ? "selected" : "" ?>>90.000 km</option>
								<option value="100000" <?php echo $alerta[0]->quilometragemAte == 100000 ? "selected" : "" ?>>100.000 km</option>
								<option value="150000" <?php echo $alerta[0]->quilometragemAte == 150000 ? "selected" : "" ?>>150.000 km</option>
								<option value="200000" <?php echo $alerta[0]->quilometragemAte == 200000 ? "selected" : "" ?>>200.000 km</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<input id="iEstado" name="iEstado" placeholder="Estado"
						class="form-control input-md" type="text" value="<?php echo $alerta[0]->estado ?>">
				</div>
				<div class="span4">
					<select id="iTipo" name="iTipo" class="form-control">
						<option value="0" <?php echo $alerta[0]->tipo == 0 ? "selected" : "" ?>>Indifetente</option>
						<option value="1" <?php echo $alerta[0]->tipo == 1 ? "selected" : "" ?>>Hatch</option>
						<option value="2" <?php echo $alerta[0]->tipo == 2 ? "selected" : "" ?>>Sedã</option>
						<option value="3" <?php echo $alerta[0]->tipo == 3 ? "selected" : "" ?>>Utilitário Esportivo</option>
						<option value="4" <?php echo $alerta[0]->tipo == 4 ? "selected" : "" ?>>Van</option>
						<option value="5" <?php echo $alerta[0]->tipo == 5 ? "selected" : "" ?>>Picape</option>
						<option value="6" <?php echo $alerta[0]->tipo == 6 ? "selected" : "" ?>>Conversível</option>
						<option value="7" <?php echo $alerta[0]->tipo == 7 ? "selected" : "" ?>>Jipe</option>
						<option value="8" <?php echo $alerta[0]->tipo == 8 ? "selected" : "" ?>>Blindados</option>
						<option value="9" <?php echo $alerta[0]->tipo == 9 ? "selected" : "" ?>>Utilitário</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="span8"></div>
				<div class="span4">
					<label class="checkbox"> <input type="checkbox" value="" id="iPrecoReduzido" name="iPrecoReduzido"
					  <?php echo $alerta[0]->precoReduzido == 1 ? "checked" : "" ?>> Preço
						Reduzido
					</label>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<select id="iTipoAgendamento" name="iTipoAgendamento"
						class="form-control">
						<option value="1" <?php echo $alerta[0]->frequencia == 1 ? "selected" : "" ?>>Diário</option>
						<option value="2" <?php echo $alerta[0]->frequencia == 2 ? "selected" : "" ?>>Semanal</option>
					</select>
					<a href="#">Cancelar Alerta</a>
				</div>
				<div class="span4">
					<button type="submit" class="btn btn-primary">Gravar</button>
					<button type="button" class="btn" id="bVoltar">Voltar</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$('#bVoltar').click(function() {
		$(location).attr('href',"<?php echo base_url();?>home");
	});
	$('#iMarca').html("<option value='0'>Carregando...</option>");
	//$('#iMarca').load('<?php echo base_url();?>veiculos/marcacombo/'+$('#iMarca').val()' ));
    $('#iMarca').change(function() {
		$('#iModelo').html("<option value='0'>Carregando...</option>");
        $('#iModelo').load('<?php echo base_url();?>veiculos/modelocombo/'+$('#iMarca').val()+'/<?php echo $alerta[0]->marca;?>' );
    });
});		
</script>
