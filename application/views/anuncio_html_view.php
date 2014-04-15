<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<html lang="pt">
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
<div style="width: 640px">
<div style="background: #CCCCCC">
	<table style="width: 100%">
	<tr>
	<td>
		<img alt="" src="<?php echo base_url(); ?>assets/img/querocarros.com.png"/>
	</td>
	<td style="text-align: right;">
		olá&nbsp;<?php echo $alerta[0]->email?>
	</td>
	</tr>
	</table>
</div>
<div style="border: 2px solid #CCCCCC" >
	<table style="width: 100%">
	<tr>
		<td>
			Perfil de alerta:&nbsp;<?php echo $alerta[0]->titulo?>
		</td>
		<td style="text-align: right;">
			Período:&nbsp;<?php echo $alerta[0]->frequencia == 1 ? "Diária" : "Semanal"; ?>
		</td>
	</tr>
	<tr>
		<td>			
			Total de anuncios encontrados para seu perfil: <?php echo count($anuncios) ?>
		</td>
	</tr>
	</table>
</div>
<?php foreach ($anuncios as $anuncio) {?>
<div style="border: 2px solid #CCCCCC">
	<table style="width: 100%">
	<tr>
		<td colspan="6">
			<a href="#" style="font-weight: bold; color: red; text-decoration: none"><?php echo $anuncio->DescricaoMarca . ' ' . 
			$anuncio->DescricaoModelo . ' ' . $anuncio->motor  . ' ' . 
			$anuncio->corCarro  . ' - ' . $anuncio->preco_revenda?></a>
		</td>
		<td>
			<?php echo ""?>
		</td>
	</tr>
	<tr>
		<td>
			Ano Fabricação/Modelo			
		</td>
		<td>
			Quilometragem
		</td>
		<td>
			Combustivel
		</td>
		<td>
			Cor
		</td>
		<td>
			Final da placa
		</td>
		<td>
			Portas
		</td>
		<td>
			Cambio
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $anuncio->AnoFabricacao . '/' . 
			$anuncio->AnoModelo?>	
		</td>
		<td>
			<?php echo $anuncio->quilometragem?>
		</td>
		<td>
			<?php echo $anuncio->descCombustivel ?>
		</td>
		<td>
			<?php echo $anuncio->corCarro ?>
		</td>
		<td>
			<?php echo substr($anuncio->Placa, -1) ?>
		</td>
		<td>
			<?php echo $anuncio->Portas ?>&nbsp;portas
		</td>
		<td>
			<?php echo $anuncio->cambio ?>
		</td>
	</tr>
	</table>
</div>
<?php }?>
</div>
</body>
</html>