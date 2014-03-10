<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link
	href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.10.4.custom.css"
	rel="stylesheet">

<link href="<?php echo base_url();?>assets/css/bootstrap.css"
	rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css"
	rel="stylesheet">
<?php echo isset($customcss) ? $customcss : ""?>

<style type="text/css">
body {
	margin-top: 100px;
}
</style>

<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="<?php echo base_url();?>assets/img/querocarros.com.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="<?php echo base_url();?>assets/img/querocarros.com_148.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="<?php echo base_url();?>assets/img/querocarros.com_48.png">
<link rel="apple-touch-icon-precomposed"
	href="<?php echo base_url();?>assets/img/querocarros.com_48.png">
<link rel="shortcut icon"
	href="<?php echo base_url();?>assets/img/querocarros.com_48.png">
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a href="<?php echo base_url();?>" class="brand"> <img alt="logo"
					src="<?php echo base_url();?>assets/img/querocarros.com_148.png">
				</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li><a href="<?php echo base_url();?>usuario/login">Logar</a></li>
						<li><a href="<?php echo base_url();?>usuario/novo">Cadastrar-se</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>