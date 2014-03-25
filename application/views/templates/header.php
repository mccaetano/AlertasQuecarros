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
				<div class="row">
					<div class="span6">
						<a class="btn btn-navbar" data-toggle="collapse"
							data-target=".nav-collapse"> <span class="icon-bar"></span> <span
							class="icon-bar"></span> <span class="icon-bar"></span>
						</a> <a href="<?php echo base_url();?>" class="brand"> <img alt="logo"
							src="<?php echo base_url();?>assets/img/querocarros.com.png">
						</a>
					</div>
					<div class="span6">
						<div class="nav-collapse collapse">
<?php
if($this->session->userdata('logged_in')) {
	echo <<<HTML
						<div class="container">
							<div class="row">
								<div class="span4 offset4">
									<div class="btn-group">
									  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="icon-user"></i> 
HTML;
	echo $email . PHP_EOL;
	echo <<<HTML
										    <span class="caret"></span>
										  </a>
										  <ul class="dropdown-menu">
HTML;
	echo "										<li><a href=\"" . base_url() . "login/logout\"><i class=\"icon-off\"></i> Sair</a></li>";
	echo "										<li><a href=\"" . base_url() . "login/alteraemail\"><i class=\"icon-edit\"></i> Alterar Email</a></li>";
	echo <<<HTML
										  </ul>
									</div>
								</div>
							</div>
						</div>
HTML;
} else {
	echo "						<ul class=\"nav pull-right\">" . PHP_EOL;
	echo "							<li><a href=\"" . base_url() . "login\">Logar</a></li>" . PHP_EOL;
	echo "							<li><a href=\"" . base_url() . "usuario/novo\">Cadastrar-se</a></li>" . PHP_EOL;
	echo "						</ul>" . PHP_EOL;
}
?>					
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>