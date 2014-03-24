<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo "							<option value=\"0\">Indiferente</option>" . PHP_EOL;
foreach ($modelos as $modelo) {
		echo "							<option value=\"" . $modelo->cd_modelo . "\">" . $modelo->st_modelo . "</option>" . PHP_EOL;	
}
