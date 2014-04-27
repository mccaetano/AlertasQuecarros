<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php setlocale (LC_ALL, 'pt_BR'); ?>
<html lang="pt">
<head>
	<title></title>
	<meta charset="UTF-8">
<style type="text/css">
* {
	font-family: Verdana,sans-serif;
	font-size: 11px;
}
a, a:link, a:visited, a:hover, a:active {
	color: #00a5a7;	
}
_div {
	border: 1px dotted black;
}
.dvBody {
	width: 780px;
}
.dv01 {
	width: 100%;
	padding: 0px;
	margin: 0px;
	clear: both;
	height: 60px;
}
.tb01 {
	width: 100%;
}
.tb01_td01 {
	width: 40%;
	font-size: xx-small;
}
.tb01_td02 {
	text-align: right;
	width: 60%;
	font-size: xx-small;
}
.dv02 {
	width: 100%;
	padding: 0px;
	margin: 0px;
	clear: both;
	border-bottom: 2px solid #961b1d;
}
.tb02 {
	width: 100%;
}
.tb02_td01 {
	width: 40%;
	color: #961b1d;
	font-weight: bold;
	font-size: large;
}
.tb02_td02 {
	text-align: right;
	width: 60%;	
	font-size: small;
}
.dv03 {
	width: 100%;
	margin: 10px 0px 0px 0px;
	background-color: #bc3635;
	clear: both;
}
.tb03 {
	width: 100%;
}
.tb03_td01 {
	width: 100%;
	color: white;
}
.dv04 {
	width: 100%;
	clear: both;
}
.tb04 {
	width: 100%;
	margin: 5px;
	padding: 5px;
}
.tb04_td01 {
	width: 100%;
}
.dv05 {
	width: 100%;
	clear: both;
}
.tb05 {
	width: 98%;
	margin: 5px;
	padding: 5px;
	border: 1px solid black;
}
.tb05_td01 {
	width: 50%;
	font-weight: bold;
	font-size: x-large;
}
.tb05_td02 {
	width: 50%;
	text-align: right;
}

.dv06 {
	width: 100%;
	clear: both;
}
.tb06 {
	width: 98%;
	margin: 5px;
	padding: 5px;
	border-bottom: 1px solid #CCCCCC;
}
.tb07 {
	width: 98%;
}
.tb07_td01 {
	width: 60%;
}
.tb07_td02 {
	width: 40%;
	text-align: right;
	color: #00a5a7;
}
.tb07_td03 {
	width: 60%;
	color: #CCCCCC;
	font-size: small;
}
.tb07_td04 {
	width: 40%;
}
.tb07_td05 {
	width: 20%;
	font-size: small;
}
.tb07_td06 {
	width: 60%;
}
.p01 {
	font-size: x-small;
	color: #CCCCCC;
}
.p02 a {
	font-size: xx-small;
	color: #708300;
}

</style>
</head>
<body>
<div class="dvBody">
	<div class="dv01">
		<table class="tb01">
			<tr>
				<td class="tb01_td01">Em caso de dúvidas ou problemas em relação a este email ligue para +55 (11) 2626-8126 ou +55 (11) 2626-8127.</td>
				<td class="tb01_td02">Acesse o site: <a href="http://www.querocarros.com">Querocarros.com</a></td>
			</tr>
		</table>
	</div>
	<div class="dv02">
		<table class="tb02">
			<tr>
				<td class="tb02_td01">Alerta de anuncios</td>
				<td class="tb02_td02"><img alt="" src="<?php echo base_url() ?>assets/img/querocarros.com.png"/></td>
			</tr>
		</table>
	</div>
	<div class="dv03">
		<table class="tb03">
			<tr>
				<td class="tb03_td01">Total de anuncios foram encontrados para seu perfil: <strong><?php echo count($anuncios) ?></strong></td>
			</tr>
		</table>
	</div>	
	<div class="dv04">
		<table class="tb04">
			<tr>
				<td class="tb04_td01">Você esta recebendo a lista de veículos que encontramos de acordo com o seu alerta cadastrado no <a class="textwhite" href="http://www.querocarros.com">Querocarros.com</a>.</td>
			</tr>
		</table>
	</div>		
	<div class="dv05">
		<table class="tb05">
			<tr>
				<td class="tb05_td01"><img alt="Folder List" src="<?php echo base_url() ?>assets/img/FolderList.png"> Resultatos do seu alerta</td>
				<td class="tb05_td02"><a href="http://alertas.querocarros.com/home/internal/<?php echo $usuario[0]->cd_usuario ?>/<?php echo $alerta[0]->cod_identificacao; ?>">Edite seu alerta</a></td>
			</tr>
		</table>
	</div>
<?php foreach ($anuncios as $anuncio) {?>		
	<div class="dv06">
		<table class="tb06">
			<tr>
				<td>
					<table class="tb07">
						<tr>										
							<td class="tb07_td01"><a href="http://www.querocarros.com/detalhes.asp?codigo=ID-<?php echo str_pad($anuncio->cd_carro, 9, "0", STR_PAD_LEFT) ?>&Origem=Alertas" 
								><?php echo $anuncio->DescricaoMarca . ' ' . 
								$anuncio->DescricaoModelo . ' ' . $anuncio->motor  . ' ' . 
								$anuncio->corCarro?></a></td>
							<td class="tb07_td02">R$ <?php echo number_format($anuncio->preco_revenda, 2, ",", "."); ?></td>
						</tr>
					</table>
				</td>				
			</tr>
			<tr>
				<td>
					<table class="tb07">
						<tr>
							<td class="tb07_td03"><?php echo $anuncio->CidadeVendedor . ' ' . $anuncio->EstadoVendedor; ?></td>
							<td class="tb07_td04"></td>
						</tr>
					</table>
				</td>
			</tr>			
			<tr>
				<td>
					<table class="tb07">
						<tr>
							<td class="tb07_td05"><img alt="imagem não encontrada" src="<?php echo $anuncio->imagem;?>" width="80px" height="80px"></td>
							<td class="tb07_td06">
								<p>Modelo: <?php echo $anuncio->DescricaoMarca  . " " . $anuncio->DescricaoModelo . " - Cor:" . $anuncio->corCarro . " - Ano: " . $anuncio->AnoModelo . " - Transmissão: " . $anuncio->cambio ?></p>
								<p class="p01"><?php echo $anuncio->Observacoes; ?></p>
								<p class="p02"><a alt="" href="mailto://<?php echo $anuncio->emailVendedor?>"><?php echo $anuncio->NomeVendedor;?></a></p>
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