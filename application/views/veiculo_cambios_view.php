<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo "							<option value=\"0\" " . ($selectedvalue == 0 ? "selected" : "") .  ">Indiferente</option>" . PHP_EOL;
if ($cambios) {
	foreach ($cambios as $cambio) {
		echo "							<option value=\"" . $cambio->cd_cambio . "\" " . ($selectedvalue == $cambio->cd_cambio ? "selected" : "") .  ">" . mb_convert_encoding($cambio->st_cambio, 'iso-8859-1') . "</option>" . PHP_EOL;
	}
}