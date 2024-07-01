<?php

require_once __DIR__ . '/functions.php';

$slug    = 'pronamic-pay-with-rabo-smart-pay-for-woocommerce';
$version = '1.0.0';

$zip_file_path = realpath( __DIR__ . "/../artifacts/$slug.$version.zip" );

run_command( "gh release create v$version --title $version $zip_file_path" );
