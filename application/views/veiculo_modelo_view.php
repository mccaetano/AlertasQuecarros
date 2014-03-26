<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo "							<option value=\"0\" " . ($selectedvalue == 0 ? "selected" : "") . ">Indiferente</option>" . PHP_EOL;
if ($modelos) {
	foreach ($modelos as $modelo) {
			echo "							<option value=\"" . $modelo->cd_modelo . "\" " . ($selectedvalue == $modelo->cd_modelo ? "selected" : "") . ">" . $modelo->st_modelo . "</option>" . PHP_EOL;	
	}
}
