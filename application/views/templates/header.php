<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	<?php echo $customcss ? $customcss : "" ?>
	<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>