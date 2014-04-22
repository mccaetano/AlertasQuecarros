<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php setlocale (LC_ALL, 'pt_BR'); ?>
<html lang="pt">
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
<div style="width: 780px">
	<div style="background: #FFFFFF;">
		<table style="width: 100%">
		<tr>
		<td>
			<img alt="" src="http://alertas.querocarros.com/assets/img/querocarros.com.png"/>
		</td>
		<td style="text-align: right;">
			<span style="font-weight: bold; font-size: 1.0em;color: red; text-decoration: underline; ">Alerta Querocarros.com tem novidades para você&nbsp;<?php echo $alerta[0]->email?></span>
		</td>
		</tr>
		</table>
	</div>
	<div style="background: #F5F5F5;border: 2px solid #F5F5F5" >
		<table style="width: 100%">
		<tr>
			<td>			
				<strong><?php echo count($anuncios) ?></strong>&nbsp;anuncios foram encontrados para seu perfil.
			</td>
		</tr>
		<tr>
			<td>
				Perfil de alerta:&nbsp;<span style="font-weight: bold; font-size: 1em "><?php echo $alerta[0]->titulo?>, Marca: <?php echo $alerta[0]->st_marca?>, Modelo: <?php echo $alerta[0]->st_modelo?></span>
			</td>
			<td style="text-align: right;">
				Período:&nbsp;<span style="font-weight: bold; font-size: 1em "><?php echo $alerta[0]->frequencia == 1 ? "Diária" : "Semanal"; ?></span>
			</td>
		</tr>
		
		</table>
	</div>
<?php foreach ($anuncios as $anuncio) {?>
	<div style="border: 2px solid #F5F5F5; background: #FFFFFF; height: 90px">
		<div style="width: 85px; height: 85px; float: left"><img alt="imagem não encontrada" src="<?php echo $anuncio->imagem?>" width="80px" height="80px"></div>
		<div>
			<a href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas" 
				style="font-weight: bold; color: red; text-decoration: none; font-size: 1.1em"><?php echo $anuncio->DescricaoMarca . ' ' . 
				$anuncio->DescricaoModelo . ' ' . $anuncio->motor  . ' ' . 
				$anuncio->corCarro  . ' - R$ ' .  number_format($anuncio->preco_revenda, 2, ",", ".")?></a><br/>
			<table style="font-size: 0.9em; padding: 5px 5px 5px 5px; width: 80%; text-align: left;">
			<tr>
				<td style="font-weight: bold; text-align: right;">Ano Fabricação/Modelo:</td>
				<td><?php echo $anuncio->AnoFabricacao . '/' . 
					$anuncio->AnoModelo?></td>
				
				<td style="font-weight: bold; text-align: right;">Quilometragem:</td>
				<td><?php echo $anuncio->quilometragem?>&nbsp;KMs</td>
				
				<td style="font-weight: bold; text-align: right;">Combustível:</td>
				<td><?php echo $anuncio->descCombustivel ?></td>
			</tr>
			<tr>
				<td style="font-weight: bold; text-align: right;">Cor:</td>
				<td><?php echo $anuncio->corCarro ?></td>
				
				<td style="font-weight: bold; text-align: right;">Placa:</td>
				<td>Final:&nbsp;<?php echo substr($anuncio->Placa, -1) ?></td>
				
				<td style="font-weight: bold; text-align: right;">Portas:</td>
				<td><?php echo $anuncio->Portas ?>&nbsp;portas</td>
			</tr>
			<tr>
				<td style="font-weight: bold; text-align: right;">Cambio:</td>
				<td><?php echo $anuncio->cambio ?></td>
				
				<td style="font-weight: bold; text-align: right;"></td>
				<td></td>
				
				<td style="font-weight: bold; text-align: right;"></td>
				<td></td>
			</tr>			
			</table>
		</div>
	</div>
<?php }?>
</div>
</body>
</html>