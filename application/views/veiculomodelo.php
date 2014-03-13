<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
foreach ($modelos as $modelo) {
		echo "							<option value=\"" . $modelo->cd_modelo . "\">" . $modelo->st_modelo . "</option>" . PHP_EOL;	
}
