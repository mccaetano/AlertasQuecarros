<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php setlocale (LC_ALL, 'pt_BR'); ?>
<html lang="pt">
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
<div style="width: 640px">
	<div style="background: #9ACD32;">
		<table style="width: 100%">
		<tr>
		<td>
			<img alt="" src="http://alertas.querocarros.com/assets/img/querocarros.com_148.png" style="width: 308px; height: 122px"/>
		</td>
		<td style="text-align: right;">
			<span style="font-weight: bold; font-size: 1.3em;color: white; ">olá&nbsp;<?php echo $alerta[0]->email?></span>
		</td>
		</tr>
		</table>
	</div>
	<div style="background: #CCCCCC;border: 2px solid #CCCCCC" >
		<table style="width: 100%">
		<tr>
			<td>
				Perfil de alerta:&nbsp;<span style="font-weight: bold; font-size: 1em "><?php echo $alerta[0]->titulo?></span>
			</td>
			<td style="text-align: right;">
				Período:&nbsp;<span style="font-weight: bold; font-size: 1em "><?php echo $alerta[0]->frequencia == 1 ? "Diária" : "Semanal"; ?></span>
			</td>
		</tr>
		<tr>
			<td>			
				Total de anuncios encontrados para seu perfil:&nbsp;<span style="font-weight: bold; font-size: 1em "><?php echo count($anuncios) ?></span>
			</td>
		</tr>
		</table>
	</div>
<?php foreach ($anuncios as $anuncio) {?>
	<div style="border: 2px solid #CCCCCC; background: #EEE9E9; height: 90px">
		<div style="width: 85px; height: 85px; float: left"><img alt="imagem não encontrada" src="<?php echo $anuncio->imagem?>" width="80px" height="80px"></div>
		<div>
			<a href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas" 
				style="font-weight: bold; color: red; text-decoration: none; font-size: 1.1em"><?php echo $anuncio->DescricaoMarca . ' ' . 
				$anuncio->DescricaoModelo . ' ' . $anuncio->motor  . ' ' . 
				$anuncio->corCarro  . ' - R$ ' .  number_format($anuncio->preco_revenda, 2, ",", ".")?></a><br/>
			<table style="font-size: 0.8em">
			<tr>
				<td>
					Ano Fabricação/ Modelo			
				</td>
				<td>
					Quilom.
				</td>
				<td>
					Combust.
				</td>
				<td>
					Cor
				</td>
				<td>
					Placa
				</td>
				<td>
					Portas
				</td>
				<td>
					Cambio
				</td>
			</tr>
			<tr>
				<td align="center">
					<?php echo $anuncio->AnoFabricacao . '/' . 
					$anuncio->AnoModelo?>	
				</td>
				<td align="center">
					<?php echo $anuncio->quilometragem?>&nbsp;KMs
				</td>
				<td align="center">
					<?php echo $anuncio->descCombustivel ?>
				</td>
				<td align="center">
					<?php echo $anuncio->corCarro ?>
				</td>
				<td align="center">
					Final:&nbsp;<?php echo substr($anuncio->Placa, -1) ?>
				</td>
				<td>
					<?php echo $anuncio->Portas ?>&nbsp;portas
				</td>
				<td align="center">
					<?php echo $anuncio->cambio ?>
				</td>
			</tr>
			</table>
		</div>
	</div>
<?php }?>
</div>
</body>
</html>