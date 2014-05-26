<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php 
	setlocale (LC_ALL, 'pt_BR'); 
	ini_set('mssql.charset', 'utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css" media="all">
		body {
			font-family: Verdana, Arial, Helvetica, sans-serif; 
			font-size: 11px;
		}
		a, a:link, a:active, a:hover {
			font-family: Verdana, Arial, Helvetica, sans-serif; 
			font-size: 11px;
		}		
		table {
			font-family: Verdana, Arial, Helvetica, sans-serif; 
			font-size: 11px;
		}
		td {
			font-family: Verdana, Arial, Helvetica, sans-serif; 
			font-size: 11px;
		}		
		span {
			font-family: Verdana, Arial, Helvetica, sans-serif; 
			font-size: 11px;
		}
	</style>
</head>
<body>
<table align="center" width="780" cellpadding="0" cellspacing="0" border="0"> 
	<tr align="left" height="60">
		<td>
			<table width="100%">
				<tr>
					<td width="40%" style="font-size: xx-small;">Em caso de dúvidas ou problemas em relação a este email ligue para +55 (11) 2626-8126 ou +55 (11) 2626-8127.</td>
					<td align="right" width="60%" style="font-size: xx-small;">Acesse o site: <a style="color: #00a5a7;" href="http://www.querocarros.com">Querocarros.com</a></td>
				</tr>
			</table>		
		</td>
	</tr>
	<tr align="left">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0" style="border-bottom: 2 solid #961b1d;">
			<tr>
				<td width="40%" style="color: #961b1d;	font-weight: bold; font-size: large;">Alerta de anuncios</td>
				<td width="60%" align="right" style="font-size: small;"><img alt="" src="<?php echo base_url() ?>assets/img/querocarros.com.png"/></td>
			</tr>
		</table>
		<td>
	</tr>		
	<tr align="left" height="10">
		<td>
		</td>
	</tr>
	<tr align="left">
		<td>
			<table width="100%" bgcolor="#bc3635" style="color: white;">
				<tr>
					<td>Total de anuncios foram encontrados para seu perfil: <strong><?php echo count($anuncios) ?></strong></td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr align="left" height="10">
		<td>
		</td>
	</tr>
	<tr align="left">
		<td>
			<table width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td>Você esta recebendo a lista de veículos que encontramos de acordo com o seu alerta cadastrado no <a style="color: #00a5a7;" href="http://www.querocarros.com">Querocarros.com</a>.</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr align="left">
		<td>
			<table  width="100%" cellpadding="5" cellspacing="5"  style="border: 1 solid black;">
				<tr>
					<td width="50%" style="font-weight: bold; font-size: large;"><img alt="Folder List" src="<?php echo base_url() ?>assets/img/FolderList.png"> Resultatos do seu alerta</td>
					<td width="50%" align="right"><a style="color: #00a5a7;" href="http://alertas.querocarros.com/home/internal/<?php echo $usuario[0]->cd_usuario ?>/<?php echo $alerta[0]->cod_identificacao; ?>">Edite seu alerta</a></td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr align="left" height="10">
		<td>
		</td>
	</tr>
<?php foreach ($anuncios as $anuncio) {?>
	<tr align="left">
		<td>
			<table width="100%" cellpadding="5" cellspacing="5"  style="border: 1 solid #CCCCCC;">
				<tr>
					<td>
						<table width="100%" style="color: #000000;">
							<tr>	
																	
								<td width="60%" style="font-size: medium;">
									<a style="color: #000000; font-size: medium;" href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas">
									<?php echo $anuncio->DescricaoMarca . ' ' . 
									$anuncio->DescricaoModelo . ' ' . $anuncio->motor  . ' ' . 
									$anuncio->corCarro?></a>
								</td>
								<td width="40%" align="right" style="font-size: medium;">R$ <?php echo number_format($anuncio->preco_revenda, 2, ",", "."); ?></td>
							</tr>
						</table>
					</td>				
				</tr>
				<tr>
					<td>
						<table  width="100%" style="color: #BFBFBF; font-size: x-small;">
							<tr>
								<td width="60%"><?php echo mb_convert_encoding($anuncio->CidadeVendedor . ' ' . $anuncio->EstadoVendedor, "UTF-8"); ?></td>
								<td width="40%"></td>
							</tr>
						</table>
					</td>
				</tr>			
				<tr>
					<td>
						<table  width="100%">
							<tr>
								<td width="20%" style="font-size: small;">
									<a style="color: #00a5a7;" href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas">
									<img alt="imagem não encontrada" src="<?php echo $anuncio->imagem;?>" width="80" height="80">
									</a>
								</td>
								<td width="80%">
									<table  width="100%">
										<tr>
											<td>
												<a style="color: black; text-decoration: none;" href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas">
												Modelo: <?php echo $anuncio->DescricaoMarca  . " " . $anuncio->DescricaoModelo . " - Cor:" . $anuncio->corCarro . " - Ano: " . $anuncio->AnoModelo . " - Transmissão: " . $anuncio->cambio ?>
												</a>
											</td>
										</tr>
										<tr>
											<td style="font-size: x-small; color: #8C8C8C;"><?php echo mb_convert_encoding($anuncio->Observacoes, "UTF-8"); ?>
											</td>
										</tr>
										<tr>
											<td style="font-size: xx-small; color: #708357;">
												<?php echo mb_convert_encoding($anuncio->NomeVendedor, 'UTF-8'); ?>
												&nbsp;<a style="color: #00a5a7;" href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas">
												Ver este anúncio</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>	
			</table>	
		</td>
	</tr>
	<tr align="left">
		<td style="height: 6px;">
		</td>
	</tr>
<?php }	?>
	<tr align="left">
		<td>
		</td>
	</tr>
</table>
</body>
</html>