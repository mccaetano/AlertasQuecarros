<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo "							<option value=\"0\" " . ($selectedvalue == 0 ? "selected" : "") .  ">Indiferente</option>" . PHP_EOL;
if ($cambios) {
	foreach ($cambios as $cambio) {
		echo "							<option value=\"" . $cambio->cd_cambio . "\" " . ($selectedvalue == $cambio->cd_cambio ? "selected" : "") .  ">" . $cambio->st_cambio . "</option>" . PHP_EOL;
	}
}