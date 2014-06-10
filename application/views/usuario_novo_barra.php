<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 
	setlocale (LC_ALL, 'pt_BR'); 
	ini_set('mssql.charset', 'utf-8');
	header('Content-type: text/plain');
?>
<div id="boxAlerta" style="background-color: #4D4D4D;padding: 20px 20px 20px 20px; margin: 0px 0px 0px 0px;position: absolute;	bottom: 0; width: 96%; " align="center">
	<form id="boxFormAlerta" action="<?php echo base_url();?>/usuario/novo">
		<div style="width: 860px;">
			<div style="text-align: right;">
				<a href="javascript: boxHidden()" title="Clique aqui para fechar"><img alt="" src="<?php echo base_url();?>assets/img/CloseRed16.png" align="middle"></a>
			</div>
			<div>
				<img alt="" src="<?php echo base_url();?>assets/img/NewsLetter.png" align="middle">
				<span style="color: red; font-size: 18px;">Receba novos carros no seu email, grátis</span>&nbsp;&nbsp; 
				<input id="iEmail" type="text" style="font-size: 18px; color: red;background-color: #CCCCCC;padding: 5px 5px 5px 5px;border: 1px solid red; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: 0px 0px 4px red; -moz-box-shadow: 0px 0px 4px red; box-shadow: 0px 0px 7px #FF9E9E;"
				 placeholder="preencha seu email aqui" size="40" title="Preencha o seu endereço de email ">&nbsp;&nbsp;				 
				<button type="submit" style="border: 0;background-color: #4D4D4D;" title="Clique aqui para se registrar"><img alt="" src="<?php echo base_url();?>assets/img/goRed.png" align="middle"></button>
			</div>
		</div> 	
	</form>
	<script type="text/javascript">
		function boxHidden() {
			var $box = document.getElementById('boxAlerta');
			$box.style.visibility='hidden';
			return false;
		}
	</script>	
</div>