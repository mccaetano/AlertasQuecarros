<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
foreach ($marcas as $marca) {
	echo "							<option value=\"" . $marca['cd_marca'] . "\">" . $modelo['st_marca'] . "</option>" . PHP_EOL;
}