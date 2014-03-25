<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
log_message('debug', "Display Marca inicou.");
echo "							<option value=\"0\" " . ($selectedvalue == 0 ? "selected" : "") .  ">Indiferente</option>" . PHP_EOL;
foreach ($marcas as $marca) {
	echo "							<option value=\"" . $marca->cd_marca . "\" " . ($selectedvalue == $marca->cd_marca ? "selected" : "") .  ">" . $marca->st_marca . "</option>" . PHP_EOL;
}
log_message('debug', "Display Marca terminou.");