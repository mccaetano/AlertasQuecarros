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
				<td width="40%" style="color: #961b1d;	font-weight: bold; font-size: large;">Recuperar Senha</td>
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
					<td>Você esta recebendo sua senha de acordo com o seu cadastrado no <a style="color: #ffffff;" href="http://alertas.querocarros.com">Querocarros.com</a>.</td>
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
			<table width="100%" cellpadding="5" cellspacing="5"  style="border: 1 solid #CCCCCC;">
				<tr>
					<td>Login:</td>	
					<td><?php echo $usuario->st_email; ?></td>			
				</tr>
				<tr>
					<td>Senha:</td>	
					<td><?php echo $usuario->st_senha; ?></td>			
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
			<p>Acesse o Alertas do QueroCarros.com e troque sua senha. <a href="<?php echo base_url() ?>login/alterasenha/<?php echo urlencode($usuario->st_email) ?>">CLIQUE AQUI</a>.</p>			 
		</td>
	</tr>
	<tr align="left">
		<td>
		</td>
	</tr>
</table>
</body>
</html>