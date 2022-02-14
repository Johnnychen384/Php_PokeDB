
<?php
session_start();

// print_r( $_POST );

$_SESSION["f"] = $_POST;

// print_r($_SESSION["f"]);
$d = file_get_contents( 'search.json' );
$d = json_decode( $d, true );
array_unshift( $d, $_SESSION["f"] );
$d = json_encode( $d );
file_put_contents( 'search.json', $d );

header( 'location:../index.php' );


?>