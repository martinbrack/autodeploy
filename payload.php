<?php

$payload = json_decode(file_get_contents('php://input'));

if($payload->ref === "refs/heads/master"){
    `cd production`;
    `git pull origin master`;
}
elseif($payload->ref === "refs/heads/staging"){
    `cd staging`;
    `git pull origin staging`;
}
