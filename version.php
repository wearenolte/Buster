<?php
$path = dirname( __FILE__ ) . '/.deploy.json';
$pointer = fopen( $path, 'w+' );

if ( ! $pointer ) {
	exit( "Unable to open the file: $path" );
}

$deploy = [
	'version' => time()
];
$json = json_encode( $deploy );
$json = false === $json ? '{}' : $json;
$operation = fwrite( $pointer, $json );

if ( false === $operation ) {
	echo "There was a problem while the file was created.\n";
	exit(1);
} else {
	echo "New version: " . $deploy['version'] . " created.\n";
	exit(0);
}

fclose( $pointer );
