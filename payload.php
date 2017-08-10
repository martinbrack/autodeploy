<?php

/*
 * Endpoint for Github Webhook URLs
 *
 * see: https://help.github.com/articles/post-receive-hooks
 *
 */

// script errors will be send to this email:

`git pull origin master`;

$payload = json_decode(file_get_contents('php://input'));

$file = "list.txt";


file_put_contents($file, $payload->ref." ".$payload->sender->name);


echo "SUCCESSsssSS";