<?php

function getProfiles()
{
$fileData = file_get_contents(__DIR__ . '/profiles.json');
$data = json_decode($fileData, true);
return $data;
}

