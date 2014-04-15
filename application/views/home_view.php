<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?> 
<div class="container well well-small">
	<div class="row">
		<div class="span6">
			<h3><i class="icon-list"></i> Minha de lista alertas</h3>
		</div>
		<div class="span6 text-right">
			<a href="alertas/novo">Adicione um novo alerta</a>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Alertas</th>
						<th>Frequência</th>
						<th>A pesquisa foi guardada</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php 

if ($alertasLista != FALSE) {
	foreach ($alertasLista as $alerta) {
		echo "					<tr>";
		echo "						<td>$alerta->titulo</td>" . PHP_EOL;
		echo "						<td>" . ($alerta->frequencia == 1 ? "Diária" : "Semanal") . "</td>" . PHP_EOL;
		echo "						<td>" .  date_format(date_create($alerta->dataalteracao), "d/m/y h:i:s") . "</td>" . PHP_EOL;								
		echo "						<td><a href='alertas/edita/" .  $alerta->cod_identificacao . "'>Editar</a></td>" . PHP_EOL;
		echo "					</tr>" . PHP_EOL;
	}
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
