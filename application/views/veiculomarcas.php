<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo "							<option value=\"0\">Indiferente</option>";
foreach ($marcas as $marca) {
	echo "							<option value=\"" . $marca['cd_marca'] . "\">" . $modelo['st_marca'] . "</option>" . PHP_EOL;
}