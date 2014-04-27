<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php setlocale (LC_ALL, 'pt_BR'); ?>
<html lang="pt">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="font-family: Verdana,sans-serif; font-size: 11px;">
<div style="width: 780px;">
	<div style="width: 100%; padding: 0px; margin: 0px;	clear: both; height: 60px;">
		<table style="width: 100%;">
			<tr>
				<td style="width: 40%; font-size: xx-small;">Em caso de dúvidas ou problemas em relação a este email ligue para +55 (11) 2626-8126 ou +55 (11) 2626-8127.</td>
				<td style="text-align: right; width: 60%; font-size: small;">Acesse o site: <a style="color: #00a5a7;" href="http://www.querocarros.com">Querocarros.com</a></td>
			</tr>
		</table>
	</div>
	<div style="width: 100%; padding: 0px; margin: 0px; clear: both; border-bottom: 2px solid #961b1d;">
		<table style="width: 100%;">
			<tr>
				<td style="width: 40%;	color: #961b1d;	font-weight: bold; font-size: large;">Alerta de anuncios</td>
				<td style="text-align: right; width: 60%; font-size: small;"><img alt="" src="<?php echo base_url() ?>assets/img/querocarros.com.png"/></td>
			</tr>
		</table>
	</div>
	<div style="width: 100%; margin: 10px 0px 0px 0px; background-color: #bc3635; clear: both;">
		<table style="width: 100%;">
			<tr>
				<td style="width: 100%; color: white;">Total de anuncios foram encontrados para seu perfil: <strong><?php echo count($anuncios) ?></strong></td>
			</tr>
		</table>
	</div>	
	<div style="width: 100%; clear: both;">
		<table style="width: 100%; margin: 5px; padding: 5px;">
			<tr>
				<td style="width: 100%;">Você esta recebendo a lista de veículos que encontramos de acordo com o seu alerta cadastrado no <a style="color: white;" href="http://www.querocarros.com">Querocarros.com</a>.</td>
			</tr>
		</table>
	</div>		
	<div style="width: 100%; clear: both;">
		<table style="width: 98%; margin: 5px; padding: 5px; border: 1px solid black;">
			<tr>
				<td style="width: 50%; font-weight: bold; font-size: x-large;"><img alt="Folder List" src="<?php echo base_url() ?>assets/img/FolderList.png"> Resultatos do seu alerta</td>
				<td style="width: 50%; text-align: right;"><a style="color: #00a5a7;" href="http://alertas.querocarros.com/home/internal/<?php echo $usuario[0]->cd_usuario ?>/<?php echo $alerta[0]->cod_identificacao; ?>">Edite seu alerta</a></td>
			</tr>
		</table>
	</div>
<?php foreach ($anuncios as $anuncio) {?>		
	<div style="width: 100%; clear: both;">
		<table style="width: 98%; margin: 5px; padding: 5px; border-bottom: 1px solid #CCCCCC;">
			<tr>
				<td>
					<table style="width: 98%;">
						<tr>										
							<td style="width: 60%;"><a style="color: #00a5a7;" href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas" 
								><?php echo $anuncio->DescricaoMarca . ' ' . 
								$anuncio->DescricaoModelo . ' ' . $anuncio->motor  . ' ' . 
								$anuncio->corCarro?></a></td>
							<td style="width: 40%; text-align: right; color: #00a5a7;">R$ <?php echo number_format($anuncio->preco_revenda, 2, ",", "."); ?></td>
						</tr>
					</table>
				</td>				
			</tr>
			<tr>
				<td>
					<table style="width: 98%;">
						<tr>
							<td style="width: 60%; color: #CCCCCC; font-size: small;"><?php echo $anuncio->CidadeVendedor . ' ' . $anuncio->EstadoVendedor; ?></td>
							<td style="width: 40%;"></td>
						</tr>
					</table>
				</td>
			</tr>			
			<tr>
				<td>
					<table style="width: 98%;">
						<tr>
							<td style="width: 20%; font-size: small;"><img alt="imagem não encontrada" src="<?php echo $anuncio->imagem;?>" width="80px" height="80px"></td>
							<td style="width: 60%;">
								<p>Modelo: <?php echo $anuncio->DescricaoMarca  . " " . $anuncio->DescricaoModelo . " - Cor:" . $anuncio->corCarro . " - Ano: " . $anuncio->AnoModelo . " - Transmissão: " . $anuncio->cambio ?></p>
								<p style="font-size: x-small; color: #CCCCCC;"><?php echo $anuncio->Observacoes; ?></p>
								<p style="font-size: xx-small; color: #708300;"><a style="color: #708357;" alt="" href="mailto://<?php echo $anuncio->emailVendedor?>"><?php echo $anuncio->NomeVendedor;?></a></p>
							</td>
						</tr>
					</table>
				</td>
			</tr>	
		</table>
	</div>
<?php }	?>
</div>
</body>
</html>