<?php

/*
 * Endpoint for Github Webhook URLs
 *
 * see: https://help.github.com/articles/post-receive-hooks
 *
 */

// script errors will be send to this email:

    $postBody = $_POST['payload'];

$file = "list.txt";

    file_put_contents($file, "Post: ".$postBody);