<?php

/*
 * Endpoint for Github Webhook URLs
 *
 * see: https://help.github.com/articles/post-receive-hooks
 *
 */

// script errors will be send to this email:
$error_mail = "martin.brack@kommunal.at";

function run() {


    global $rawInput;


    $postBody = $_POST['payload'];

    $file = "list.txt";


    file_put_contents($file, $postBody);
}

try {
    if (!isset($_POST['payload'])) {
        echo "Works fine.";
    } else {
        run();
    }
} catch ( Exception $e ) {
    $msg = $e->getMessage();
    mail($error_mail, $msg, ''.$e);
}