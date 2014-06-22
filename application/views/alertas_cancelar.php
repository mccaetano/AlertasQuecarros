<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container well well-small">
	<div class="row">
		<div class="span12">
<?php
if ($mensagem) {
	echo "			<div class=\"alert\">" . PHP_EOL;
	echo "		  		<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . PHP_EOL;
	echo "					$mensagem" .PHP_EOL; 
	echo  "		  	</div>". PHP_EOL;
}
?>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<h1>Cancelar seus alertas no Querocarros.com</h1>
			<br/>
			<br/>
			<br/>
			<br/>
			<div class="alert">Os alertas para o email <?php echo $email;?> foram cancelados.</div>
		</div>
	</div>
</div>
