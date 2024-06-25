// Install our library by running the following composer command
// composer require asharma327/apispreadsheets-php
// Read library specs in more detail here: https://github.com/asharma327/apispreadsheets-php

<?php

require 'vendor/autoload.php';

use ApiSpreadsheets\Spreadsheet;

$data = ["Name"=>"value","Email"=>"value","Message"=>"value"];

$response = Spreadsheet::create('WWKeHBxDRLSKc0ca', $data);

?>