<?php

/*
 * Endpoint for Github Webhook URLs
 *
 * see: https://help.github.com/articles/post-receive-hooks
 *
 */

// script errors will be send to this email:


`git pull origin master`;

$postBody = $_POST['payload'];


$file = "list.txt";

ile_put_contents($file, "Post: " . $postBody);