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
					<div class="form-group">
						<div class="controls">
							<select id="iPrecoDe" name="iPrecoDe" class="form-control span2">
<?php 
	for ($i=0; $i<=200000;$i=$i+10000) {
		$selected = $alerta[0]->precoDe == $i ? "selected" : "";
		$value = $i == 0  ? "Qualquer" : number_format($i, 2, ",", ".");
		echo "								<option value=\"$i\" $selected>$value</option>" . PHP_EOL; 
	}
?>							
							</select>&nbsp;-&nbsp; 
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
								<option value="0">Qualquer</option>
<?php 
$datein = date('Y') - 20;
$dateout = date('Y');
for ($i=$datein;$i<=$dateout;$i++) {
	echo "								<option value=\"$i\">$i</option>" . PHP_EOL;
}
?>
							</select>&nbsp;-&nbsp; <select id="iAnoAte" name="iAnoAte"
								class="form-control  span2">									
								<option value="0">Qualquer</option>
<?php 
for ($i=$datein;$i<=$dateout;$i++) {
	echo "								<option value=\"$i\">$i</option>" . PHP_EOL;
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
							</select>&nbsp;-&nbsp; 
						<select id="iNumeroPortasAte"
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
							</select>&nbsp;-&nbsp; 
							<select id="iQuilometragemAte"
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
					<label class="checkbox"> <input type="checkbox" value="" id="iPrecoReduzido" name="iPrecoReduzido"> Preço
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
