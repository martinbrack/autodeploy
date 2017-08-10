<?php

/*
 * Endpoint for Github Webhook URLs
 *
 * see: https://help.github.com/articles/post-receive-hooks
 *
 */

// script errors will be send to this email:

`git pull origin master`;

$payload = json_decode($_REQUEST['payload']);

$file = "list.txt";

file_put_contents($file, "I got some json: " . $payload->ref);


echo "SUCCESSSS";