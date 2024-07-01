<?php

require_once __DIR__ . '/functions.php';

$slug    = 'pronamic-pay-with-rabo-smart-pay-for-woocommerce';
$version = '1.0.0';

$gcloud_bucket_name = 'gs://wp.pronamic.download/plugins/' . $slug;

$zip_filename_version = "$slug.$version.zip";

$zip_filename = "$slug.zip";

$zip_file_path = realpath( __DIR__ . '/../artifacts/' . $zip_filename_version );

run_command( "gcloud storage cp $zip_file_path $gcloud_bucket_name/$zip_file_path" );

run_command( "gcloud storage cp $gcloud_bucket_name/$zip_file_path $gcloud_bucket_name/$zip_filename" );

$pronamic_url = 'https://wp.pronamic.directory/wp-json/pronamic-wp-extensions/v1/plugins/' . $slug;

run_command( "curl --netrc --data version=$version --request PATCH $pronamic_url" );
